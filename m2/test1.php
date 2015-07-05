<?php 

$text = 'Boot';
$text = $text . 'camp';

$text .= 'camp';


$x = 4;
$x = $x +4;

$x += 1;

$x++;

$myString = "brad & daniel";

echo strlen($myString);
echo substr($myString, 0, 4);
echo ucwords($myString);
echo htmlentities(ucwords($myString));



$name = $_GET['name'];
$gender = $_GET['gender'];

if ($gender == 'male') {
    echo "Hello, Mr. $name";
} else {
    echo "Hello, Ms. $name";
}
//---------------------------------------------

$temp = $_GET['temp'];
$coast = $_GET['coast'];


if ($temp == 'hot') {
    if ($coast == 'west') {
        echo "You should live in AZ.";
    } else {
         echo "You should live in FL.";
    }
} else {
    if ($coast == 'east') {
        echo "You should live in ME.";
    } else {
        echo "You should live in CO.";
    }
}


$empty = array('east', 'south', 'west', 'north');
$empty = ['east', 'south', 'west', 'north'];

$me = ['fname' => 'Lynne', 'lname' => 'Cudden'];

$empty[] = 'sw';

$me['mname'] = 'Denise'; 

print_r($empty);

echo count($empty);


//----------------------------------------------------



$num = [5, 8, 12, 4];

for ($i = 0; $i < count($num); $i++) {
    echo $num[$i];
}



$i = 0;

while ($num[$i] != 12 ) {
    echo $num[$i];
    $i++;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <div class="container">
       <div class="float">I float</div>
       <div class="content">I have content</div>
   </div>

   <div class="user"></div>
   <div class="user selected"></div>
   <div class="user"></div>
.user.selected {}
.user:not(.selected) {}
</body>
</html>