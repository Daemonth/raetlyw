<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class BaseModel
{
    static $table;// 后期静态绑定

    public function insert($params)
    {
        $result = DB::table(static::$table)->insert($params);
        return $result;
    }

    public function update($where, $params)
    {
        $result = DB::table(static::$table)->where($where)->update($params);
        return $result;
    }

    public function select($params = null, $orderBy = null,$leftJoin = null)
    {
        $tableObject = $this->getTableObject($params,$leftJoin);
        if (empty($orderBy)) {
            $result = $tableObject->get();
        } else {
            $result = $tableObject->orderby($orderBy)->get();
        }
        return $result;
    }

    public function delete($params)
    {
        $result = DB::table(static::$table)->where($params)->delete();
        return $result;
    }

    private function getTableObject($params = null,$leftJoin = null)
    {
        if (empty($params)){
            $tableObject = DB::table(static::$table);
        }else{
            $tableObject = DB::table(static::$table)->where($params);
        }

        if (!empty($leftJoin)){
            $tableObject = $tableObject->leftJoin($leftJoin);
        }

        return $tableObject;
    }
}





