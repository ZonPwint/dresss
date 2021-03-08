<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippings=Shipping::all();
        //dd( $shippings);
       return view('backend.shipping.list',compact('shippings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shipping.new');
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
         $shipping=Shipping::find($id);
        //dd($id);
        return view('backend.shipping.index',compact('shipping'));
    
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
        $shipping=Shipping::find($id);
        //dd($id);
        return view('backend.shipping.edit',compact('shipping'));
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
        $fee=$request->fee;
        $data=[
            'fee'=>$fee
        ];
        Shipping::where('id',$id)->update($data);
        return redirect()->route('shipping.index')->with('successMsg','Existing Category is UPDATED in your data.');
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
        $shipping=Shipping::find($id);
        $shipping->delete();
        return redirect()->route('shipping.index')->with('successMsg','Existing Category is DELETE in your data.');
    }
}
