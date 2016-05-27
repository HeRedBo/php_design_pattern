<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/25
 * Time: 11:28
 */

/**
 * 抽象产品角色 汉堡
 * Interface IHanbao
 */
interface IHanao
{
    function Allay();
}

/**
 * 具体产品角色 肉松汉堡
 *  class RousongBao
 */
class RouSongBao implements IHanao
{
    function Allay()
    {
        // TODO: Implement Allay() method.
        echo  "I am 肉松汉堡 小的给客人解饿了!<br/>";
    }
}

/**
 * 肌肉汉堡
 *
 * Class ChickenBao
 */
class ChickenBao implements IHanao
{
    function Allay()
    {
        // TODO: Implement Allay() method.
        echo "我是鸡肉汉堡 美味可口！<br/>";
    }
}

/**
 * 抽象工厂角色
 * Interface IServerFactory
 */
interface IServerFactory
{
    function MakeHanBao();
}

/**
 * 肉松汉堡工厂
 * Class RouSongFactory
 */
class RouSongFactory implements IServerFactory
{
    function MakeHanBao()
    {
        return new RouSongBao();
    }
}

class ChickenFactory implements IServerFactory
{
    function MakeHanBao()
    {
        return new ChickenBao();
    }
}

/**
 * 工厂方法模式优缺点：
 * 优势：克服了简单工厂模式违背开放-封闭的原则，保持了封装对象创建过程的优点。
 * 缺陷：当增加产品时，就得增加一个产品工厂的类，增加额外的开发量。避免不了分支判断的问题。
 */