<?php
    header("Content-type:text/html;charset=utf-8");
    require_once "Visitor/Visitor.php";

    #----------------  访问者模式 -----------------#

    $os = new ObjectStruct();
    $os->Add(new VMan());
    $os->Add(new VWoman());

    // 成功时反应
    $ss  = new Success();
    $os -> Display($ss);

    // 失败时反应
    $fs = new Failure();
    $os->Display($ss);

    // 恋爱时反应
    $ats = new Amativeness();
    $os ->Display();
