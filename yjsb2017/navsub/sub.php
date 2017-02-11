<?php
  date_default_timezone_set('Asia/Shanghai');
  include_once('../global.php');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>中科院大连化物所研究生部</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Kejie Shao">
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo __SERVER__?>/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="<?php echo __SERVER__?>/css/basic.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo __SERVER__?>/css/sidebar.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo __SERVER__?>/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo __SERVER__?>/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="<?php echo __SERVER__?>/js/dropdown.min.js" type="text/javascript"></script>
  <script src="<?php echo __SERVER__?>/js/jquery.bootpag.min.js"></script>
  <script src="<?php echo __SERVER__?>/js/page.js"></script>
</head>

<body>
<?php
include_once(__ROOT__.'/jumbotron.php');
include_once(__ROOT__.'/nav.php');
$item = $_GET['item'];
$tid = $_GET['tid'];
if ( $item == 'zhineng' ) {
  $file = __ROOT__.'/navsub/'.$item.'.php';
} else {
  $file = __ROOT__.'/navsub/item.php';
}
include_once($file);
include_once(__ROOT__.'/footer.php');
?>
<script>
  $(document).ready(function(){$('#menubar > li').make_dropdown();});
</script>
</body>
</html>
