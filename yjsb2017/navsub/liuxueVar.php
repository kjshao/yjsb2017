<?php
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $tidx = $tid - 1;
    $nameHead = array("留学生招生/Enrollment","港澳台招生");
    $tableName = array("andsky_down5","andsky_down5");
    $ttid = array(1,2);
    $dp = array(20,20);
    $nameTable = array(array("招生信息","类别","发布日期"),array("招生信息","类别","发布日期"));
    $nameContent = array(array("title","name","posttime","id"),array("title","name","posttime","id"));
    $width = array(array(0,100,100),array(0,100,100));
  }
?>
