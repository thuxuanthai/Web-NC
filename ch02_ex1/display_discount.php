<?php
$product_description= filter_input(INPUT_POST, 'product_description');
$list_price=filter_input(INPUT_POST, 'list_price');
$discount_percent=filter_input(INPUT_POST, 'discount_percent');

$discount=$list_price*$discount_percent*.01;
$discount_price=$list_price-$discount;

$list_price_f="$".number_format($list_price,2);
$discount_percent_f=$discount_percent."%";
$discount_f="$".number_format($discount,2);
$discount_price_f="$".number_format($discount_price,2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><b><?php echo htmlspecialchars($product_description); ?></b></span><br>

        <label>List Price:</label>
        <span><b><?php echo htmlspecialchars($list_price_f); ?></b></span><br>

        <label>Standard Discount:</label>
        <span><b><?php echo htmlspecialchars($discount_percent_f); ?></b></span><br>

        <label>Discount Amount:</label>
        <span><b><?php echo $discount_f; ?></b></span><br>

        <label>Discount Price:</label>
        <span><b><?php echo $discount_price_f; ?></b></span><br>
    </main>
</body>
</html>