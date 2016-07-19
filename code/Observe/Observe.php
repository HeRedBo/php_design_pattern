<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/2
 * Time: 22:54
 */

// 抽象通知者
abstract class Subject
{
    private $observers = [];

    /**
     * 对象赋值
     * @param Observer $observer
     */
    public function Attach(Observer $observer)
    {
        array_push($this->observers,$observer);
    }

    /**
     * 删除对象
     * @param Observer $observer
     */
    public function Detach(Observer $observer)
    {
        foreach($this->observers as $k => $v)
        {
            if($v == $observer)
            {
                unset($this->observers[$k]);
            }

        }
    }

    function Notify()
    {
        foreach($this->observers as $v)
        {
            $v->Update();
        }
    }
}

// 具体通知者
class ConcreteSubject extends Subject
{
    public $subject_state;
}

// 抽象观察者
abstract class Observer
{
    public abstract function Update();
}


// 具体观察者
class ConcreteObserver extends Observer
{
    private $name;
    private $observerState;
    public $subject;

    function __construct(ConcreteSubject $_sub, $_name)
    {
        $this->subject = $_sub;
        $this->name = $_name;
    }

    public function Update()
    {
        $this->observerState = $this->subject->subject_state;
    }
}