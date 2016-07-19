<?php
header("Content-type:text/html/;charset=utf-8");
require 'Template/Template.php';

# ---------------------- 模板模式 ---------------------
$xiaomi = new XiaoMi();
$meizu  = new MeiZu();

$xiaomi->MakeFlow();
$meizu->MakeFlow();
