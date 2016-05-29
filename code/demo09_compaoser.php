<?php
header("Content-type:text/html;charset=utf-8");
require_once './Composer/Composer.php';
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 22:34
 */
$root=new SubCompany("北京总公司");
$root->Add(new MoneyDept("总公司财务部"));
$root->Add(new TechnologyDept("总公司技术部"));

$shanghai=new SubCompany("上海分公司");
$shanghai->Add(new TechnologyDept("上海分公司技术部"));
$shanghai->Add(new MoneyDept("上海分公司财务部"));

$root->Add($shanghai);

$root->Display(1);

echo "<hr/>";

$root->Remove($shanghai);
$root->Display(3);