<?php
$array = array();
for ($x = 0; $x <= $_GET["numbers"]? : 5; $x++) {
    array_push($array, array(rand($x, 100), rand(0, 100)));
};
echo json_encode(($array));

?>