<?php
  include_once '../conn.php'; 
  include_once(__ROOT__.'/navsub/listdown.php');
  $tid = $_POST['tid'];
  include_once(__ROOT__.'/navsub/jiaoxueVar.php');
  $page = array(0,$dp);

  $tid?$listdown=listdown($db,$tableName,$tid,$nameHead,$nameTable,$nameContent,$width,$page):$listdown;

  $query=$db->query("select * from {$tableName[$tid-1]} where tid='$tid'");
  $total=$db->num_rows($query);
  $totalpage=ceil($total/$dp);
  $res = array($listdown, $total, $totalpage);
  echo json_encode($res);
?>
