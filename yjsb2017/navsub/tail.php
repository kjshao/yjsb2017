<?php
  $page = array(0,$dp[$tidx]);

  $tid?$listdown=listdown($db,$tid,$name,$tableName[$tidx],$ttid[$tidx],$nameHead[$tidx],$nameTable[$tidx],$nameContent[$tidx],$width[$tidx],$page):$listdown;
  print $listdown;

  $query=$db->query("select * from {$tableName[$tidx]} where tid='$ttid[$tidx]'");
  $total=$db->num_rows($query);
  $totalpage=ceil($total/$dp[$tidx]);
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
