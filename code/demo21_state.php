<?php   
header("Content-type:text/html/;charset=utf-8");
require 'State/State.php';

$emergWork = new Work();
$emergWork->hour = 9;
$emergWork->WriteCode();

$emergWork->hour = 10;
$emergWork->WriteCode();

$emergWork->hour = 13;
$emergWork->WriteCode();

$emergWork->hour = 14;
$emergWork->WriteCode();

$emergWork->hour = 17;
$emergWork->WriteCode();

$emergWork->isDone = true;
#$emergWork->isDone = false;

$emergWork->hour = 19;
$emergWork->WriteCode();

$emergWork->hour = 22;
$emergWork->WriteCode();