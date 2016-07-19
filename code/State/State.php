<?php
# ---------------------State 状态模式 --------------------# 

# 状态接口
interface IState 
{
    function WriteCode(Work $w);
}

/**
 * 上午工作状态
 * 
 */
class AmState implements IState 
{
    
    public function WriteCode(Word $w)
    {
        if($w->hour <= 12)
        {
            echo "当前时间：{$w->hour}点，上午工作；犯困，午休。<br/>";
        }
        else
        {
            $w->SetState(new PmState());
            $w->WriteCode();
        }
    }
}

// 下午工作状态
class PmState implements IState
{
    public function WriteCode(Word $w)
    {
        if($w->hour <= 17)
        {
            echo "当前时间：{$w->hour}点，下午工作状态还不错，继续努力。<br/>";
        }
        else
        {
            $w->SetState(new  NightState());
            $w->WriteCode();
        }
    }
}

// 晚上工作状态
class NightState implements IState
{
    public function WriteCode(Work $w)
    {
        if($w->isDone)
        {
            $w->SetState(new BreakState());
            $w->WriteCode();
        }
        else
        {
            if($w->hour <= 21)
            {
                echo "当前时间：{$w->hour}点，加班哦，有点疲惫啊！<br/>";
            }
            else
            {
                $w->SetState(new SleepState());
                $w->WriteCode();
            }
        }
    }
}

// 休息状态
class BreakState implements IState
{
    public function WriteCode(Work $w)
    {
        echo "当前时间：{$w->hour}点，下标回家了。<br/>";
    }
}

// 休息状态
class SleepState implements IState
{
    public function WriteCode(Work $w)
    {
        echo "当前时间：{$w->hour}点，不行了，睡觉了。<br/>";
    }
}


// 工作状态
class Work
{
    private $current;

    public function Work()
    {
        $this->current = new AmState();  
    }

    public $hour;

    public $isDone;

    public function SetState(IState $s)
    {
        $this->current = $s;
    }

    public function WriteCode()
    {
        $this->current->WriteCode($this);
    }

    
}