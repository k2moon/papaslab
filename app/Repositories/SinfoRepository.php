<?php

namespace App\Repositories;

use App\Sinfo;

/**
* Get all of the tasks for a given user.
*
* @param  Sinfo  
* @return Collection
*/
class SinfoRepository
{
    public function getListAll()
    {
        return Sinfo::All();
    }

    public function getFind($id)
    {
        return Sinfo::find($id);
    }

    public function delete($id)
    {
        //echo 'delete='.$id;
        //$task = Sinfo::find($id);
        //$ret = $task->delete();
        return Sinfo::destroy($id);
    }
    
}
