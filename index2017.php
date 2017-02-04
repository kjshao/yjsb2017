<?php
  date_default_timezone_set('Asia/Shanghai');
  include_once('yjsb2017/global.php');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>大连化物所研究生部</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Kejie Shao">
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo __SERVER__?>/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="<?php echo __SERVER__?>/css/basic.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo __SERVER__?>/css/carousel.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo __SERVER__?>/css/slider.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo __SERVER__?>/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo __SERVER__?>/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="<?php echo __SERVER__?>/js/vticker.js"></script>
  <script src="<?php echo __SERVER__?>/js/dropdown.min.js" type="text/javascript"></script>
  <script src="<?php echo __SERVER__?>/js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
  <script src="<?php echo __SERVER__?>/js/init.js" type="text/javascript"></script>
</head>

<body>
<?php
include_once(__ROOT__.'/jumbotron.php');
include_once(__ROOT__.'/nav.php');
include_once(__ROOT__.'/slider.php');
include_once(__ROOT__.'/news.php');
include_once(__ROOT__.'/infos.php');
include_once(__ROOT__.'/students.php');
include_once(__ROOT__.'/carousel.php');
include_once(__ROOT__.'/links.php');
include_once(__ROOT__.'/footer.php');
?>

<script>
$(document).ready(function(){$('#menubar > li').make_dropdown();});
</script>
<script>
$(function () {
  $('[data-toggle="popover"]').popover({html:true})
})
</script>
</body>
</html>
