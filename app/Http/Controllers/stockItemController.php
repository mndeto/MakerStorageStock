<?php

namespace App\Http\Controllers;



use Request;

use App\StockItem;

class stockItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $stockItems = StockItem::all();
        
        //return $stockItems;
        
       
        
        return view ('stockItem.index')
            ->with('stockItems', $stockItems);
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
         return view ('stockItem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // $input = Request::all();
       //    return $input;
       
      
            // store
            $stockItem = new StockItem;
            $stockItem->sku = Request::get('sku');
            $stockItem->name = Request::get('name');
            $stockItem->description = Request::get('description');
            $stockItem->orderInfo = Request::get('orderInfo');
            $stockItem->inHand = Request::get('inHand');
            $stockItem->save();

            // redirect
        
             \Session::flash('flash_message','successfully saved.');
            return redirect('stockItems');
        
       
       
       
       
       
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
    public function destroy($id)
    {
        //
    }
}
