<?php 

# loops in PHP
# for loop
for ($i = 1; $i <= 10; $i++) {
    echo "Iteration number: " . $i . "\n";
}

# while loop
$i = 1;
while ($i <= 10) {
    echo "While loop iteration: " . $i . "\n";
    $i++;
}

# foreach loop
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: " . $fruit . "\n";
}

?>