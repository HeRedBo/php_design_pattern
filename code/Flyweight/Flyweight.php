<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/5/27
 * Time: 20:07
 */

/**
 * 所有享元父接口角色
 * Interface IBlogModel
 */
Interface IBlogModel
{
    function showTime();
    function showColor();
}

/**
 * 乔布斯的博客模板
 * Class JobsBlog
 */
class JobsBlog implements IBlogModel
{
    function showTime()
    {
        echo "北京时间：".date('Y-m-d H:i:s');
    }

    function showColor()
    {
        echo '<span style="color: #'.$this->randColor().'">Jobs <br/>随机颜色：#</span>';
    }

    /**
     * 随机颜色生产函数
     * @return string
     */
    function randColor(){
        $colors = array();
        for($i = 0;$i<6;$i++){
            $colors[] = dechex(rand(0,15));
        }
        return implode('',$colors);
    }
}

class LeiJunBlog implements IBlogModel
{
    function showTime()
    {
        echo "北京时间：".date('Y-m-d H:i:s');
    }

    function showColor()
    {
        echo '<span style="color: #'.$this->randColor().'">雷军博客</span>';
    }

    /**
     * 随机颜色生产函数
     * @return string
     */
    function randColor(){
        $colors = array();
        for($i = 0;$i<6;$i++){
            $colors[] = dechex(rand(0,15));
        }
        return implode('',$colors);
    }
}

/**
 * 博客模板工厂
 * Class BlogFactory
 */
class BlogFactory
{
    private $model = [];

    function getBlogModel($name)
    {
        if(isset($this->model[$name]))
        {
            echo "我是在缓存里的数据<br/>";
            return $this->model[$name];
        }
        else
        {
            try
            {
                echo "我是新创建的:<br/>";
                $class = new ReflectionClass($name);
                $this->model[$name] = $class -> newInstance();
                return $this->model[$name];
            }
            catch (ReflectionException $e)
            {
                echo "<span style='color: #ff0000;'>你要求的对象不能被创建！</span><br>";
                return null;
            }
        }
    }
}