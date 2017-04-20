<?php

namespace App\Repositories;

use App\Sinfo;
use App\Tsignal;
use App\BuynSell;

/**
* Get all of the tasks for a given user.
*
* @param  Singnal
* @return Collection
*/
class SignalRepository
{
    /**
     * The sinfo repository instance.
     *
     * @var SinfoRepository
     */
    protected $sifo;
    protected $tsignal;
    protected $buynsell;

    /**
     * Create a new controller instance.
     *
     * @param  SignalRepository  $tasks
     * @return void
     */
     public function __construct()
     {
        //$this->middleware('auth');
        $this->sinfo = new Sinfo;
        $this->tsignal = new Tsignal;
        $this->buynsell = new Buynsell;
     }

    public function getListAll($table)
    {
        return $table::All();
    }

    public function getFind($id)
    {
        return $table::find($table, $id);
    }

    public function sinfo_tsignal_store($req)
    {
        // sinfo insert
        $req_scode = $req->scode;
        $req_sname = $req->sname;
        $req_skind = $req->skind;

        $this->sinfo->scode = $req_scode;
        $this->sinfo->sname = $req_sname;
        $this->sinfo->skind = $req_skind;
        $this->sinfo->history = '';
        $ret_sinfo = $this->sinfo->save();
       
        // tsignal insert
        $req_tsignal_flag = $req->tsignal_flag;
        $req_tsignal_color = $req->tsignal_color;
        $req_tsignal_price = str_replace(",","",$req->tsignal_price);
        $req_low_price = str_replace(",","",$req->low_price);
        $req_tsignal_date = $req->tsignal_date;
        $req_low_date = $req->low_date;

        $this->tsignal->scode = $req_scode;
        $this->tsignal->tsignal_flag = $req_tsignal_flag;
        $this->tsignal->tsignal_color = $req_tsignal_color;
        $this->tsignal->tsignal_price = $req_tsignal_price;
        $this->tsignal->low_price = $req_low_price;
        $this->tsignal->tsignal_date = $req_tsignal_date;
        $this->tsignal->low_date = $req_low_date;
        $ret_tsignal = $this->tsignal->save();   
       
        return $ret_sinfo+$ret_tsignal;
    }

    public function delete($table, $id)
    {
        //echo 'delete='.$id;
        //$task = Sinfo::find($id);
        //$ret = $task->delete();
        return $table::destroy($id);
    }
    
}
