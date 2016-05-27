<?php
header("Content-type:text/html;charset=utf-8");
require_once './Prototype/Prototype.php';

//-------------------- 原型模型测试代码 ----------------
$plane1 = new Plane();

$plane1->color = "Red";

$plane2 = $plane1->cloned();
$plane1->Fly();
$plane2->Fly();

echo "plane1的颜色为{$plane1->color}<br/>";
echo "plane2的颜色为{$plane2->color}<br/>";
