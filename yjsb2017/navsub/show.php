<?php
  include_once '../conn.php'; 
  $item = $_GET['name'];
  $id = $_GET['id'];
  include_once(__ROOT__.'/navsub/var.php');
  $table = $tableName[$tidx];
  $db->query("update {$table} set hot=hot+1 where id='$id'");
  @extract($db->get_one("select * from {$table} where id='$id'"));
  $time = date("Y-m-d", $posttime);
  echo $concent;
?>
