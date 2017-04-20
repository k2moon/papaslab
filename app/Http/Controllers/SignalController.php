<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Sinfo;
use App\Tsignal;
use App\BuynSell;
use App\Repositories\SignalRepository;

class SignalController extends Controller
{
     /**
     * The sinfo repository instance.
     *
     * @var SinfoRepository
     */
    protected $sifo;
    protected $tsignal;
    protected $buynsell;
    protected $signal;

    /**
     * Create a new controller instance.
     *
     * @param  SignalRepository  $tasks
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
        return view('signal.index', [
            'sinfos' => $this->signal->getListAll($this->sinfo),    
            'tsignals' => $this->signal->getListAll($this->tsignal),    
        ]);
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
    
}
