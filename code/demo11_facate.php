<?php
    header("Content-type:text/html;charset=utf-8");
    require_once './Facade/Facade.php';
    // 门面模式测试代码
    $lurenA = new FacadeCompany();
    $lurenA->buy();
    $lurenA->sell();
