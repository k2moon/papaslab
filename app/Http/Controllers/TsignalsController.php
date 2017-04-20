<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Sinfo;
use App\Tsignal;
use App\BuynSell;
use App\Repositories\SignalRepository;

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
     public function __construct(SignalRepository $signal)
     {
         //$this->middleware('auth');
        $this->sinfo = new Sinfo;
        $this->tsignal = new Tsignal;
        $this->buynsell = new Buynsell;
        $this->signal = $signal;
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
    public function store(Request $request)
    {
        $this->validate($request, \App\Sinfo::$rules);
        $this->signal->sinfo_tsignal_store($request);
        return redirect('/signal#tsignal_create');
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
