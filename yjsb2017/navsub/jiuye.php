<?php
  include_once '../conn.php'; 
  include_once(__ROOT__.'/navsub/listdown.php');
?>
<div class="row" style="background:rgb(125,187,244); margin:20px 0px 20px 0px; padding:0px 0px 0px 0px;">
<nav class="col-xs-3 sidebar" style="background:rgb(125,187,244); margin:0; padding:0; min-height:300px">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item navlink">
      <a class="nav-link active" href="#"><strong>出国留学</strong></a>
    </li>
    <li class="nav-item navlink">
      <a class="nav-link active" href="#"><strong>招聘信息</strong></a>
    </li>
    <li class="nav-item navlink">
      <a class="nav-link active" href="#"><strong>就业政策</strong></a>
    </li>
    <li class="nav-item navlink">
      <a class="nav-link active" href="#"><strong>培训指导</strong></a>
    </li>
  </ul>
</nav>
<div class="col-xs-9" style="background:#fff; min-height:300px">
<?php
  include_once(__ROOT__.'/navsub/jiuyeVar.php');
  include_once(__ROOT__.'/navsub/tail.php');
?>
