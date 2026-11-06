<?php
$search = array(20,34,56,7,8,3,88,22,1,9);

$size = 10;
$value = 7;
$found = false;

for($i = 0; $i < $size; $i++){
    if($search[$i] == $value){
        echo "is in the array at indexx"." ".$i;
        
        $found = true;
        break;
    }
}
if($found==false){
    echo "the value is not in the array";
}
echo "<pre>";