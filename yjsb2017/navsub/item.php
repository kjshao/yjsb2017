<?php
  include_once '../conn.php'; 
  include_once(__ROOT__.'/navsub/listdown.php');
  include_once(__ROOT__.'/navsub/var.php');
  $nitem0 = count( $nameHead );
  if ( isset($nameLink) ) {
    $nitem1 = count( $nameLink[0] );
  } else {
    $nitem1 = 0;
  }
?>
<div id="titleDiv"></div>
<div id="timeDiv"></div>
<div id="mainDiv" class="row" style="background:rgb(125,187,244); margin:20px 0px 20px 0px; padding:0px 0px 0px 0px;">
<nav class="col-xs-3 sidebar" style="background:rgb(125,187,244); margin:0; padding:0; min-height:300px">
  <ul class="nav nav-pills flex-column">
     <?php
     for ( $i=0; $i<$nitem0; $i++ ) {
       echo "<li class='nav-item navlink'><a class='nav-link active'><strong>{$nameHead[$i]}</strong></a></li>";
     }
     for ( $i=0; $i<$nitem1; $i++ ) {
       echo "<li class='nav-item'><a class='nav-link active' href='{$nameLink[0][$i]}' target=_blank><strong>{$nameLink[1][$i]}</strong></a></li>";
     }
     ?>
  </ul>
</nav>
<div class="col-xs-9" style="background:#fff; min-height:300px">
<?php
  include_once(__ROOT__.'/navsub/tail.php');
?>
