<?php
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $tidx = $tid - 1;
    $nameHead = array("博士招生","硕士招生");
    $tableName = array("andsky_down1","andsky_down1");
    $ttid = array(1,2);
    $dp = array(20,20);
    $nameTable = array(array("招生信息","招生类别","发布日期"),array("招生信息","招生类别","发布日期"));
    $nameContent = array(array("title","name","posttime","id"),array("title","name","posttime","id"));
    $width = array(array(0,80,100),array(0,80,100));
    $nameLink = array(array("http://www.gsc.dicp.ac.cn/bodylist8.php?tid=1"),array("DICP 高校奖学金"));
  }
?>
