<?php 
header("Content-type:text/html/;charset=utf-8");

require 'Mediator/Mediator.php';

// 开战前
$ufo = new GameRole();
$utf->GetInitState();

echo "<span style='color:#ff0000'>------------------ 开战前 ----------------</span><br/> ";
$utf->stateDisplay();

// 保存进度
$roleMan = new RoleStateManager();
$roleMan->memento = $utf->SaveState();

echo " <span style='color:#ff0000>------------------- 战斗中 ------------</span> ";

$num = 1;

// 大战Boss 5 回合

for ($i=0; $i < 13; $i++) { 
  echo "第{$num}个回合<br/>";
  $ufo->BeenAttack();
  $ufo->StateDisplay();
  $num ++;

  // 角色阵亡
  if($ufo->liveLevel <= 0)
  {
     break;
  }
}

echo "<span style='color:#ff0000>---------------- 恢复状态 -------------</span> ";

// 恢复之前状态；
$ufo->RecoverryState($roleMan->memento);
$ufo->StateDisplay(); 

