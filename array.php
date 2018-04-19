<?php
//indexed arrays
$n=array(5,6,3,4);
$name=array("Yoobee", "school","of","design");
echo $n[3] , "<br>";
echo $name[0], "<br>";
print_r($name); //prints the array


//associative array -refered by string index
$car=array ("make"=> "BMW",
			"year"=> "2010"); //declaring and initializing associative array
echo $car[make],"\t",$car[year],"<br>";//displays the element by string index
print_r($car); //displays the entire array 
echo "<br>",count($name),  "<br>"; //displays the number of elements
/*
current() Returns the value of the current element pointed to by the pointer, without
changing the pointer position.
key() Returns the index of the current element pointed to by the pointer, without
changing the pointer position.
next() Moves the pointer forward to the next element, and returns that element’s value.
prev() Moves the pointer backward to the previous element, and returns that element’s value.
end() Moves the pointer to the last element in the array, and returns that element’s value.
reset() Moves the pointer to the first element in the array, and returns that element’s value.
*/
// displaying the array with foreach
foreach ($name as $nam){
	echo $nam . "<br>";
}
//multidimensional array
$stud=array(); //declaring
$stud=array(
			array(
				"mod1"=> 56,
				"mod2"=> 64
				),
			array(
				"mod1"=>45,
				"mod2"=>66
				),
			);
// displaying keys and values
foreach ($stud as $s) {
	foreach ($s as $key => $value){
		echo "<pre>key is $key \t" , "value is $value\n </pre>";
	}
}
print_r ($stud[1]); //prints the marks of first student as 45,66
echo "<br>";
print_r($stud[1]["mod2"]); //prints the mark of student 1 mod2 as 66
foreach ($stud as $key=>$value){
	echo "<dt> $key </dt>";
	echo "<dd> $value </dd>";
}
//another way of storing values
$mark=array();
$mark["mod1"]=78;
$mark["mod2"]=56;
echo $mark[mod1],"\t",$mark[mod2], "<br>";
$store_mark=print_r($mark,true); //storing marks array as string and not printing 
echo $store_mark . "<br>";

?>