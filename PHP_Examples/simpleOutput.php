<!DOCTYPE html>
<html>
<body>

<?php
$txt1 = "PHP Variables and Printing";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;
$z = $x + $y;

echo "<h2>" , $txt1 , "</h2>";
echo "Study PHP at " , $txt2 , "<br>";
echo "x = " , $x , "<br>";
echo "y = " , $y , "<br>";
echo "x + y = " , $x + $y , "<br>";
echo "z = x + y = " , $z , "<br>";
echo "<br>";

$txt3 = "The rain in Spain falls mainly on the plan <br>";
echo $txt3;
echo "The word count of the above is ..", str_word_count($txt3);

?>

</body>
</html>