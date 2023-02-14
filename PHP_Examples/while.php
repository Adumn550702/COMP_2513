<!DOCTYPE html>
<html>
<body>

<?php 
$x = 1;

echo "For loop <br>";
for ($x = 0; $x <= 3; $x++) {
   echo "The number is: $x <br>";
}

echo "<br> Foreach loop <br>";
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) {
    echo "$value <br>";
}

$x = 1;
echo "<br> While loop <br>";
while($x <= 4) {
   echo "The number is: $x <br>";
   $x++;
} 

echo "<br> Do-While loop will execute at leat once, because test is at bottom<br>";
do {
     echo "The number is: $x <br>";
     $x--;
} while ($x > 10);

echo "<br> Do-While loop <br>";
do {
     echo "The number is: $x <br>";
     $x--;
} while ($x > 0);

?>

</body>
</html>