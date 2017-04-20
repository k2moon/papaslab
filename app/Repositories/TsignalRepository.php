<?php

namespace App\Repositories;

use App\Tsignal;

/**
* Get all of the tasks for a given user.
*
* @param  Tsignal  
* @return Collection
*/
class TsignalRepository
{
    public function getListAll()
    {
        return Tsignal::All();
    }

    public function getFind($id)
    {
        return Tsignal::find($id);
    }

    public function delete($id)
    {
        //echo 'delete='.$id;
        //$task = Sinfo::find($id);
        //$ret = $task->delete();
        return Tsignal::destroy($id);
    }
    
}
