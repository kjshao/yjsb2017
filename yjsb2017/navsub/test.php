<?php
  date_default_timezone_set('Asia/Shanghai');
  include_once '../conn.php'; 
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
$id=780;
$db->query("update andsky_down1 set hot=hot+1 where id='$id'");
@extract($db->get_one("select * from andsky_down1 where id='$id'"));
$time=date("Y-m-d",$posttime);
echo $time;
echo $concent;
?>

<script>
  $(document).ready(function(){$('#menubar > li').make_dropdown();});
</script>
</body>
</html>
