<?php
header("Content-type:text/html;charset=utf-8");
require_once './Adapter/Adapter.php';

$player1 = new Forward();

echo "前锋上场:<br/>";
$player1->Attack();
$player1->Defense();


echo "<br/><hr/>";
echo "姚明上场：<br/>";
$yaoming = new Adater();
$yaoming->Attack();
$yaoming->Defense();
