<!DOCTYPE html>
<html>
<body>

<?php 
echo "Global Variables in PHP <br> <br>";

function addition() {
     global $z, $x, $y;
     $z = $x + $y;
}
//function addition() {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
//}
$x = 75;
$y = 25; 
addition();
echo $z,"<br><br>";

echo "Global \$_SERVER values ... <br>";
echo "PHP_SELF: ", $_SERVER['PHP_SELF'];
echo "<br>";
echo "SERVER_NAME: ", $_SERVER['SERVER_NAME'];
echo "<br>";
echo "HTTP_HOST: ", $_SERVER['HTTP_HOST'];
echo "<br>";
echo "HTTP_REFERER: ", $_SERVER['HTTP_REFERER'];
echo "<br>";
echo "HTTP_USER_AGENT: ", $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "PSCRIPT_NAME: ", $_SERVER['SCRIPT_NAME'];
?>

</body>
</html>