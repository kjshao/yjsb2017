<?php
  include_once '../conn.php'; 
  $choice = $_POST['choice'];
if ( $choice == 1 ) {
  include_once(__ROOT__.'/navsub/listdown.php');
  $tid = $_POST['tid'];
  $item = trim($_POST['item']);
  include_once(__ROOT__.'/navsub/var.php');
  $page = array(0,$dp[$tidx]);

  $tid?$listdown=listdown($db,$tid,$name,$tableName[$tidx],$ttid[$tidx],$nameHead[$tidx],$nameTable[$tidx],$nameContent[$tidx],$width[$tidx],$page):$listdown;

  $query=$db->query("select * from {$tableName[$tidx]} where tid='$ttid[$tidx]'");
  $total=$db->num_rows($query);
  $totalpage=ceil($total/$dp[$tidx]);
  $res = array($listdown, $total, $totalpage);
  echo json_encode($res);
} elseif ( $choice == 2 ) {
  include_once(__ROOT__.'/navsub/listdown.php');
  $tid = intval($_POST['tid']);
  $item = trim($_POST['item']);
  // parameters
  include_once(__ROOT__.'/navsub/var.php');
  $pg = $dp[$tidx]*($_POST['num'] - 1);
  $page = array($pg,$dp[$tidx]);
  //
  $tid?$listdown=listdown($db,$tid,$name,$tableName[$tidx],$ttid[$tidx],$nameHead[$tidx],$nameTable[$tidx],$nameContent[$tidx],$width[$tidx],$page):$listdown;
  echo $listdown; 
} elseif ( $choice == 3 ) {
//  $id = $_POST['id'];
//  $tid = intval($_POST['tid']);
//  $item = trim($_POST['item']);
//  include_once(__ROOT__.'/navsub/var.php');
//  $table = $tableName[$tidx];
//  $db->query("update {$table} set hot=hot+1 where id='$id'");
//  @extract($db->get_one("select * from {$table} where id='$id'"));
//  $time = date("Y-m-d", $posttime);
//  $res = array($time, $concent);
//  echo json_encode($res);
}
?>
