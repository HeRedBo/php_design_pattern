<?php 
    abstract class IAbstract
    {
        // 对所有的类都可用的属性
        protected $valueNum;

        /* 所有事项都必须包含以下两个方法*/
        // 必须是十进制值
        abstract protected function giveCost();

        // 必须是返回字符串类型
        abstract protected function giveCity();

        /**
         * 这个具体桉树对所有类都可用
         * 而不覆盖内容
         */
        public function displayShow()
        {
            $stringCost = $this->giveCost();
            $stringCost = (string) $stringCost;
            $allTigether= ("Cost ]: $".$stringCost." for ".$this->giveCity());
            return $allTigether;
        }

    }