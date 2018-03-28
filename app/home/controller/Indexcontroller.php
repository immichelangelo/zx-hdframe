<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/25
 * Time: 13:52
 */

namespace app\home\controller;

use houdunwang\core\Controller;
use houdunwang\model\Model;
use houdunwang\view\View;


use system\model\Grade;
use system\model\Student;

class Indexcontroller extends Controller
{
    public function index()
    {
        return View::make();
    }
}