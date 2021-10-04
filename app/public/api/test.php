<?php
$num = 2;
$foo = "To be";
$bar = "or not to be";

echo $foo ."". $bar;
echo"\n";
echo $num * $num * $num;

$arr = [1,2,3,4,5,5,5,6];
$arr2 = [

    "first" => "Tom",
    "Second" => "Bipin",
    "best" => "DS"
];

if (true){

    echo "True \n";
} else {

    echo "FALSE \n";
}

while(true) {

    break;
}

echo "<ul>";
foreach ($arr2 as $key => $val) {
    echo "<li>" .$key. "is".$val. "</li>\n";
   
}
echo "<ul>";
echo json_encode($arr);
echo json_encode(
    $arr2,
    JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
);

// ***
// variable naming
// PHP and JS: variables and functions camelCase
// pascalNames for class names 
// COnstants: UPPER_SNAKE_CASE

// ****