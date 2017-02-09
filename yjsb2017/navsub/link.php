<?php
  include_once '../conn.php'; 
  include_once(__ROOT__.'/navsub/listdown.php');
  $tid = $_POST['tid'];
  $item = trim($_POST['item']);
  include_once(__ROOT__.'/navsub/'.$item.'Var.php');
  $page = array(0,$dp[$tidx]);

  $tid?$listdown=listdown($db,$tableName[$tidx],$ttid[$tidx],$nameHead[$tidx],$nameTable[$tidx],$nameContent[$tidx],$width[$tidx],$page):$listdown;

  $query=$db->query("select * from {$tableName[$tidx]} where tid='$ttid[$tidx]'");
  $total=$db->num_rows($query);
  $totalpage=ceil($total/$dp[$tidx]);
  $res = array($listdown, $total, $totalpage);
  echo json_encode($res);
?>
