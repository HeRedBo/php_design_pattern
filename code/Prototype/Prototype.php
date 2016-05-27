<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 19:07
 */
/**
 * 原型模式
 */

/**
 * 抽象原型类
 * Class Prototype
 */
abstract class Prototype
{
    abstract function cloned();
}

class Plane extends Prototype
{
    public $color;

    function Fly()
    {
        echo "飞啊飞啊飞!<br/>";
    }

    function cloned()
    {
        return clone $this;
    }
}
