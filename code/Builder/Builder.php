<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 16:16
 */
/**
 * 建造者设计模式
 *  建造者模式一般认为有四个角色：
 *  1.产品角色，产品角色定义自身的组成属性
 *  2.抽象建造者，抽象建造者定义了产品的创建过程以及如何返回一个产品
 *  3.具体建造者，具体建造者实现了抽象建造者创建产品过程的方法，给产品的具体属性进行赋值定义
 *  4.指挥者，指挥者负责与调用客户端交互，决定创建什么样的产品
 */

/**
 * 具体产品角色 鸟类
 * Class Bird
 */
class Bird
{
    public $_head;
    public $_wing;
    public $_foot;

    function show()
    {
        echo "头的颜色:{$this->_head}<br/>";
        echo "翅膀的颜色：{$this->_wing}<br/>";
        echo "腿部的颜色：{$this->_foot}<br/>";
    }
}

/**
 * 抽象鸟的构造者(生成器)
 * Class BirdBuilder
 */
abstract class BirdBuilder
{
    protected $_bird;

    function __construct()
    {
        $this->_bird = new Bird();
    }

    abstract function BuildHead();
    abstract function BuildWing();
    abstract function BuildFood();
    abstract function GetBird();
}

class BlueBird extends BirdBuilder
{

    /**
     *
     */
    function BuildHead()
    {
        $this->_bird->head = "Blue";
    }

    function BuildWing()
    {
        $this->_bird -> _wing = "Blue";
    }

    function BuildFood()
    {
        $this->_bird ->_foot = "BLue";
    }

    function GetBird()
    {
        return $this->_bird;
    }
}

class RoseBird extends BirdBuilder
{
    function BuildHead()
    {
        $this->_bird -> _head ="Red";
    }

    function BuildWing()
    {
        $this->_bird->_wing = "Black";
    }

    function BuildFood()
    {
        $this->_bird-> _foot = "Green";
    }

    function GetBird()
    {
        return $this->_bird;
    }
}

/**
 * 指挥者
 * class Director
 */
class Director
{
    /**
     * @param $_builder 建造者
     * @return mixed    产品类：鸟
     */
    function Construct($_builder)
    {
        $_builder->BuildHead();
        $_builder->BuildWing();
        $_builder->BuildFood();
        return $_builder->GetBird();
    }
}

