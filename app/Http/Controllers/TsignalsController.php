<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Tsignal;
use App\BuynSell;

class TsignalsController extends Controller
{
    /**
     * The sinfo repository instance.
     *
     * @var SinfoRepository
     */
    protected $tsignals;
    protected $tsignal;

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
        //return view('sinfos.index', [
        //    'sinfos' => $this->sinfos->getListAll($this->sinfo),    
        //]);
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
        $this->validate($req, \App\Sinfo::$rules);
        // tsignal insert
        $req_scode = $req->scode;
        $req_sname = $req->sname;
        $req_skind = $req->skind;

        $req_tsignal_flag = $req->tsignal_flag;
        $req_tsignal_color = $req->tsignal_color;
        $req_tsignal_price = str_replace(",","",$req->tsignal_price);
        $req_low_price = str_replace(",","",$req->low_price);
        $req_tsignal_date = $req->tsignal_date;
        $req_low_date = $req->low_date;

        $this->tsignal->scode = $req_scode;
        $this->tsignal->sname = $req_sname;
        $this->tsignal->skind = $req_skind;
        $this->tsignal->history = 'first insert-'.date("Y-m-d A h:i:s");
        
        $this->tsignal->tsignal_flag = $req_tsignal_flag;
        $this->tsignal->tsignal_color = $req_tsignal_color;
        $this->tsignal->tsignal_price = $req_tsignal_price;
        $this->tsignal->low_price = $req_low_price;
        $this->tsignal->tsignal_date = $req_tsignal_date;
        $this->tsignal->low_date = $req_low_date;
        $ret_tsignal = $this->tsignal->save();   
       
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
        return $this->tsignal::find($id);
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
        //return "call edit";
        
        return view('signal.tsignal_edit', [
            'tsignals_find' => $this->tsignal->find($id),    
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        //
        //$this->validate($request, \App\Sinfo::$rules);
        $this->tsignal = $this->tsignal::find($id);
        // tsignal insert
        $req_scode = $req->scode;
        $req_sname = $req->sname;
        $req_skind = $req->skind;

        $req_tsignal_flag = $req->tsignal_flag;
        $req_tsignal_color = $req->tsignal_color;
        $req_tsignal_price = str_replace(",","",$req->tsignal_price);
        $req_low_price = str_replace(",","",$req->low_price);
        $req_tsignal_date = $req->tsignal_date;
        $req_low_date = $req->low_date;

        $this->tsignal->scode = $req_scode;
        $this->tsignal->sname = $req_sname;
        $this->tsignal->skind = $req_skind;
        $this->tsignal->history = 'update-'.date("Y-m-d A h:i:s");
        
        $this->tsignal->tsignal_flag = $req_tsignal_flag;
        $this->tsignal->tsignal_color = $req_tsignal_color;
        $this->tsignal->tsignal_price = $req_tsignal_price;
        $this->tsignal->low_price = $req_low_price;
        $this->tsignal->tsignal_date = $req_tsignal_date;
        $this->tsignal->low_date = $req_low_date;
        $ret_tsignal = $this->tsignal->save();   
       
        return redirect('/slist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $this->tsignal::destroy($id);

        return redirect('/slist');
    }
}
