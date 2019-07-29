<?php
$array = array();
echo "Hello world \n";
for ($x = 0; $x <= 10; $x++) {
    array_push($array, rand());
};
echo json_encode(($array));