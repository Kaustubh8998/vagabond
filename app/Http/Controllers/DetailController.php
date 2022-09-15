<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use Session;
use App\Http\Requests;
use App\Item;

class DetailController extends Controller
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
            'title' => 'required',
            'text' => 'required',
            'item_id' => 'required|numeric',
        ]);

        if($request->order != '') {
            if($request->order > Item::find($request->item_id)->details()->count() && ($request->order - Item::find($request->item_id)->details()->count() > 1)) {
                $order = Item::find($request->item_id)->details()->count() + 1;
            } else {
                $order = $request->order;
                Item::find($request->item_id)->details()->where('order', '>=', $request->order)->increment('order');
            }
        } else {
            $order = Item::find($request->item_id)->details()->count() + 1;
        }
        
        $detail = Detail::create([
            'title' => $request->title,
            'text' => $request->text,
            'item_id' => $request->item_id,
            'order' => $order
        ]);

        if($detail){

            Session::flash('success', 'Added!!');
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
    public function edit(Detail $detail)
    {
        return view('admin.details.edit')->with('detail', $detail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'order' =>  'required'
        ]);

        if($request->order == $detail->order) {
            $order = $detail->order;
        } elseif ($request->order < $detail->order) {
            Item::find($detail->item_id)->details()->where('order', '>=', $request->order)->where('order', '<', $detail->order)->increment('order');
            $order = $request->order;
        } elseif ($request->order > $detail->order) {
            Item::find($detail->item_id)->details()->where('order', '>', $detail->order)->where('order', '<=', $request->order)->decrement('order');
            $order = $request->order;
        }

        $update = $detail->update([
            'title' => $request->title,
            'text' => $request->text,
            'order' => $order
        ]);

        if($update){

            Session::flash('success', 'Details edited!!');
            return redirect()->route('trips.show', $detail->item_id);

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
    public function delete(Detail $detail)
    {
        $delete = $detail->delete();

        if($delete){

            Session::flash('success', 'Deleted!!');
            return redirect()->back();

        } else {

            Session::flash('error', 'Please try again.');
            return redirect()->back();

        }
    }
}
