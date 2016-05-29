<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/27
 * Time: 20:34
 */

/**
 * 顶层接口
 * Interface IGiveGift
 */
interface IGiveGift
{
    function giveRose();
    function giveChocolate();
}

class Follower implements IGiveGift
{
    private $girlName;

    function __construct($name = "Girl")
    {
        $this->girlName = $name;
    }

    function giveRose()
    {
        echo "{$this->girlName}:这是我送给你的玫瑰花。<br/>";
    }

    function giveChocolate()
    {
       echo "{$this->girlName}:这个是我送给你的巧克力。<br/>";
    }
}

/**
 * 代理
 * Class Proxy
 */
class Proxy implements IGiveGift
{

    private $follower;

    function __construct($name)
    {
        $this->follower =  new Follower($name);
    }

    function giveRose()
    {
        $this->follower->giveRose();
    }

    function giveChocolate()
    {
        $this->follower->giveChocolate();
    }
}