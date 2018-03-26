<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/25
 * Time: 21:42
 */

namespace houdunwang\model;


class Model
{
    public function __call($name, $arguments)
    {
        return self::runParse($name,$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::runParse($name,$arguments);
    }

    public static function runParse($name,$arguments)
    {
        call_user_func_array([new Base(),$name],$arguments);
    }
}