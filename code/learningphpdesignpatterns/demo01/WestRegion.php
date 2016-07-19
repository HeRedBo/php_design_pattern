<?php
include_once('IAbstract.php');
class WestRegion extends IAbstract
{
    // 必须是十进制返回
    protected function giveCost()
    {
        $solarSavings = 2;
        $this->valueNow = 210.54/ $solarSavings;
        return $this->valueNow;
    }

    // 必须返回字符串类型
    protected function giveCity()
    {
        return "Rattlesnake Culch";
    }
}

