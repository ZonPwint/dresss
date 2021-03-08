<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Township;
class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $townships=Township::all();
       // dd($categories);
       return view('backend.township.list',compact('townships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.township.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator=$request->validate([
          'name'=>['required','min:3','max:100','unique:townships']
        ]);
       $township=new Township();
       $township->name=$request->name;
       $township->save();
       return redirect()->route('township.index')->with('successMsg','New Name is ADDED in your data.');
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
        $township=Township::find($id);
        //dd($id);
        return view('backend.township.edit',compact('township'));
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
        Township::where('id',$id)->update($data);
        return redirect()->route('township.index')->with('successMsg','Existing Township is UPDATED in your data.');
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
        $township=Township::find($id);
        $township->delete();
        return redirect()->route('township.index')->with('successMsg','Existing Category is DELETE in your data.');
    }
}
