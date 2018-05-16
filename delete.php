<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM Inventory WHERE productID = :productID");
	$result->bindParam(':productID', $id);
	$result->execute();
	header("location: inventory.php");
?>