<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/2
 * Time: 23:46
 */
header('Content-Type:text/html;charset=utf-8');
require_once 'Observe/Observe.php';

// 前台

$_s = new ConcreteSubject();

// 宝银
$baoyin = new ConcreteObserver($_s,'张三');
$jianchao = new ConcreteObserver($_s,'李四');


// 前台记下宝银姜超
$_s->Attach($baoyin);
$_s->Attach($jianchao);

// 前台发现老板回来
$_s->subject_state = "孙总回来了";

// 前台发送通知
$_s ->Notify();