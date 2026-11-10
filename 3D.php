<?php

$names = [
   [
     ["a","b","c"],
    ["aa","bb","cc"]
   ],
   [
    ["d","e","f"],
    ["dd","ee","ff"]
   ]
];

for($i = 0;$i < 2;$i++){
    for($j = 0;$j < 2;$j++){
        for($k = 0;$k < 4;$k++){
          if(isset($names[$i][$j][$k])){
            echo $names[$i][$j][$k]."<br>";
          }
           
        }
    }
}
