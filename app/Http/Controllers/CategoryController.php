<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*echo"This is categorycontroller";*/
        $categories=Category::all();
       // dd($categories);
       return view('backend.category.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.category.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('store');
        $validator=$request->validate([
          'name'=>['required','min:3','max:100','unique:categories']
        ]);
       $category=new Category();
       $category->name=$request->name;
       $category->save();
       return redirect()->route('category.index')->with('successMsg','New Genre is ADDED in your data.');
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
       //dd($id);
        $category=Category::find($id);
        //dd($id);
        return view('backend.category.edit',compact('category'));
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
       //dd($id);
        $name=$request->name;
        $data=[
            'name'=>$name
        ];
        Category::where('id',$id)->update($data);
        return redirect()->route('category.index')->with('successMsg','Existing Category is UPDATED in your data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // dd($id);
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('successMsg','Existing Category is DELETE in your data.');
    }
}
