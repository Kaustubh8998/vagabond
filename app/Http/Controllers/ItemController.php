<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use Session, File;
use App\Http\Requests;
use App\Date;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::paginate(10);

        return view('admin.item.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');

        return view('admin.item.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ItemRequest $request)
    {   
        $trip = Item::create($request->all() + ['slug' => Item::slugify($request->name), 'hide' => isset($request->hide) ? 1 : 0]);

        if($trip){

            Session::flash('success', 'Trip created!!');
            return redirect()->route('trips.index');

        } else {

            Session::flash('error', 'Please try again.');
            return redirect()->back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $images = $item->images;

        $details = $item->details()->orderBy('order')->get();

        $dates = $item->dates()->orderBy('event_date')->get();

        return view('admin.item.show')->with('item', $item)->with('images', $images)->with('details', $details)->with('dates', $dates);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $categories = Category::pluck('name', 'id');

        return view('admin.item.edit')->with('categories', $categories)->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ItemRequest $request, Item $item)
    {

        $update = $item->update($request->all() + ['slug' => Item::slugify($request->name), 'hide' => isset($request->hide) ? 1 : 0]);

        if($update){

            Session::flash('success', 'Trip edited!!');
            return redirect()->route('trips.index');

        } else {

            Session::flash('error', 'Please try again.');
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Item $item)
    {
        if($item->image != "") {

            File::delete($item->image);
            
        }

        $delete = $item->delete();

        if($delete){

            Session::flash('success', 'Trip deleted!!');
            return redirect()->route('trips.index');

        } else {

            Session::flash('error', 'Please try again.');
            return redirect()->back();

        }

    }

    public function trips(Request $request) {
        
        $query = Date::join('items', 'dates.item_id', '=', 'items.id')->join('categories', 'categories.id', '=', 'items.category_id')->whereDate('event_date', '>', Carbon::yesterday());

        if(isset($request->name)) {
            $query->whereHas('item', function($q) use ($request) {
                $q->where('name', 'LIKE', '%'.$request->name.'%');
            });
        }

        if(isset($request->category_id) && $request->category_id != '') {
            $query->whereHas('item', function($q) use ($request) {
                $q->where('category_id', $request->category_id);
            });
        }

        if(isset($request->month) && $request->month != '') { 
            $query->whereMonth('event_date', $request->month);
        }
        
        $trips = $query->select('dates.id as date_id', 'dates.event_date', 'dates.event_end_date', 'dates.cost as date_cost', 'items.*', 'categories.name as category_name')->orderBy('event_date')->paginate(9);

        $filterurl = "";

        foreach ($request->all() as $key => $value) {

            if($key == "page") {

                $filterurl = $filterurl;

            } else {

                $filterurl = $filterurl ."&".$key."=".$value;

            }

        }

        return response()->json([
            'status' => 'Success',
            'trips' => view('frontend.ajax.trips')->with('trips', $trips)->with('input', $filterurl)->render(),
        ], 200);

    }

    public function tripProfile($slug) {

        $trip = Item::with('category')->with('upcoming')->with('images')->with('details')->where('slug', $slug)->firstOrFail();

        $testimonial = $trip->testimonials()->orderBy(DB::raw('RAND()'))->first();

        return response()->json([
            'status' => 'Success',
            'task' => 'Fetch Category',
            'trip' => $trip,
            'testimonial' => $testimonial ? $testimonial : null
        ], 200);

    }

    public function upcomingTrips() {

        $trips = Date::join('items', 'dates.item_id', '=', 'items.id')->join('categories', 'categories.id', '=', 'items.category_id')->whereDate('event_date', '>', Carbon::yesterday())->orderBy('event_date')->take(3)->get();

        $trips = $this->formatTrips($trips, 'Date');

        return response()->json([
            'status' => 'Success',
            'task' => 'Fetch Trips',
            'trips' => $trips
        ], 200);

    }

    public function formatTrips($trips, $criteria = null) { 

        $formattedtrips = [];

        if($criteria) {

            foreach ($trips as $trip) { 

                $item = [];
                
                $item['id'] = $trip->date_id;
                $item['name'] = $trip->name;
                $item['slug'] = $trip->slug;
                $item['tiny_description'] = $trip->tiny_description;
                $item['image'] = $trip->image;
                $item['cost'] = $trip->cost;
                $item['event_date'] = $trip->event_date; 
                $item['category_name'] = $trip->item ? $trip->item->category->name : $trip->category_name; 
                   
    
                array_push($formattedtrips, $item); 
            }

        } else {

            foreach ($trips as $trip) { 

                $item = [];
                
                $item['id'] = $trip->id;
                $item['name'] = $trip->name;
                $item['slug'] = $trip->slug;
                $item['tiny_description'] = $trip->tiny_description;
                $item['image'] = $trip->image;
                $item['cost'] = $trip->cost;
                $item['category_name'] = $trip->category_name; 
                $item['event_date'] = '';
    
                array_push($formattedtrips, $item); 
            }

        }

        

        return $formattedtrips;
    }
    
}
