<?php

$dsn="mysql:dbname=Clothing";
$username="root";
$password="root";

	try {
		$conn= new PDO($dsn,$username,$password);
		$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
		echo "connection failed:" . $e->getMessage();
		}

		$sql="SELECT Item.Id, Item.Name,Stock.Quantity,Stock.Date FROM `Item`,Stock WHERE Item.Id=Stock.Id;";
		echo "<ul>";


	try {
		$rows=$conn->query($sql);

		foreach ($rows as $row) {
			echo "<li>" . "Id: " . $row["Id"] . ", " . $row["Name"] . " " . $row["Quantity"] . " " . $row["Date"] . "</li>";
		}
	} catch (PDOException $e) {
		echo "Query failed: " . $e->getMessage();
	}
		
	echo "</ul>";
	$conn=null;


?>