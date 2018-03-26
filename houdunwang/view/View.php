<?php
namespace houdunwang\view;
class View{
    //实例化不存在的类自动执行
    public function __call($name, $arguments)
    {
        //echo 1;
        return self::runParse($name,$arguments);
    }
    //实例化静态类时自动执行
    public static function __callStatic($name, $arguments)
    {
        //echo 2;
       return self::runParse($name,$arguments);
    }
    //为了实例化base调用的方法
    public static function runParse($name,$arguments){
        //p($arguments);
        return call_user_func_array([new Base(),$name],$arguments);
    }
}