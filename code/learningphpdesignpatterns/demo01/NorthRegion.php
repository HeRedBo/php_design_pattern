<?php 
    include_once('IAbstract.php');

    class NorthRegion extends IAbstract
    {
        // 必须返回十进制值
        protected function giveCost()
        {
            return 210.54;
        }

        protected function giveCity()
        {
            return "Moose Breath";
        }

    }