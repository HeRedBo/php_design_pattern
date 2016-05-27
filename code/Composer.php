<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 21:15
 */

/**
 * 抽象结构角色    公司
 * Class Company
 */
abstract class Company
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 增加
     * @param Company $company
     * @return mixed
     */
    abstract function Add(Company $company);

    /**
     * 移除
     * @param Company $company
     * @return mixed
     */
    abstract function Remove(Company $company);

    /**
     * 显示公司及结构
     * @param $depth
     * @return mixed
     */
    abstract function Display($depth);
}

/**
 * 枝节点  子公司
 * Class SubCompany
 */
class SubCompany extends Company
{
    private $sub_companys = [];

    function __construct($name)
    {
        parent::__construct($name);
    }

    function Add(Company $company)
    {
        $this->sub_companys[] = $company;
    }

    function Remove(Company $company)
    {
        $key = array_search($company , $this->sub_companys);
        if($key !== false)
        {
            unset($this->sub_companys[$key]);
        }
    }

    function Display($depth)
    {
        $pre = "";

        for($i = 0 ; $i < $depth ; $i++)
        {
            $pre .= '-';
        }
        $pre .=  $this->name .'<br/>';
        echo $pre;

        foreach($this->sub_companys as $v)
        {
            $v->Display($depth +2);
        }
    }
}

class MoneyDept extends Company
{
    function __construct($name)
    {
        parent::__construct($name);
    }

    /**
     * 增加
     * @param Company $company 子公司 部门
     * @return mixed
     */
    function Add(Company $company)
    {
        echo "叶子节点 不能继续添加节点。。。。。。<br/>";
    }

    /**
     * 移除
     * @param Company $company 子公司 部门
     */
    function Remove(Company $company)
    {
        echo "叶子节点，不能删除节点。。。。。。。。。<br/>";
    }

    function Display($depth)
    {
        $pre = "";
        for($i = 0 ; $i < $depth; $i++)
        {
            $pre .= "-";
        }
        $pre .= $this->name."<br/>";
        echo $pre;
    }
}


class TechnologyDept extends  Company
{
    function __construct($name)
    {
        parent::__construct($name);
    }

    /**
     * 增加
     * @param Company $company 子公司 部门
     * @return mixed
     */
    function Add(Company $company)
    {
        echo "叶子节点 不能继续添加节点。。。。。。<br/>";
    }

    /**
     * 移除
     * @param Company $company 子公司 部门
     */
    function Remove(Company $company)
    {
        echo "叶子节点，不能删除节点。。。。。。。。。<br/>";
    }

    function Display($depth)
    {
        $pre = "";
        for($i = 0 ; $i < $depth; $i++)
        {
            $pre .= "-";
        }
        $pre .= $this->name."<br/>";
        echo $pre;
    }

}
