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
        $this->tsignal = new Tsignal;
        $this->buynsell = new Buynsell;
     }

    public function getListAll($table)
    {
        return $table::All();
    }

    public function getFind($table, $id)
    {
        return $table::find($id);
    }

    public function sinfo_tsignal_store($req)
    {
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
        $this->tsignal->scode = $req_name;
        $this->tsignal->scode = $req_skind;
        $this->tsignal->history = 'first insert';
        
        $this->tsignal->tsignal_flag = $req_tsignal_flag;
        $this->tsignal->tsignal_color = $req_tsignal_color;
        $this->tsignal->tsignal_price = $req_tsignal_price;
        $this->tsignal->low_price = $req_low_price;
        $this->tsignal->tsignal_date = $req_tsignal_date;
        $this->tsignal->low_date = $req_low_date;
        $ret_tsignal = $this->tsignal->save();   
       
        return $ret_tsignal;
    }

    public function sinfo_tsignal_update($table, $req, $req_id)
    {
        $update_id = getFind($table, $req_id);
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
        $this->tsignal->scode = $req_name;
        $this->tsignal->scode = $req_skind;
        $this->tsignal->history = 'first insert';
        
        $this->tsignal->tsignal_flag = $req_tsignal_flag;
        $this->tsignal->tsignal_color = $req_tsignal_color;
        $this->tsignal->tsignal_price = $req_tsignal_price;
        $this->tsignal->low_price = $req_low_price;
        $this->tsignal->tsignal_date = $req_tsignal_date;
        $this->tsignal->low_date = $req_low_date;
        $ret_tsignal = $this->update_id->save();   
       
        return $ret_tsignal;
    }

    public function delete($table, $id)
    {
        //echo 'delete='.$id;
        //$task = Sinfo::find($id);
        //$ret = $task->delete();
        return $table::destroy($id);
    }
    
}
