<?php
//命名空间和目录一致
namespace houdunwang\core;


/**
 * Class Boot  框架启动类
 * @package houdunwang\core
 */
class Boot
{
    /**
     * 执行应用方法
     */
    public static function run(){
        self::handler();
        self::init();
        self::apprun();
    }
    /**
     * 提示错误信息方法
     */
    private static function handler(){
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }

    /**
     * 执行应用app
     */
    private static function apprun(){
        //(new \app\home\controller\Indexcontroller())->index();
        //?s=home/index/index
        //判断是否存在get参数s
        if(isset($_GET['s'])){
            $s = $_GET['s'];
            $info = explode('/',$s);
            $a = $info[0];
            $b = $info[1];
            $c = $info[2];
        }else{
            $a = 'home';
            $b = 'index';
            $c = 'index';
        }
        define('MOUDLE',$a);
        define('CONTROLLER',strtolower($b));
        define('ACTION',$c);
        $action = '\app\\'.$a.'\controller\\'.ucfirst($b).'controller';
        //(new $action())->$c();
        echo call_user_func_array([new $action,$c],[]);
    }

    /**
     * 头部声明  设置时区  开启session等
     */
    public static function init(){
        //设置头部
        header('content-type:text/html;charset=utf8');
        //设置时区
        date_default_timezone_set('PRC');
        //开启session
        session_id()||session_start();
    }
}