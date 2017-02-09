<?php
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $tidx = $tid - 1;
    $nameHead = ["博士招生","硕士招生"];
    $tableName = ["andsky_down1","andsky_down1"];
    $dp = [20,20];
    $nameTable = [["招生信息","招生类别","发布日期"],["招生信息","招生类别","发布日期"]];
    $nameContent = [["title","name","posttime","id"],["title","name","posttime","id"]];
    $width = [[0,80,100],[0,80,100]];
  }
?>
