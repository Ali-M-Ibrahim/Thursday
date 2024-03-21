<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('listCategory')->with('all',$categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obj = new Category();
        $obj->name = $request->thename;
        $obj->save();
        return redirect()->route('category.index');
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $obj = Category::find($id);
        return view('editCategory')->with('category',$obj);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obj =  Category::find($id);
        $obj->name = $request->thename;
        $obj->save();
return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obj =  Category::find($id);
        $obj->delete();
        return redirect()->route('category.index');
    }
}
