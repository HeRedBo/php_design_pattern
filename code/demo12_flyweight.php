<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/29
 * Time: 17:27
 */

header("Content-type:text/html;charset=utf-8");
require_once './Flyweight/Flyweight.php';

// ----------------- 门面模式测试代码  ------------------
$factroy = new BlogFactory();

# 乔布斯的博客
$jobs    = $factroy->getBlogModel('JobsBlog');
if($jobs)
{
    $jobs -> showTime();
    $jobs -> showColor();
}


$jobs1    = $factroy->getBlogModel('JobsBlog');
if($jobs1)
{
    $jobs1 -> showTime();
    $jobs1 -> showColor();
}


# 雷军的博客
$leijun = $factroy->getBlogModel('LeiJunBlog');
if($leijun)
{
    $leijun->showTime();
    $leijun->showColor();
}

$leijun1 = $factroy->getBlogModel('LeiJunBlog');
if($leijun1)
{
    $leijun1->showTime();
    $leijun1->showColor();
}

$aFanda = $factroy->getBlogModel('aFanda');
if($aFanda)
{
    $aFanda->showTime();
    $aFanda->showColor();
}