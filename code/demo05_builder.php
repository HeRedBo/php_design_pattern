<?php
header("Content-type:text/html;charset=utf-8");
require_once './Builder/Builder.php';
$director = new Director();

echo "蓝鸟组成:<hr/>";
$blue_bird = $director->Construct(new BlueBird());
$blue_bird->Show();

echo "</br>Rose鸟的组成：<hr>";
$rose_bird = $director->Construct(new RoseBird());
$rose_bird->Show();



