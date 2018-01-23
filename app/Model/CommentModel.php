<?php

namespace App\Model;

use App\Service\Util\Constant\Raetlyw;

class CommentModel extends BaseModel {

    static $table;
    /**
     *
     * @var \App\Model\CommentModel
     */
    static $model;

    public function __construct()
    {
        static::$table = Raetlyw::TABLE_COMMENTS;
    }

    // 单例
    public static function instance()
    {
        if(!self::$model){
            return new self();
        }

        return self::$model;
    }
}