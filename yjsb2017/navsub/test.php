<?php
include_once '../conn.php'; 
$id = $_POST['id'];
$table = $_POST['table'];
$db->query("update {$table} set hot=hot+1 where id='$id'");
@extract($db->get_one("select * from {$table} where id='$id'"));
$time = date("Y-m-d", $posttime);
$res = array($time, $concent);
echo json_encode($res);
?>
