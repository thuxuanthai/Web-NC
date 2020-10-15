<?php 


if(isset($_GET['id'])){
	$id=$_GET['id'];
	// UPDATE RATING
	if(isset($_POST['rate_submit'])){
		if(isset($_POST['rate'])){
			$rate = $_POST['rate'];
			setRatingInfo($id, $rate);
		}
	}

	$html = getProduct($id);
	include("template/view-product.php");
}else{
	$html = listProduct();
	include("template/list-products.php");
}

?>
include("functions.php");
<!DOCTYPE html>
<html>
<head>
	<title>Rating</title>
	<meta charset="utf-8">
	<link href="template/css.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div id="container">
		<header>
			<h1><a href="index.php">COMPUTER ABC</a></h1>
		</header>
		
		<div id="main-wrapper">
			<?php echo $html ?>
		</div>

		<footer>
		</footer>
	</div>
</body>
</html>
