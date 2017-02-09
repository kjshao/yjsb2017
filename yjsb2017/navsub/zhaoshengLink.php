<?php
  include_once '../conn.php'; 
  include_once(__ROOT__.'/navsub/listdown.php');
  $tid = $_POST['tid'];
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $nameHead = array("博士招生","硕士招生");
  }
  $nameContent = array("title","name","posttime","id");
  $nameTable = array("招生信息","招生类别","发布日期");
  $width = array("0","80","100");
  $tableName = "andsky_down1";
  $dp = 20;
  $page = array(0,$dp);

  $tid?$listdown=listdown($db,$tableName,$tid,$nameHead,$nameTable,$nameContent,$width,$page):$listdown;

  $query=$db->query("select * from {$tableName} where tid='$tid'");
  $total=$db->num_rows($query);
  $totalpage=ceil($total/$dp);
  $res = array($listdown, $total, $totalpage);
  echo json_encode($res);
?>
