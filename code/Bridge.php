<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 20:06
 */

/**抽象化角色            抽象路
 * Class AbstractRoad
 */
abstract class AbstractRoad
{
    public $icar;
    abstract function Run();
}


/**
 * 高速公路
 * Class SpeedRoad
 */
class SpeedRoad extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在高速公路上。";
    }
}

class Street extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在乡村接到上";
    }
}


/**
 * 抽象汽车接口
 * Interface ICar
 */
interface ICar
{
    function Run();
}

/**
 * class Jeep
 */
class Jeep implements ICar
{
    function Run()
    {
        echo "其普车跑";
    }
}

/**
 * 小汽车
 * class car
 */

class Car implements ICar
{
    function Run()
    {
        echo "小汽车跑";
    }
}

