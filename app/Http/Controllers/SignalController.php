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
        return view('signal.signal', [
            'tsignals' => $this->tsignal::All(),    
        ]);
    }

    public function slist()
    {
        
        return view('signal.slist', [
            'tsignals' => $this->tsignal::All(),    
        ]);
    }

    public function elist()
    {
        
        return view('signal.elist', [
            'tsignals' => $this->buynsell::All(),    
        ]);
    }

    public function tsignal()
    {
            return view('signal.tsignal_create');
    }

    public function buynsell()
    {
            return view('signal.buynsell_create');
    }

    
    public function test()
    {
            return view('test');
    }
    
}
