<?php
$array = array();

if($_GET["numbers"] === null){
    for ($x = 0; $x <= 5; $x++) {
        array_push($array, array(rand($x, 100), rand(0, 100)));
    };
} else {
    for ($x = 0; $x <= $_GET["numbers"]; $x++) {
        array_push($array, array(rand($x, 100), rand(0, 100)));
    };
};

echo json_encode(($array));

?>