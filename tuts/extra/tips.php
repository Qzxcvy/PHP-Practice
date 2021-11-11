//comment in php
//echo to print
//define('NAME', 'Yoshi'); //constant and unmutable
//$name = 'Yoshi'; // normal variable
//$age = 30;
// $stringOne = 'my email is ';
// $stringTwo = 'rogue@soulknife.co.dnd';
//echo $stringOne.$stringTwo;
//echo "My age is not $age";  VARIABLE INTERPALATION -- ONLY W/Double Quotes
//"jkjkjb \"yikes\" "

//echo...
//strlen(); sting length
//strtoupper(); Upper case
//strtolower(); Lower case
//str_replace('letter you want replaced', 'new letter', $variable); //replace letters

//order of operations (B I D M A S)
//echo 8 / 4 * 2 + 6 * 6 / 3 ; //NOT m = 5, YES d =16

//$num = 3;
//$number = 5.68;
//echo floor($number);
//echo ceil($number);

//indexed arrays
// $peopleOne = ['jess', 'ck', 'marv'];
// echo $peopleOne[1];

// $peopleTwo = array('em', 'marsh');
// echo $peopleTwo[1];
//print_r($peopleTwo); //print entire array
//$peopleTwo[] = 'vania'; or array_push($peopleOne, 'kat'); //will add to end
//$array3 = array_merge($peopleOne, $peopleTwo);


//associative arrays
// $ninjaOne = ['shaun' => 'black', 'mario'=>'orange', 'luigi'=>'brown'];


// //multi-dimensional Arrays
$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5]
];

//loops :  for && foreach && while
// '<br />' break statement

// foreach($products as $product){
//     echo $product['name'].' - '. $product['price'];
//     echo '<br />';
// }

// echo 5 == 5 //loose comparison
// echo 5 === 5 //strict comparison (even data types match)

//FUNCTIONS
// function sayHello(){
//     echo "Good Morning";
// }

// function sayGoodbye($name){
// echo "Goodbye $name";
// }

// sayHello();
// sayGoodbye("Batman");

function formatProduct($product){
    //echo "{product['name']}" <br ?>;
return "{$product['name']} costs to buy <br ?>
}


$formatted = formatProduct(['name'=>'gold star', 'price' => 20]);
echo $formatted

include('ninjas.php'); //will continue code -- works with or without parenthesis
require('ninjas.php'); //will NOT continue code -- works with or without parenthesis

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Pizza</title>
</head>
<body>
    <!-- <h1> User Profile Page </h1> -->
    <!-- <div><//?php echo NAME ?></div>
    <div><//?php echo $age ?></div> -->

    <!-- <?php foreach($products as $product){ ?>
        <h3><?php echo $product['name']; ?></h3>
        <p>$<?php echo $product['price']; ?></p>

    <?php } ?> -->
</body>
</html>