<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Tsignal;
use App\BuynSell;

class BuynSellsController extends Controller
{
    
    protected $buynsells;
    protected $buynsell;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
     public function __construct()
     {
         //$this->middleware('auth');
        $this->tsignal = new Tsignal;
        $this->buynsell = new Buynsell;
     }
    
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
    public function store(Request $req)
    {
        //
        // buynsell insert
        $req_tsignal_id = $req->tsignal_id;
        $req_scode = $req->scode;
        $req_sname = $req->sname;
        $req_buy_price = str_replace(",","",$req->buy_price);
        $req_base_price = str_replace(",","",$req->base_price);
        $req_sell_price = str_replace(",","",$req->sell_price);
        $req_buy_date = $req->buy_date;
        $req_sell_date = $req->sell_date;

        $this->buynsell->tsignal_id = $req_tsignal_id;
        $this->buynsell->scode = $req_scode;
        $this->buynsell->sname = $req_sname;
        $this->buynsell->buy_price = $req_buy_price;
        $this->buynsell->base_price = $req_base_price;
        $this->buynsell->sell_price = $req_sell_price;
        $this->buynsell->buy_date = $req_buy_date;
        $this->buynsell->sell_date = $req_sell_date;

        $ret_buynsell = $this->buynsell->save();   
       
        return redirect('/slist');
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
        return view('signal.buynsell_create', [
            'tsignals_show' => $this->tsignal::find($id),    
        ]);
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
