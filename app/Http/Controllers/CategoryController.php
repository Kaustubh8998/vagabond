<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use Session, File;
use App\Http\Requests;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CategoryRequest $request)
    {   
        $category = Category::create($request->all() + ['slug' => Category::slugify($request->name), 'hide' => isset($request->hide) ? 1 : 0]);

        if($category){

            Session::flash('success', 'Category created!!');
            return redirect()->route('category.index');

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
    public function show(Category $category)
    {
        $images = $category->images;

        $artists = $category->artists;

        return view('admin.category.show')->with('category', $category)->with('images', $images)->with('artists', $artists);
    }

    public function icon(Category $category, Request $request)
    {
        $request->validate([
            'icon' => 'required|image'
        ]);

        $update = $category->update($request->all());

        if($update){

            Session::flash('success', 'Icon added!!');
            return redirect()->back();

        } else {

            Session::flash('error', 'Please try again.');
            return redirect()->back();

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CategoryRequest $request, Category $category)
    {
       
       $update = $category->update($request->all() + ['slug' => Category::slugify($request->name), 'hide' => isset($request->hide) ? 1 : 0]);

        if($update){

            Session::flash('success', 'Category edited!!');
            return redirect()->route('category.index');

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
    public function delete(Category $category)
    {

        if(count($category->items) === 0) {

            if($category->banner != "") {

                File::delete($category->banner);
                
            }

            if($category->thumbnail != "") {

                File::delete($category->thumbnail);
                
            }

            $delete = $category->delete();

            if($delete){

                Session::flash('success', 'Category deleted!!');
                return redirect()->route('category.index');

            } else {

                Session::flash('error', 'Please try again.');
                return redirect()->back();

            }

        } 

        Session::flash('info', 'Cannot delete category. Products assigned.');
        return redirect()->back();
    }

    public function iconDelete(Category $category)
    {

        if($category->icon != "") {

            File::delete($category->icon);
            
        }

        $category->icon = '';
        $delete = $category->save();

        if($delete){

            Session::flash('success', 'Category icon removed!!');
            return redirect()->back();

        } else {

            Session::flash('error', 'Please try again.');
            return redirect()->back();

        }
        
    }

    public function categoriesList() {

        $categories = Category::where('hide', 0)->select('name', 'id', 'slug')->get();

        return response()->json([
            'status' => 'Success',
            'task' => 'Fetch Categories List',
            'categories' => $categories
        ], 200);

    }

    public function categories() {

        $categories = Category::where('hide', 0)->get();

        return response()->json([
            'status' => 'Success',
            'task' => 'Fetch Categories',
            'categories' => $categories
        ], 200);

    }

    public function categoryProfile($slug) {

        $category = Category::where('slug', $slug)->firstOrFail();

        $trips = Item::where('category_id', $category->id)->where('hide', 0)->get();

        $trips = (new ItemController())->formatTrips($trips);

        return response()->json([
            'status' => 'Success',
            'task' => 'Fetch Category',
            'category' => $category,
            'trips' => $trips
        ], 200);

    }

}
