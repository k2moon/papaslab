<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Sinfo;
use App\Repositories\SinfoRepository;
use App\Repositories\SignalRepository;

class SinfosController extends Controller
{
    /**
     * The sinfo repository instance.
     *
     * @var SinfoRepository
     */
    protected $sinfos;
    protected $sinfo;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
     public function __construct(SignalRepository $sinfos)
     {
         //$this->middleware('auth');
        $this->sinfo = new Sinfo;
        $this->sinfos = $sinfos;
     }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sinfos.index', [
            'sinfos' => $this->sinfos->getListAll($this->sinfo),    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('sinfos.create');
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
        //if ($validator->fails()) {
        //   return view('signal#sinfo_create')->withErrors($validator)->withInput();
        //}
        $this->sinfo->scode = $request->scode;
        $this->sinfo->sname = $request->sname;
        $this->sinfo->skind = $request->skind;
        $this->sinfo->history = $request->history;
        $this->sinfo->save();

        return redirect('/sinfos#sinfo_create');
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
        $update = $this->sinfos->getFind($id);
        $this->sinfo->scode = $request->scode;
        $this->sinfo->sname = $request->sname;
        $this->sinfo->skind = $request->skind;
        $ret = $update->save();
        return redirect('/sinfos#sinfo_create');
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
        //$this->authorize('destroy', $sinfo);
        $this->sinfos->delete($id);
        
        return redirect('/sinfos');
    }
}
