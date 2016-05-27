<?php
header("Content-type:text/html;charset=utf-8");
require_once 'Bridge.php';

$speedRoad=new SpeedRoad();
$speedRoad->icar=new Car();
$speedRoad->Run();

echo "<hr/>";

