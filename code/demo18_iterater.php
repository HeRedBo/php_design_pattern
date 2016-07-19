<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/5
 * Time: 4:17
 */
header('Content-Type:text/html;charset=utf-8');
require_once 'Command/Command.php';

$iterator = new ConcreIterater(['redbo','xiaolan','bolan']);
$item = $iterator->First();
echo $item,'<br/>';

while(!$iterator->IsDone())
{
    echo "欢迎：{$iterator->CurrentItem()}登场!<br/>";
    $iterator->Next();
}

