<?php
include('config/setup.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $page['title']. '|' .$site_title ?></title>	
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('config/css.php'); ?>
<?php include('config/js.php'); ?>
</head>
<body>
	<h1><i class="fa fa-home" style="font-size:200px"></i><strong> Hostel Management System </strong></h1>
	<?php include('template/navigation.php'); ?>
	<div class="container">
<h1><?php  echo $page['header'];  ?></h1>
<p><?php  echo $page['body'];     ?></p>
<imgsrc="hostel.jpg" height="500" />
</div>
<!-- end container-->	
<?php include('template/footer.php'); ?>
</body>
</html>
