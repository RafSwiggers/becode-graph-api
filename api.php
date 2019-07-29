<?php
$array = array();
echo "Hello world";
for ($x = 0; $x <= 10; $x++) {
    array_push($array, rand());
};
echo $array;