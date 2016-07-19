<span style="color:#000000" >
<?php
/*男人这本书的内容要比封面吸引人；女人这本书的封面通常比内容更吸引人
男人成功时，背后多半有一个伟大的女人；女人成功时，背后多半有一个失败的男人
男人失败时，闷头喝酒，谁也不用劝；女人失败时，眼泪汪汪，谁也劝不了
男人恋爱时，凡事不懂也要装懂；女人恋爱时，遇事懂也要装作不懂*/

abstract class State
{
    protected $state_name;

    // 得到男人反应
    public abstract function GetManAction(VMan $selectM);

    // 得到男人的反应
    public abstract function GetWomanAction(VWoman $selectW);
}

// 抽象人
abstract class Person
{
    public $type_name;

    public abstract function Accept(State $visitor);
}

// 成功状态
class Success extends State
{
    public function __construct()
    {
        $this->state_name = "成功";
    }

    public function GetManAction(VMan $selementM)
    {
        echo "{$selectM->type_name}:{$this->state_name}时；背后多半有一个伟大的女人。<br/>";
    }

    public function GetWomanAction(VWoman $selemenrtW)
    {
         echo "{$selemenrtW->type_name}:{$this->state_name}时；背后太多有一个不成功的男人。<br/>";
    }
}

// 失败状态
class Failure extends State
{
    public function __construct()
    {
        $this->state_name = "失败";
    }


     public function GetManAction(VMan $selementM)
    {
        echo "{$selectM->type_name}:{$this->state_name}时；闷头喝酒，谁也不用劝。<br/>";
    }

    public function GetWomanAction(VWoman $selemenrtW)
    {
         echo "{$selemenrtW->type_name}:{$this->state_name}时；两眼泪汪汪，谁也劝不了。<br/>";
    }
}

class Amativeness extends State
{
    public function __construct()
    {
        $this->state_name = "热恋中";
    }


     public function GetManAction(VMan $selementM)
    {
        echo "{$selectM->type_name}:{$this->state_name}时；凡事不懂也要装懂。<br/>";
    }

    public function GetWomanAction(VWoman $selemenrtW)
    {
        echo "{$selemenrtW->type_name}:{$this->state_name}时，遇事不懂也要装作不懂。<br/>";
    }
}

// 男人
class VMan extends Person
{
    function __construct()
    {
        $this->type_name = "男人";
    }

    public function Accept(State $visitor)
    {
        $visitor->GetManAction($this);
    }
}

// 女人
class VWoman extends Person
{
    public function __construct()
    {
        $this->type_name = "女人";
    }

    public function Accept(State $visitor)
    {
        $visitor->GetWomanAction($this);
    }
}

// 对象结构
class ObjectStruct
{
    private $elements = [];

    // 增加
    public function Add(Person $element)
    {
        array_push($this->elements,$element);
    }

    // 移除
    public function Remove(Person $element)
    {
        foreach ($this->elements as $k => $v)
        {
            if($v == $element)
            {
                unset($this->elements[$k]);
            }
        }
    }

    // 查看显示
    public function Display(State $visitor)
    {
        foreach ($this->elements as $k => $v)
        {
            $v->Accept($visitor);
        }
    }
}



?>
</span>
