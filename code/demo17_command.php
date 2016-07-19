<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/5
 * Time: 3:01
 */
/********************* 命令模式 *********************/
header('Content-Type:text/html;charset=utf-8');

require_once 'Command/Command.php';

//测试代码
// 命令接受者
$myTv = new Tv();

// 开机命令
$on = new CommandOn($myTv);

// 关闭命令
$off = new CommandOff($myTv);

// 频道切换对象
$channel = new CommandChannel($myTv);

// 命令控制对象
$control = new Control($on,$off, $channel);

// 开机
$control->turnOn();

// 切换频道
$control->changeChannel();
// 关机
$control->turnOff();





