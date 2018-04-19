<?php

// $r = $_POST["radius"];
// $d = 2*$r;
// $area = 3.14 * $r * $r;
// $circum = 2 * 3.14 * $r;

// echo "Given Radius=$r\n";
// echo "Diameter=$d\n";
// echo "Area of the cicle = $area\n";
// echo "Circumference of the circle = $circum\n";

$first = $_POST["nameFirst"];
$last = $_POST["nameLast"];
$address = $_POST["address"];
$email = $_POST["email"];
date_default_timezone_set('Etc/GMT+12');
$time = $_POST["timezone"];
$leap = date("L");

echo $first;
echo "<br> $last";
echo "<br> $address";
echo "<br> $email <br>";
echo $_POST["result"];

if (!empty($_POST["place"])) {
	foreach ($_POST["place"] as $check) {
		echo "<br> $check <br>";
	}

}else {
	echo "please enter place\n";
}





// if ($time >= 5 && $time <= 11.59) {
// 	echo "<br> Good morning";

// }elseif ($time >= 12 && $time <= 17) {
// 	echo "<br> Good Afternoon";

// }elseif ($time >= 17.01 && $time <= 23.59) {
// 	echo "<br> Good Evening";
	
// }else {
// 	echo "<br> Good Night";
// }

// if ($leap == 0) {
// 	echo "<br> It is not a leap year";
// }else {
// 	echo "<br> It is a leap year";
// }


?>