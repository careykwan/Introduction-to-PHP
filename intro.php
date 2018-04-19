<?php
/* these are some basic php code*/
// $currentdate=date("M j, Y g:i:s a");
// $cd=date("d/m/y");
// $printvalue=print ("Good Afternoon, Current date is $currentdate");
// echo "<br> Hello $cd<br>";
// print "Good Afternoon, Current date is $currentdate";
// echo "<br>$printvalue <br>";
// echo  4+5 . "<br>";
// $a=5;
// $b=8;
// echo $a + $b;
// echo "<br>". 'This is a single quote, which is like a string <br>';

// $var1=6;
// $var2=7.9;
// $var3=$var1+$var2;
// $name="carey";
// echo "the sum of $var3 <br>";
// echo gettype($name) . "<br>";
// settype($var1, "float");
// echo gettype($var2) . "<br>";
// echo intval($var2) . "<br>";
// echo $var1/$var2 . "<br>";
// echo $var1%$var2 . "<br>";

/* This is a php if else statement*/

// $per1=56;
// $per2=70;

// if ($per1 > $per2) {
// 	echo "Person 1 is older than person 2";
// }else{
// 	echo "Person 2 is older than person 1";
// }

// $per1=14;
// $per2=50;
// $per3=56;

// if ($per1 > $per2 && $per1 > $per3) {
// 	echo "person one is older than person 2 and person 3";
// }else if ($per2 > $per1 && $per2 > $per3) {
// 	echo "person2 is older than person 1 and person 2";
// }else {
// 	echo "person 3 is older than person 1 and person 2";

// }

// $txt="racecar";

// if ($txt == strrev($txt)) {
// 	echo "This is a pallendrome<br>";
// }else{
// 	echo "not pallendrome";
// }

// echo var_dump($txt);
// echo "<br>";
// for ($i=0; $i<=5; $i++){
// 	for ($j=0; $j<=3; $j++){
// 		echo "$i,$j<br>";
// 	}
// }

/* this is a php array, slightly different to js*/
// $mark = array(14,15,16,50,70,80);

// foreach ($mark as $item) {
//   echo "$item\n";
//   $mark[] = $item;
// }

/* This is a loop to display something over and over again*/
// for ($i = 0; $i < 50; $i++){
// 	for ($j = 0; $j <= $i; $j++){
// 		echo "CK\t";
// 	}
// 	echo "<br>";
// }

/*sdl*/
// $x = 4;
// $y = 3;
// $p = ($x > $y)? $x : $y;
// echo $p;
// the options are given below.
// 1. Open the file
// 2. Close the file
// 3. Save the file
// 4. Logout
// 5. Choose the option

// a) Use if structure and evaluate the options to produce a suitable message.
// b) use switch structure and produce the similar result

// $variable = array(65,73, 45);

// echo $variable[1];
/* different way of displaying the array*/

// for($i = 0; $i < 3; $i++){
// 	echo $variable[$i] . "<br>";
// }

// echo "<br>";
// print_r($variable);
// echo "<br>";
// foreach ($variable as $v)
// 	echo $v. "<br>";

// $n = array(23,4,69,60,9);
/* array of strings*/
$n = array("zico","honna","becca","ruzzy","abba");

/* loop to sort an array accending*/
// for ($i = 0; $i > 5; $i++){

// 	for ($j = $i; $j > 5; $j++){

// 		if ($n[$i] > $n[$j]){

// 			$temp = $n[$i];

// 			$n[$i] = $n[$j];

// 			$n[$j] = $temp;
// 		}
// 	}
// }

// print_r($n);

// $stud = array(
// 			array(
// 				"name" => "Smith",
// 				"mod1" => 87,
// 				"mod2" => 77
// 				),
// 			array(
// 				"name" => "Josh",
// 				"mod1" => 67,
// 				"mod2" => 84
// 				),
// 			);
// print_r($stud);
// echo "<br>";
// echo $stud[1][name];
// 	foreach ($stud as $s){
// 		foreach ($s as $key => $value){
// 			echo "<pre> key is $key \t", "value is $value \n </pre>";
// 	}
// }

date_default_timezone_set('Etc/GMT+12');
$time = date("g:i a");
$leap = date("L");


echo "The current time is:" . $time . "<br>";


if ($time >= 5 && $time <= 11.59) {
	echo "Good morning";

}elseif ($time >= 12 && $time <= 17) {
	echo "Good Afternoon";

}elseif ($time >= 17.01 && $time <= 23.59) {
	echo "Good Evening";
	
}else {
	echo "Good Night";
}

if ($leap == 0) {
	echo "<br> It is not a leap year";
}else {
	echo "<br> It is a leap year";
}
	
?>