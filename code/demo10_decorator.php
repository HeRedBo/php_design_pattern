<?php
    header("Content-type:text/html;charset=utf-8");
    require_once './Decorator/Decorator.php';

    $YaoMing = new Person('姚明');
    $aTai    = new Person("A泰斯特");


    $pixie = new Pixie();
    $waitao = new Waitao();


    $pixie->Decorate($YaoMing);
    $waitao->Decorate($YaoMing);

    echo "<hr/>";

    $qiuxie = new Qiuxie();
    $tshirt = new Tshirt();

    $qiuxie->Decorate($aTai);
    $tshirt->Decorate($qiuxie);
    $tshirt->Display();


