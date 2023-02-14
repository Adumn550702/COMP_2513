<!DOCTYPE html>
<html>
<body>

<?php
function setHeight($minheight = 50) {
     echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();  //use of dummy value for input variable
setHeight(135);
setHeight(80);

function sum($x = 100, $y = 100) {
     $z = $x + $y;
     return $z;
}

echo "<br>";
$x = 20;
$y = 5;
//$z= sum($x,$y);  // The variables with the function are local
$z= sum($x,$y);
echo "z = " . $z . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4) . "<br>";

?>

</body>
</html>