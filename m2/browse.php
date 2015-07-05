<?php
                   
require_once 'products.php';

$options = '';

foreach ($items as $item => $os) {
    
    $options .= "<option value='$item'>$os</option>";
}
    
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
            Browse Products
        </h1>
        
        <form action="view.php" method="GET">
            Product:

            <select class='selections' name='product'>
                <option disabled value="">Select a product</option>
                <?php echo $options ?>
            </select>

            Quantity:<input class="quantity" type="number" name="quantity" value="1" min="0" max="">

            <input type="submit" value="submit">
            
        </form>

    </main>

    <?php require_once 'footer.php'; ?>
    
</body>
</html>
