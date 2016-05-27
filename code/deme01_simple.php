<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 11:15
 */
require_once './SimpleFactory/SimpleFactory.php';
header("Content-type:text/html;charset=utf-8");

$pro = [];
$pro[] = ProductFactory::GetInstance(1,2);
$pro[] = ProductFactory::GetInstance(12,1);
$pro[] = ProductFactory::GetInstance(12,12);
$pro[] = ProductFactory::GetInstance(0,12);

foreach($pro as $v)
{
    if($v)
    {
        echo "<br/>";
        $v->XRotate();
        echo "<br/>";
        $v->YRotate();
    }
    else
    {
        echo "非卖商品！<br/>";
    }
    echo "<hr>";
}



