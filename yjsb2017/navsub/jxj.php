<?php
  include_once '../conn.php'; 
  include_once(__ROOT__.'/navsub/listdown.php');
?>
<div class="row" style="background:rgb(125,187,244); margin:20px 0px 20px 0px; padding:0px 0px 0px 0px;">
<nav class="col-xs-3 sidebar" style="background:rgb(125,187,244); margin:0; padding:0; min-height:300px">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item navlink">
      <a class="nav-link active" href="#"><strong>获奖名单</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="http://www.gsc.dicp.ac.cn/jxj" target=_blank><strong>奖学金申请</strong></a></li>
  </ul>
</nav>
<div class="col-xs-9" style="background:#fff; min-height:300px">
<?php
  include_once(__ROOT__.'/navsub/jxjVar.php');
  include_once(__ROOT__.'/navsub/tail.php');
?>
