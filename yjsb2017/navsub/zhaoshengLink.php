<?php
  include_once '../conn.php'; 
  include_once(__ROOT__.'/navsub/listdown.php');
  $tid = $_POST['tid'];
  include_once(__ROOT__.'/navsub/zhaoshengVar.php');
  $page = [0,$dp[$tidx]];

  $tid?$listdown=listdown($db,$tableName[$tidx],$tid,$nameHead[$tidx],$nameTable[$tidx],$nameContent[$tidx],$width[$tidx],$page):$listdown;

  $query=$db->query("select * from {$tableName[$tidx]} where tid='$tid'");
  $total=$db->num_rows($query);
  $totalpage=ceil($total/$dp[$tidx]);
  $res = array($listdown, $total, $totalpage);
  echo json_encode($res);
?>
