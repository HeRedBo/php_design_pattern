<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 19:24
 */
/**
 * 适配器模式
 */

// ------------------- 抽象接口 ------------

/**
 * 抽象运动员接口
 * Interface IPlayer
 */
interface IPlayer
{
    function Attack();
    function Defense();
}

/**
 * 前锋
 * Class Forward
 */
class Forward implements IPlayer
{
    function Attack()
    {
        // TODO: Implement Attack() method.
        echo "前锋攻击！<br/>";
    }

    function Defense()
    {
        // TODO: Implement Defense() method.
        echo "前锋防御！";
    }
}

class Center implements IPlayer
{
    function Attack()
    {
        echo "中锋攻击<br/>";
    }

    function Defense()
    {
        echo "中锋防御！<br/>";
    }
}


// --------------- 待适配对象 ---------------
/**
 * 姚明
 *
 */
class YaoMing
{
    function 进攻()
    {
        echo "姚明进攻<br/>";
    }

    function 防御()
    {
        echo "姚明防御<br/>";
    }
}


// ------------ 适配器 -----------
class Adater implements IPlayer
{
    private $_player;

    function __construct()
    {
        $this->_player = new YaoMing();
    }

    function Attack()
    {
        echo $this->_player->进攻();
    }

    function Defense()
    {
        $this->_player->防御();
    }
}

