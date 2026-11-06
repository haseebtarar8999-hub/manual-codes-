<?php
$update = array(10,20,30,40,50);

$size = 5;
$position = 2;
$newvalue = 33;
for($i = 0; $i < $size; $i++){
    if($position >=0 && $position<$size)
        $update[$position] = $newvalue;
}

for($i = 0;$i < $size; $i++){
    echo $update[$i]."<br>";
}

echo "<pre>";