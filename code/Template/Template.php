<?php

// 抽象模板类
abstract class MakePhone
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function MakeFlow()
    {
        $this->MakeBattery();
        $this->MakeCamera();
        $this->MakeScreen();

        echo "手机生产完毕！<hr/>";
    }

    public abstract function MakeBattery();
    public abstract function MakeCamera();
    public abstract function MakeScreen();    
}


// 小米手机
class XiaoMi extends MakePhone
{
    public function __construct($name='小米')
    {
        parent::__construct($name);
    }

    public function MakeBattery()
    {
        echo "小米手机电池生产完毕！<br/>";
    }

    public function MakeCamera()
    {
        echo "小米相机生产完毕！<br/>";
    }

    public function MakeScreen()
    {
        echo "小米屏幕生产完毕！<br/>";
    }

}

// 魅族手机
class MeiZu extends MakePhone
{
    public function __construct($name='魅族')
    {
        parent::__construct($name);
    }

    public function MakeBattery()
    {
        echo "魅族手机电池生产完毕！<br/>";
    }

    public function MakeCamera()
    {
        echo "魅族相机生产完毕！<br/>";
    }

    public function MakeScreen()
    {
        echo "魅族屏幕生产完毕！<br/>";
    }

}