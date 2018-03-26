<?php
/**
 * 创建打印函数
 * @param $var 打印的值
 */
function p($var)
{
    echo "<pre style='width: 100%;background: grey;border-radius: 5px;padding: 5px'>";
    if (is_bool($var) || is_null($var)) {
        var_dump($var);
    } else {
        print_r($var);
    }
    echo "</pre>";
}

/**
 * 定义常量：IS_POST
 * 检测是否为post请求
 */
define('IS_POST', $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false);
/** 添加c函数
 * @param null $var
 * @return array|mixed|null
 */
function c($var = null)
{
    if (is_null($var)) {
        $files = glob('../system/config/*');
//        p($files);
        $data = [];
        foreach($files as $file){
//            p($file);
            $content = include $file;
//            p($content);
            $filename = basename($file);
//            p($filename);
            $position = strpos($filename,'.');
//            p($position);
            $index = substr($filename,0,$position);
//            p($index);
            $data[$index] =$content;
//            p($data);
        }
        return $data;
    }
    $info = explode('.',$var);
//    p($info);
    if(count($info)==1){
        $file = '../system/config/'.$var.'.php';
       return is_file($file)?include $file:null;
//        p(include $file);
    }
    if(count($info)==2){
        $file = '../system/config/'.$info[0].'.php';
        if(is_file($file)){
            $data = include $file;
            return isset($data[$info[1]])?$data[$info[1]]:null;
        }else{
            return null;
        }
//        p($data[$info[1]]);
    }
}
