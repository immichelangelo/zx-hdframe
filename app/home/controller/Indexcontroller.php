<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/25
 * Time: 13:52
 */

namespace app\home\controller;


use houdunwang\core\Controller;
use houdunwang\view\View;

class Indexcontroller extends Controller
{
    public function index()
    {
        //echo 111;
        //调用不存在的方法运行__call 测试view
        //View::make();
        //return (new View())->make();
        //(new View())->with();
        //测试model
        c('database.name');
    }

    public function add()
    {
        $this->jump()->message('添加成功');
    }
}