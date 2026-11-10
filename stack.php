
<?php

echo "<pre>";

$stack = [];
$top = -1;

$stack[$top] = 5;
$top++;
$stack[$top] = 10;
$top++;
$stack[$top] = 15;
$top++;
$stack[$top] = 20;
$top++;
$stack[$top] = 25;
$top++;
$stack[$top] = 30;
$top++;


echo "Stack after PUSH operations";

for ($i = $top-1; $i >= 0; $i--) {
    echo $stack[$i] ."<br>";
}


echo "POP Operations";
echo "<pre>";
echo "Removed: " . $stack[$top-1] . "\n";
$top--;

echo "Removed: " . $stack[$top-1] . "\n";
$top--;


echo "PEEK Operation:";
echo "<pre>";
if ($top == -1) {
    echo "Stack is empty";
} else {
    echo "Top element: " . $stack[$top-1] . "\n";
}

echo "\nRemaining Stack Elements:\n";

for ($i = $top-1; $i >= 0; $i--) {
    echo $stack[$i] . "\n";
}

