<?php
/**
 * 抽象产品角色
 * Interface IProduct 产品接口
 */
interface IProduct
{
    /**
     * x 轴旋转
     * @return mixed
     */
    function XRotate();

    /**
     * Y轴旋转
     * @return mixed
     */
    function YRotate();
}

/**
 * 具体产品角色
 *
 * Class XProdunc x轴旋转产品
 */
class Xproduct implements IProduct
{
    private $xMax = 1;
    private $yMax = 1;

    function __construct($xMax,$yMax)
    {
        $this->xMax = $xMax;
        $this->yMax = 1;
    }

    function XRotate()
    {
        // TODO: Implement XRotate() method.
        echo "你好 我是X轴旋转产品 X轴转转装";
    }

    function YRotate()
    {
        // TODO: Implement YRotate() method.
        echo "你好 我是Y轴旋转产品 我没有Y轴";
    }
}

/**
 * 具体产品角色
 * class Yproduct Y轴旋转长跑
 */
class YProduct implements IProduct
{
    private $xMax = 1;
    private $yMax = 1;

    function __construct($xMax,$yMax)
    {
        $this->xMax = 1;
        $this->yMax = $yMax;
    }

    function XRotate()
    {
        // TODO: Implement XRotate() method.
        echo "你好 我是X轴旋转产品 X轴转转装";
    }

    function YRotate()
    {
        // TODO: Implement YRotate() method.
        echo "你好 我是Y轴旋转产品 我没有Y轴";
    }

}

/**
 * 具体产品角色
 * class XYprodunct  xy轴都可旋转的产品
 */
class XYProduct implements IProduct
{
    private $xMax = 1;
    private $yMax = 1;

    function __construct($xMax,$yMax)
    {
        $this->xMax = $xMax;
        $this->yMax = $yMax;
    }

    function XRotate()
    {
        // TODO: Implement YRotate() method.
        echo "您好，我是XY轴都可旋转产品，X轴转转转。。。。。。";
    }

    function YRotate()
    {
        // TODO: Implement XRotate() method.
        echo "您好，我是XY轴都可旋转产品，Y轴转转转。。。。。。";
    }
}


/**
 * 工厂角色
 * Class ProductFactory
 */
class ProductFactory
{
    static function GetInstance($xMax, $yMax)
    {
        if($xMax > 1 && $yMax === 1) {
            return new Xproduct($xMax, $yMax);
        }
        elseif ($xMax === 1 && $yMax > 1)
        {
            return new Xproduct($xMax, $yMax);
        }
        elseif($xMax > 1 && $yMax > 1)
        {
            return new XYproduct($xMax, $yMax);
        }
        else
        {
            return null;
        }
    }
}

/**
 * 对象调用者需要对象时，直接向工厂请求即可。从而避免了对象的调用者
 * 与对象的实现类以硬编码方式耦合，以提高系统的可维护性、可扩展性。
 *
 * 简单工厂的缺点：当产品修改时，工厂类也要做相应的修改，比如要增加一种操作类，
 * 如求M数的N次方，就得改case,修改原有类，违背了开放-封闭原则。
 */


