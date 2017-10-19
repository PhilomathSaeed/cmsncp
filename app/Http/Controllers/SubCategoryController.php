<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Categorie;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }

    public function index(){
        $subcategories = Subcategory::all();
        return view('admin.subcategories.index', compact('subcategories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.subcategories.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'sub_cat_name'=>'Required',
            'cat_id'=>'Required'
        ]);*/

        $catquery = $request->all();
        Subcategory::create($catquery);
        return redirect('/administrator/subcategories');
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        $categories = Categorie::all();
        return view('admin.subcategories.edit',compact('subcategory', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'sub_cat_name'=>'Required',
            'cat_id'=>'Required'
        ]);


        $category = Subcategory::find($id);

        $slug = strtolower(implode('-', explode(' ', $request->sub_cat_name)));
        $categoryUpdate = array(
            'sub_cat_name'=>$request->sub_cat_name,
            'cat_id'=>$request->cat_id
        );

        //dd($CategoryUpdate);
        $category->update($categoryUpdate);
        return redirect('/administrator/subcategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryItem = Subcategory::find($id);
        $categoryItem->delete();
        return redirect('/administrator/subcategories');
    }
}