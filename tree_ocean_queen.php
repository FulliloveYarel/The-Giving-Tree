<?php

//Define variables
$leaves = 20;
$apples = 4;
$trunk = 20;
$age = 0;


//The Giving Tree
echo "Once upon a time there was a tree... ";

//The tree begins to grow
for ($age = 0; $age < 15; $age++) { 
    $leaves = $leaves + 10;
    $trunk = $trunk + 2;
    echo "The tree grew older and more beautiful, with $leaves leaves and a trunk $trunk inches in diameter.";
} 

//The tree begins to give
for ($age = 15; $age < 50; $age++) { 
    $apples = $apples + 4;
    echo "The tree gave her apples to many children, blessing them with $apples apples.";
} 

//The tree is now old
for ($age = 50; $age < 150; $age++) { 
    $leaves = $leaves - 5;
    $trunk = $trunk - 1;
    echo "The tree was now very old, with only $leaves leaves and a trunk $trunk inches in diameter.";
} 

//The tree is now a stump
echo "The tree was now just a stump, but she was still happy.";

?>