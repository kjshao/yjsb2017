<?php
  include_once '../conn.php'; 
  include_once(__ROOT__.'/navsub/listdown.php');
?>
<div class="row" style="background:rgb(125,187,244); margin:20px 0px 20px 0px; padding:0px 0px 0px 0px;">
<nav class="col-xs-3 sidebar" style="background:rgb(125,187,244); margin:0; padding:0; min-height:300px">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item navlink">
      <a class="nav-link active" href="#"><strong>博士招生</strong></a>
    </li>
    <li class="nav-item navlink">
      <a class="nav-link active" href="#"><strong>硕士招生</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="http://www.gsc.dicp.ac.cn/bodylist8.php?tid=1" target=_blank><strong>DICP 高校奖学金</strong></a></li>
  </ul>
</nav>
<div class="col-xs-9" style="background:#fff; min-height:300px">
<?php
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
  print $listdown;

  $query=$db->query("select * from {$tableName} where tid='$tid'");
  $total=$db->num_rows($query);
  $totalpage=ceil($total/$dp);
  echo "<p id='item' style='display:none'> $item </p>";
  echo "<p id='tid' style='display:none'> $tid </p>";
  echo "<p id='total' style='display:none'> $total </p>";
  echo "<p id='totalpage' style='display:none'> $totalpage </p>";
?>
  <!-- paging -->
  <center>
    <div id="page-selection"></div>
    <div id="page-info"></div>
  </center>
  <!-- paging -->
</div>
</div>

