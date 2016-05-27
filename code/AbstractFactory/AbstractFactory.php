<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 12:05
 */
/**
 * 抽象模式
 */

//-------------------- 产品 -----------------

/**
 * 抽象产品角色      充饥食物
 * Interface IAllayFood
 */
interface IAllayFood
{
    function Allay();
}

/**
 * 抽象产品角色   饮料
 * Interface IDringFood
 */
interface IDringFood
{
    function Drink();
}

/**
 * 虾仁汉堡 虾仁汉堡
 * Class XiaRenHamB
 */
class XiaRenHamB implements IAllayFood
{
    function Allay()
    {
        echo "虾仁汉堡！好吃的不得了！<br/>";
    }
}

class ChikenHamb implements IAllayFood
{
    function Allay()
    {
        echo "鸡肉汉堡！美味可口！<br/>";
    }
}

/**
 * 具体产品角色 可口可乐
 * Class KekouKele
 */
class KekouKele implements IDringFood
{
    function Drink()
    {
        echo "可口可乐！好喝<br/>";
    }
}

class Baishikele implements IDringFood
{
    function Drink()
    {
        echo "百事可乐! 防暑解渴！<br/>";
    }
}



//----------------------- 抽象工厂 ----------------

interface IFactory
{
    // 得到充饥食物
    function GetAllayFood();
    // 得到解渴食物
    function GetDrinkFood();
}


/**
 * 工厂A     A套餐: 虾仁汉堡 + 百事可乐
 * Class AFactory
 */
class AFactory implements IFactory
{
    function GetAllayFood()
    {
        return new XiaRenHamB();
    }

    function GetDrinkFood()
    {
        return new KekouKele();
    }
}


class BFactory implements IFactory
{
    function GetAllayFood()
    {
        return new ChikenHamb();
    }

    function GetDrinkFood()
    {
        return new Baishikele();
    }
}
