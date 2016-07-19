<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/10
 * Time: 0:34
 */

//备忘者模式
class  CameRole
{
    # region 游戏角色状态属性 (生命力、攻击力、防御力)
    public $livelLevel;

    public $attackLevel;

    public $defenseLevel;

    # endregion

    // 保存状态
    public function SaveState()
    {
        return (new RoleStateMemento($this->livelLevel , $this->attackLevel , $this->defenseLevel));
    }

    // 恢复状态
    public function RecoverryState(RoleStateMemento $_memento)
    {
        $this->livelLevel  = $_memento->liveLevel;
        $this->attackLevel = $_memento->attackLevel;
        $this->defenseLevel= $_memento->defenseLevel;
    }

    // 其他属性及操作
    // 获取初始状态
    public function GetInitState()
    {
        $this->livelLevel   = 100;
        $this->attackLevel  = 100;
        $this->defenseLevel = 100;
    }

    // 状态显示
    public function StateDisplay()
    {
        echo "角色状态：<br/>";
        echo "生命力：{$this->livelLevel}<br/>";
        echo "攻击力：{$this->attackLevel}<br/>";
        echo "防御力：{$this->defenseLevel}<br/>";
    }

    // 被攻击
    public function BeenAttack()
    {
        $this->liveLevel -= 9.5;;
        if($this->liveLevel <= 0)
        {
            $this->liveLevel = 0;
            echo "呃，该角色已经阵亡了!<br/>";
            echo "Game Over!<br/>";
            return ;
        }

        $this->attackLevel -= 1.1;
        if($this->attackLevel <= 0)
        {
            $this->attackLevel = 0;
        }

        $this->defenseLevel -= 0.5;
        if($this->defenseLevel <= 0)
        {
            $this->defenseLevel = 0;
        }
    }

}

// 角色转态存储箱类
class RoleStateMemento
{
    public $liveLevel;
    public $attackLevel;
    public $defenseLevel;

    public function RoleStateMemento($_ll , $_al ,$_dl)
    {
        $this->liveLevel  = $_ll;
        $this->attackLevel = $_al;
        $this->defenseLevel = $_dl;
    }
}

// 游戏角色状态管理者类

class RoleStateManager
{
    public $memento;
}
