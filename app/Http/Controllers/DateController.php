<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Date;
use Session, File;
use App\Http\Requests;

class DateController extends Controller
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
            'event_date' => 'required|date|after:today',
            'event_end_date' => 'date|after:event_date',
            'cost' => 'required|numeric',
            'payment_link' => 'required'
        ]);
        
        $date = Date::create($request->all());

        if($date){

            Session::flash('success', 'Date added!!');
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
    public function delete(Date $date)
    {
        $delete = $date->delete();

        if($delete){

            Session::flash('success', 'Date removed!!');
            return redirect()->back();

        } else {

            Session::flash('error', 'Please try again.');
            return redirect()->back();

        }
    }
}
