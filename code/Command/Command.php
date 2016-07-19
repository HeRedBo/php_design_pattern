<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/4
 * Time: 18:29
 */

/**
 * 观察者模式
 * 电视是请求的接受者
 * 遥控器上有去多的按钮 不同的按钮对应电视机的不同的操作
 * 抽象命令觉得有一个命令接口来演 有三个具体的命令类实现了抽象命令接口
 * 这三个具体的命令类分别代表三种操作 打开电视、关闭电视和切换频道
 * 显然 电视机遥控器就是一个典型的命令模式的应用实例
 */

class Tv
{
    public $curr_channel = 0;

    /**
     * 打开电视
     */
    public function turnOn()
    {
        echo "The television is on.<br/>";
    }

    /**
     * 关闭电视
     */
    public function turnOff()
    {
        echo "The television is off.<br/>";
    }

    /**
     * 切换频道
     * @param $channel
     */
    public  function turnChannel($channel)
    {
        $this->curr_channel = $channel;
        echo "This TV Channel is" . $this->curr_channel."<br.>";
    }
}

/**
 * 执行命令接口
 * Interface ICommand
 */
interface ICommand
{
    function execute();
}

class CommandOn implements ICommand
{
    private $tv;

    public function __construct($tv)
    {
        $this->tv = $tv;
    }

    public function execute()
    {
        $this->tv->turnOn();
    }
}

/**
 * 关机命令
 * Class CommandOff
 */
class CommandOff implements ICommand
{
    private $tv;

    public function __construct($tv)
    {
        $this->tv = $tv;
    }

    public function execute()
    {
        $this->tv->turnOff();
    }
}

class CommandChannel implements ICommand
{
    private $tv;
    private $channel;

    public function __construct($tv, $channel)
    {
        $this->tv = $tv;
        $this->channel = $channel;
    }

    public function execute()
    {
        $this->tv->turnChannel($this->channel);
    }
}

/**
 * 遥控器
 * class Control
 */
class Control
{
    private $_onCommand;
    private $_offCommand;
    private $_changeChannel;

    public function __construct($on,$off,$channel)
    {
        $this->_onCommand       = $on;
        $this->_offCommand      = $off;
        $this->_changeChannel   = $channel;
    }

    public function turnOn()
    {
        $this->_onCommand ->execute();
    }

    public function turnOff()
    {
        $this->_offCommand->excute();
    }

    public function changeChannel()
    {
        $this->_changeChannel->excute();
    }
}

