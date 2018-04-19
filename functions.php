<?php
// echo "Hello<br>";

// function myFunction(){
// 	global $name;
// 	$name = "Yoobee";

// 	echo "Hello this is a php function";

// 	echo "<br>This is being called inside the function" . $name;
// }
// myFunction();

// echo "<br>this is being called outside of the function using the global keyword inside the function" . $name;

// $x = 5;

// function anotherFunction(){
// 	global $x;
// 	echo "<br>", $x, "<br>";
// 	++$x;
// }

// anotherFunction();
// echo "the new value of the variable is now $x <br>";

// function staticFunction(){
// 	static $n = 0;
// 	echo "the value of the variable is $n<br>";
// 	++$n;
// }

// staticFunction();
// staticFunction();
// staticFunction();
// staticFunction();
// staticFunction();
// staticFunction();


// $n = 5;

// function fact($f){
// 	if ($f<2) {
// 		return 1;
// 	}else{
// 		return ($f*fact($f-1));
// 	}
// }


// $x = fact($n);
// echo "The factorial of $n is $x";
/*this is the code to show errors in php files*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $bankAccount = 100;
// echo "Current balance:" . $bankAccount . "<br>";

// function deposit($money){
//  	global $bankAccount;
// 	// $money = 45;
// 	// echo "$d has been deposited <br>";
// 	$bankAccount = $bankAccount + $money;
// 	echo "New balance is $bankAccount <br>";

// }


// deposit(55);

// function withdraw($money){
// 	global $bankAccount;
// 	$bankAccount = $bankAccount - $money;
// 	echo "New balance is $bankAccount";

// }

// withdraw(5);

// hello("");
// br();
// br();
// hello("Yoobee");
// br();
// hellostyle("Helvetica", 2);
// br();
// hellostyle("Times", 3);
// br();
// hellostyle("Courier", 1.5);
// br();
// function hello($name){
// 	echo "Hello $name"; //local variable
// }
// function br(){
// 	echo "<br>";
// }
// function hellostyle($font, $size){
// echo "<p style=\"font-family:$font; font-size:{$size}em;\">  Hello Yoobee </p> ";	
// }
/*function makeBold($text){
	return "<b> $text </b>";
	}
	$normalText = "This is normal text.";
$boldText = makeBold("This is bold text.");
echo "<p> $normalText </p> ";
echo "<p> $boldText </p> ";
*/

class Student{
	public $name; //can be accessed anywhere in the script
	public $age; //can be accessed anywhere in the script
	}
$student1=new Student;
$student1->name="Peter";
$student1->age=23;
print_r($student1);
echo "<pre> $student1->name \t $student1->age\n</pre>";

$student2=new Student;
$student2->name="Sam";
$student2->age=27;
echo "<pre> $student2->name \t $student2->age\n</pre>";

$student3=new Student;
$student3->name="Jesus";
$student3->age=17;
echo "<pre> $student3->name \t $student3->age\n</pre>";

?>