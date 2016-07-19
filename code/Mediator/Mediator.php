<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/5
 * Time: 20:11
 */

// 中介者接口：可以是公共的方法 如Change方法 也可以是小范围的交互方法
// 同事类定义：比如，每个具体同事类都应该自动直达中介者对象也就是每个同事对象都会持有中介者对象的引用，这个功能可定义在这个类中。

//抽象国家
abstract class Country
{
    protected $mediator;
    public function __construct(unitedNations $_mediator)
    {
        $this->mediator = $_mediator;
    }
}

// 具体国家类
// 美国
class USA extends Country
{
    function __construct(unitedNations $_mediator)
    {
        parent::__construct($_mediator);
    }

    // 声明
    public function Declared($message)
    {
        $this->mediator->Declared($message, $this);
    }

    // 获取消息
    public function GetMessage($message)
    {
        echo "美国获得对方消息：{$message}<br/>";
    }
}

// 中国

class China extends Country
{
    public function __construct(unitedNations $_mediator)
    {
        parent::__construct($_mediator);
    }

    // 声明
    public function Declared($message)
    {
        $this->mediator->Declared($message, $this);
    }

    // 获取消息
    public function GetMessage($message)
    {
        echo "中国获得对方消息：{$message}<br/>";
    }
}

// 抽象中介者
// 抽象联合国机构
abstract class unitedNations
{
    // 声明
    public abstract function Declared($message,Country $colleague);
}

// 联合国机构
class UnitedCommit extends unitedNations
{
    public $countryUsa;
    public $countryChina;

    // 声明
    public function Declared($message, Country $colleague)
    {
        if($colleague == $this->countryChina)
        {
            $this->countryChina->GetMessage($message);
        }
        else
        {
            $this->countryUsa->GetMessage($message);
        }



    }
}

