<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 13:14
 */

/**
 * 懒汉单例模式
 * Class Singleton
 */
class Singleton
{
    // 创建静态对象变量
    private static $instance = NULL;

    public $age;

    // 构造函数私有化 防止外部调用
    private function __construct()
    {
    }

    // 私有克隆变量方法 供外部调用
    public static function getInstance()
    {
        if(empty(self::$instance))
        {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

}