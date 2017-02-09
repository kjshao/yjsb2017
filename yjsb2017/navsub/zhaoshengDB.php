<?php
include_once '../conn.php'; 
include_once(__ROOT__.'/navsub/listdown.php');
$tid = intval($_POST['tid']);
// parameters
include_once(__ROOT__.'/navsub/zhaoshengVar.php');
$pg = $dp[$tidx]*($_POST['num'] - 1);
$page = [$pg,$dp[$tidx]];
//
$tid?$listdown=listdown($db,$tableName[$tidx],$tid,$nameHead[$tidx],$nameTable[$tidx],$nameContent[$tidx],$width[$tidx],$page):$listdown;
echo $listdown; 
?>
