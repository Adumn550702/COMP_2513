<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H") - 4;
echo "It is ", $t , " o'clock. <br>";

if ($t <  "12") {
     echo "Have a good morning!";
//} elseif ($t <  "18") {
//     echo "Have a good day!";
} else {
     echo "Have a good night!";
}
?>
  
</body>
</html>