<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Hash, Session, DB, Flash;
use App\Category;
use App\Slide;
use App\Date;
use App\Inquiry;
use Carbon\Carbon;
use App\Testimonial;
use App\Item;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function home() {

        $slide = Slide::first();

        $trips = Date::join('items', 'dates.item_id', '=', 'items.id')->whereDate('event_date', '>', Carbon::yesterday())->orderBy('event_date')->take(3)->get();

        $trips = (new ItemController())->formatTrips($trips, 'Date');

        $categories = Category::all();

        $testimonials = Testimonial::where('testimonialable_type', '=', '')->orderBy(DB::raw('RAND()'))->take(6)->get();

        return view('frontend.index')->with('slide', $slide)
                                     ->with('trips', $trips)
                                     ->with('categories', $categories)
                                     ->with('testimonials', $testimonials);

    }

    public function aboutus() {
        return view('frontend.about');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function terms() {
        return view('frontend.terms');
    }

    public function officeOutdoors() {
        return view('frontend.officeOutdoors');
    }

    public function vagafam() {
        return view('frontend.vagafam');
    }

    public function categoryProfile($slug) {

        $category = Category::where('slug', $slug)->firstOrFail();

        $trips = Item::where('category_id', $category->id)->where('hide', 0)->get();

        $trips = (new ItemController())->formatTrips($trips);

        $testimonials = $category->testimonials()->orderBy(DB::raw('RAND()'))->get();

        $artists = $category->artists()->orderBy(DB::raw('RAND()'))->get();

        return view('frontend.category')->with('category', $category)
                                        ->with('trips', $trips)
                                        ->with('testimonials', $testimonials)
                                        ->with('artists', $artists);

    }

    public function tripProfile($slug, $when = NULL) {
        
        $trip = Item::with('category')->with('upcoming')->with('upcomingone')->with('images')->with('details')->where('slug', $slug)->firstOrFail();

        if($when) {

            $when = Carbon::parse($when); 

            $details = Date::whereDate('event_date', $when)->where('item_id', $trip->id)->first(); 
        
        }

        $testimonials = $trip->testimonials()->orderBy(DB::raw('RAND()'))->get();

        return view('frontend.trip')->with('trip', $trip)
                                    ->with('testimonials', $testimonials)
                                    ->with('details', isset($details) ? $details : null);

    }

    public function experiences(Request $request) { 

        $slide = Slide::first();

        return view('frontend.trips')->with('slide', $slide)
                                     ->with('name', isset($request->name) ? $request->name : '')
                                     ->with('month', isset($request->month) ? $request->month : '')
                                     ->with('category_id', isset($request->category_id) ? $request->category_id : '')
                                     ->with('page', isset($request->page) ? $request->page : '');

    }

    public function vagafamForm(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'vaga_exp' => 'required'
        ]);

        // $query = Query::create($request->all());

        Mail::send('emails.vagafamform', ['name'=> $request['name'], 'number'=> $request['number'], 'email'=> $request['email'], 'vaga_exp' => $request['vaga_exp']], function($message) {
            $message->to(config('mail.to.address'), config('mail.to.name'))->subject('Vagafam Form');
        });
        
        Session::flash('success', 'Query Sent. We will get back to you.');
        return redirect()->back();

    }

    public function officeoutdoorsForm(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'company_name' => 'required',
            'group_size' => 'required'
        ]);

        // $query = Query::create($request->all());

        Mail::send('emails.officeoutdoorsform', ['name'=> $request['name'], 'number'=> $request['number'], 'email'=> $request['email'], 'company_name' => $request['company_name'], 'group_size' => $request['group_size']], function($message) {
            $message->to('contact@vagabondexperiences.com', 'Vaga Website')->subject('Office Outdoors Form');
        });
        
        Session::flash('success', 'Query Sent. We will get back to you.');
        return redirect()->back();

    }

    public function contactForm(Request $request) {
        
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'comments' => 'required',
            'experience' => 'required_if:type,Feedback',
            'date_of_trip' => 'required_if:type,Feedback'
        ]);

        $trip = '';

        if($request->type == "Inquiry") {
                
            $query = Inquiry::create($request->all()); 

            if(isset($request['item_id'])) {
                $item = $query->item;

                if($item) {
                    $trip = $item->name;
                }
            }

        }

        Mail::send('emails.contactform', ['name'=> $request['name'], 
                                          'number'=> $request['number'], 
                                          'email'=> $request['email'], 
                                          'comments' => $request['comments'], 
                                          'type' => $request['type'], 
                                          'trip' => $trip, 
                                          'experience' => $request['experience'], 
                                          'date_of_trip' => $request['date_of_trip']], function($message) {
            $message->to(config('mail.to.address'), config('mail.to.name'))->subject('Contact Form');
        });

        if($request->type == "Inquiry") {
            
            Session::flash('success', 'Query Sent. We will get back to you.');
        
        } else {
            
            Session::flash('success', 'Thanks for you Feedback!!');

        }
        
        return redirect()->back();

    }

}
