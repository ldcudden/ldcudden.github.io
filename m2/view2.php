<?php



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Business Site</title>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

   <?php require_once 'header.php'; ?>

    <main>
          <h1>
            <?php 
            if (isset($_GET['product'], $_GET['quantity'], $_GET['nothing'], $_GET['os'])) {
  $op_sys = $_GET['product'];
  $quants = $_GET['quantity'];
  $empty = $_GET['nothing'];
  $brand = $_GET['os'];

  if (($brand == 'Mac') && ($quants <= 7)) {
     echo "You have ordered " . $quants  . " " . $brand . "(s).";
  } else {
  echo 'wrong';
}
             ?>
        </h1> 
    </main>

    <?php require_once 'footer.php'; ?>

</body>
</html>
