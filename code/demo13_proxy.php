<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/29
 * Time: 17:51
 */
header("Content-type:text/html;charset=utf-8");
require_once './Proxy/Proxy.php';

// 代理模式测试代码
$proxy = new Proxy('范冰冰');
$proxy->giveRose();
$proxy->giveChocolate();
