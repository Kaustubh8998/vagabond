<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Session, File;
use App\Http\Requests;

class SlideController extends Controller
{

    public function slides() {
        
        $slides = Slide::all();

        return response()->json([
            'status' => 'Success',
            'task' => 'Fetch Slides',
            'slides' => $slides
        ], 200);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();

        return view('admin.slide.index')->with('slides', $slides);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\SlideRequest $request)
    {   

        if(Slide::count() >= 1) {
            Session::flash('error', 'Only 1 Image Can Be Added');
            return redirect()->back();
        }

        $slide = Slide::create($request->all());

        if($slide){

            Session::flash('success', 'Slide created!!');
            return redirect()->route('slides.index');

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
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('admin.slide.edit')->with('slide', $slide);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\SlideRequest $request, Slide $slide)
    {
       
       $update = $slide->update($request->all());

        if($update){

            Session::flash('success', 'Slide edited!!');
            return redirect()->route('slides.index');

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
    public function delete(Slide $slide)
    {

        if(Slide::count() <= 1) {

            Session::flash('info', 'Cannot delete image. Minimum 1 required.');
            return redirect()->back();

        } else {

            if($slide->image != "") {

                File::delete($slide->image);
                
            }

            if($slide->logo != "") {

                File::delete($slide->logo);
                
            }

            $delete = $slide->delete();

            if($delete){

                Session::flash('success', 'Slide deleted!!');
                return redirect()->route('slides.index');

            } else {

                Session::flash('error', 'Please try again.');
                return redirect()->back();

            }

        } 

        
    }

}
