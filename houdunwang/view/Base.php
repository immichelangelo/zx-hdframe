<?php

namespace houdunwang\view;

use houdunwang\core\Controller;

/**基础函数  （实现功能）
 * Class Base
 * @package houdunwang\view
 */
class Base
{
    private $file=null;//模板文件
    private $data = [];//存储数据
    /**
     * @param string $tpl 加载模板
     */
    public function make($tpl = '')
    {
        //echo 1;
        $tpl = $tpl ?: ACTION;
        $this->file = '../app/' . MOUDLE . '/' . 'view' . '/' . CONTROLLER . '/' . $tpl . '.php';
        // p($this->file);
        //include $this->file;
        return $this;
    }

    /**
     * 分配变量
     * @param array $var
     * @return $this
     */
    public function with($var = []){
        //echo 'with';
        //p($var);
        $this->data = $var;
        return $this;
    }
    public function __toString()
    {
        extract ($this->data);
        if(!is_null($this->file)){
            include $this->file;
        }
        return '';
    }

}