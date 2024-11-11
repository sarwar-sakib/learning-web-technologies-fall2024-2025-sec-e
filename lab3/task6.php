<?php


$arr = [12, 40, 90, 5, 80, 4];
$element = 90;
$flag = false;

for ($i=0; $i<count($arr); $i++){
    if ($arr[$i]==$element){
        echo "$arr[$i] found at index $i";
        $flag = true;
        break;
    }
}
    if(!$flag)
    echo "not found";


?>