<?php
$sort = array(5,3,8,1,6);

$size = 5;

for($i = 0; $i < $size - 1; $i++){
    for($j = 0; $j < $size - 1;$j++ ){
        if($sort[$j] > $sort[$j+1]){
            $temp = $sort[$j];
            $sort[$j] = $sort[$j+1];
            $sort[$j+1] = $temp;
        }
    }
}

for($i = 0;$i < $size; $i++){
    echo $sort[$i]."<br>";
}


echo "<pre>";