<?php

require_once 'products.php';

if (isset($_GET['product']) && $_GET['product'] >= 0 && is_numeric($_GET['product'])) {
    $product = $_GET['product'];

// } elseif (!isset$_GET['product']) {
//     $product = $_GET['product'];
//     $quantity = $_GET['quantity'];
//     $output = "Please select a product.";
// echo $product;
} else {

    exit ('product is invalid');
}

if (isset($_GET['quantity']) && is_numeric($_GET['quantity']) && $_GET['quantity'] > 0){
    $quantity = $_GET['quantity'];

} else {

    exit ('there is a problem 2');
}

if (array_key_exists($product, $items)) {
    if (($quantity > 7) && ($items[$product] == "Mac")) {
        $output = "You cannot order more than 7 $items[$product](s)";
    } else {
        $output = "You have ordered $quantity $items[$product](s).";
    }
} else {

    $output = "Your selection is not valid.";

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Business Site - View Page</title>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php require_once 'header.php'; ?>

    <main>
      <h1>
        <?php echo $output;?>
      </h1> 
    </main>

    <?php require_once 'footer.php'; ?>

</body>
</html>
