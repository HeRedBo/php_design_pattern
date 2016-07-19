<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/2
 * Time: 1:10
 */
header("Content-type:text/html;charset=utf-8");
require_once 'Strategy/Strategy.php';

/*************策略模式*************/
$strategy = new contextStrategy();

echo "<span style='color: #ff0000;'>Y产品</span><hr/>";
$strategy->getItem('YItem');
$strategy->inertiaRotate();
$strategy->unInertisRotate();

echo "<span style='color: #ff0000;'>X产品</span><hr/>";
$strategy->getItem('XItem');
$strategy->inertiaRotate();
$strategy->unInertisRotate();


echo "<span style='color: #ff0000;'>XY产品</span><hr/>";
$strategy->getItem('XYItem');
$strategy->inertiaRotate();
$strategy->unInertisRotate();
