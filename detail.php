<?php 
$img = $_REQUEST['name'];
?>
<html>
	<head>
		<title>Pengolah Citra Digital</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	<?php 
	include "menu.php";
	?>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					File Asli
					<img src="<?php echo "image/".$img;?>"  width="100%">
				</div>
				<div class="col-md-4">
					Grayscale
					<img src="<?php echo "grayscale/".$img;?>"  width="100%">
				</div>
				<div class="col-md-4">
					Citra Biner
					<img src="<?php echo "citra/".$img;?>" width="100%">
				</div>
			</div>
		</div>
	</body>
</html>