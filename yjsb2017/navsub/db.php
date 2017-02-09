<?php
include_once '../conn.php'; 
include_once(__ROOT__.'/navsub/listdown.php');
$tid = intval($_POST['tid']);
$item = trim($_POST['item']);
// parameters
include_once(__ROOT__.'/navsub/'.$item.'Var.php');
$pg = $dp[$tidx]*($_POST['num'] - 1);
$page = array($pg,$dp[$tidx]);
//
$tid?$listdown=listdown($db,$tableName[$tidx],$ttid[$tidx],$nameHead[$tidx],$nameTable[$tidx],$nameContent[$tidx],$width[$tidx],$page):$listdown;
echo $listdown; 
?>
