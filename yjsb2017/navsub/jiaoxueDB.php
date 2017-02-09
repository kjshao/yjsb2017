<?php
include_once '../conn.php'; 
include_once(__ROOT__.'/navsub/listdown.php');
$tid = intval($_POST['tid']);
// parameters
include_once(__ROOT__.'/navsub/jiaoxueVar.php');
$pg = $dp*$_POST['num'] - $dp;
$page = array($pg,$dp);
//
$tid?$listdown=listdown($db,$tableName,$tid,$nameHead,$nameTable,$nameContent,$width,$page):$listdown;
echo $listdown; 
?>
