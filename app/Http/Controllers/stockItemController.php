<?php

namespace App\Http\Controllers;



use Request;

use App\StockItem;
use App\BuySell;
use Carbon\Carbon;


class stockItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
        //return $search;
        
      
        
        
        
        
        $stockItems = StockItem::where('name','like','%'.$search.'%')
       //->orderBy('name')
        ->paginate(20);
        
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
    
    public function buy($id)
    {
        //return $id;
        $stockItem = StockItem::find($id);
        return view ('stockItem.buy')->with('stockItem', $stockItem);
        
    }
    
    public function bought(Request $request, $id)
    {
       //return Request::all();
       //return $id;
        $stockItem = StockItem::find($id);
        $stockItem->inHand = $stockItem->inHand + Request::get('quantity');
        $stockItem->update();
        
        //buysell tablosuna alimi yaziyoruz
        $buysell = new BuySell;
        $buysell->name =$stockItem->name;
        $buysell->quantity = Request::get('quantity');
        $buysell->price =  Request::get('unitPrice');
        $buysell->total = Request::get('quantity') * Request::get('unitPrice');    
        $buysell->bought_at = Carbon::today();   
        $buysell->save();
        
         \Session::flash('flash_message','successfully saved.');
            return redirect('buysell');
        
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
    
    public function critical()
    {
        //
         //return $id;
        //$stockItem = StockItem::where(StockItem::inHand < StockItem::low)->get();
        $stockItems = \DB::table('stockItems')
                ->where('inHand', '<', 'low')
                ->get();
       
        return view ('stockItem.critical')->with('stockItems', $stockItems);
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
