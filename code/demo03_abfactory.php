<?php
/************ 抽象类工厂测试代码  *********/
header("Content-type:text/html;charset=utf-8");
require_once './AbstractFactory/AbstractFactory.php';

//---------------- 点餐 -------------------
$factoryA = new AFactory();
$factoryB = new BFactory();

//------------ 麦当劳制作套餐食物 ---------
// A 套餐
$allayA = $factoryA->GetAllayFood();
$drinkA = $factoryA->GetDrinkFood();

// B 套餐
$allayB = $factoryB->GetAllayFood();
$drinkB = $factoryB->GetDrinkFood();

# --------------- 享受套餐 -------------
echo "享受A套餐：<br/>";
$allayA->Allay();
$drinkA->Drink();

echo "享受B套餐：<br/>";
$allayB->Allay();
$drinkB->Drink();



