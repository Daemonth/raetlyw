<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class BaseModel{

    public function insert($params){
        $result = DB::table($this->table)->insert($params);
        return $result;
    }

    protected function update($where,$params){
        $result = DB::table($this->table)->where($where)->update($params);
        return $result;
    }

    public function select($params){
        $result = DB::table($this->table)->where($params)->get();
        return $result;
    }

    protected function delete($params){
        $result = DB::table($this->table)->where($params)->delete();
        return $result;
    }
}





