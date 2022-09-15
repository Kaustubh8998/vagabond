<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Artist;
use Session, File;
use App\Http\Requests;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'image' => 'required|image',
            'name' => 'required',
            'title' => 'required'
        ]);

        $artist = Artist::create($request->all());

        if($artist){

            Session::flash('success', 'Artist added!!');
            return redirect()->back();

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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Artist $artist)
    {
        if($artist->image != "") {

            File::delete($artist->image);
            
        }

        $delete = $artist->delete();

        if($delete){

            Session::flash('success', 'Artist deleted!!');
            return redirect()->back();

        } else {

            Session::flash('error', 'Please try again.');
            return redirect()->back();

        }
    }
}
