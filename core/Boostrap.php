<?php
namespace core;
class Boostrap{
    public static function run(){
        self::parseUrl();
    }
    //分析URL 生成控制器
    public static function parseUrl()
    {

        if(isset($_GET['s']))
        {
            //如果有，则分析Url,生成控制器方法
           // dd($_SERVER);
            $info = explode('/',$_GET['s'] );
            $class = "\web\controller\\".ucfirst($info[0]);
            $action = $info[1];
        }
        else
        {
            $class = "\web\controller\Index";
            $action = "show";
        }
       echo  (new $class)->$action();
    }
}