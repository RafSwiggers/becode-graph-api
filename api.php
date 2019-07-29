<?php
$array = array();
echo "Hello world \n";
for ($x = 0; $x <= 10; $x++) {
    array_push($array, rand(0, 100));
};
echo json_encode(($array));