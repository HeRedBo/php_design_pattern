<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/5
 * Time: 20:49
 */
header("Content-Type:text/html;charset=utf-8");
//--------------------------中介者模式-------------------
require_once "Mediator/Mediator.php";

// 测试代码
$NUSC = new UnitedCommit();
$c1 = new USA($NUSC);
$c2 = new China($NUSC);

