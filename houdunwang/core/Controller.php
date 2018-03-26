<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/25
 * Time: 16:24
 */

namespace houdunwang\core;


class Controller
{
    /**
     * @param $msg 添加消息提示
     */
    private $url;

    public function message($msg)
    {
        include './view/message.php';
    }

    /**
     * @param string $url 指定跳转页面
     * @return $this 返回类
     */
    public function jump($url = '')
    {
        if ($url) {
            $this->url = $url;
        } else {
            $this->url = 'javascript:history.back()';
        }
        return $this;
    }
}