<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Testimonial;
use Session, File;
use App\Http\Requests;
use App\Item;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{

    public function testimonials() {
        
        $testimonials = Testimonial::orderBy(DB::raw('RAND()'))->take(3)->get();

        return response()->json([
            'status' => 'Success',
            'task' => 'Fetch Testimonials',
            'testimonials' => $testimonials
        ], 200);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(10);

        return view('admin.testimonial.index')->with('testimonials', $testimonials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create')->with('trips', Item::pluck('name', 'id'))
                                               ->with('categories', Category::pluck('name', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $request->validate([
            'image' => 'image',
            'text'  => 'required',
            'name'  => 'required'
        ]);

        if($request->item_id != '') {
            $extra = ['testimonialable_id' => $request->item_id, 'testimonialable_type' => 'App\Item'];
        } elseif($request->category_id != '') {
            $extra = ['testimonialable_id' => $request->category_id, 'testimonialable_type' => 'App\Category'];
        } else {
            $extra = [];
        }

        $testimonial = Testimonial::create($request->all() + $extra);

        if($testimonial){

            Session::flash('success', 'Testimonial created!!');
            return redirect()->route('testimonials.index');

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
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit')->with('testimonial', $testimonial)->with('trips', Item::pluck('name', 'id'))->with('categories', Category::pluck('name', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {   
        $request->validate([
            'image' => 'image',
            'text'  => 'required',
            'name'  => 'required'
        ]);

        if($request->item_id != '') {
            $extra = ['testimonialable_id' => $request->item_id, 'testimonialable_type' => 'App\Item'];
        } elseif($request->category_id != '') {
            $extra = ['testimonialable_id' => $request->category_id, 'testimonialable_type' => 'App\Category'];
        } else {
            $extra = ['testimonialable_id' => NULL, 'testimonialable_type' => ''];
        }
       
        $update = $testimonial->update($request->all() + $extra);

        if($update){

            Session::flash('success', 'Testimonial edited!!');
            return redirect()->route('testimonials.index');

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
    public function delete(Testimonial $testimonial)
    {  

        if($testimonial->image != "") {

            File::delete($testimonial->image);
            
        }

        $delete = $testimonial->delete();

        if($delete){

            Session::flash('success', 'Testimonial deleted!!');
            return redirect()->route('testimonials.index');

        } else {

            Session::flash('error', 'Please try again.');
            return redirect()->back();

        }
        
    }

}
