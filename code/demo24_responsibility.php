<?php
header("Content-type:text/html;charset=utf-8");
require_once 'Responsibility/Responsibility.php';
// --------------------- 职责模式 ---------------------------
$jingli   = new CommonManager("李经理");
$zongjian = new MajorDomo('郭总监');
$zongjingli= new GeneralManager("孙总");


// 直接设置上级
$jingli -> SetHeader($zongjian);
$zongjian-> SetHeader($zongjingli);

// 申请
$req1 = new  Request();
$req1-> requestType ="请假";
$req1-> requestContent = "小菜请假！";
$req1 -> num  = 1;
$jingli->Apply($req1);

$req2 = new  Request();
$req2-> requestType ="请假";
$req2-> requestContent = "小菜请假！";
$req2 -> num  = 4;
$jingli->Apply($req2);

$req3 = new  Request();
$req3-> requestType ="加薪";
$req3-> requestContent = "小菜请求请假！";
$req3 -> num  = 500;
$jingli->Apply($req3);

$req4 = new  Request();
$req4-> requestType ="加薪";
$req4-> requestContent = "小菜请求请假！";
$req4 -> num  = 1000;
$jingli->Apply($req4);
