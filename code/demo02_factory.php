<?php
header("Content-type:text/html;charset=utf-8");
require_once './FactoryMethod/FactoryMethod.php';

// ---------------- 厨师餐厅 ---------
$chickenFactory = new ChickenFactory();
$rouSongFactory = new RouSongFactory();

//----------------- 点餐 ------------
$chicken1 = $chickenFactory->MakeHanBao();
$chicken2 = $chickenFactory->MakeHanBao();
$rousong1 = $rouSongFactory->MakeHanBao();
$rousong2 = $rouSongFactory->MakeHanBao();

//----------------- 顾客吃饭 --------------
$chicken1->Allay();
$chicken2->Allay();
$rousong1->Allay();
$rousong2->Allay();

