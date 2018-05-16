<link rel="stylesheet" type="text/css" href="inventory.css">


<?php
	include("connect.php");
	session_start();
	if (empty($_SESSION['userinput']) && empty($_SESSION['userpass']))
	{
		header('Location: login.php');
		exit;
	}
	
	if(($db_user != $_SESSION['userinput']) || ($db_pass != $_SESSION['userpass']))
	{
		header('Location: login.php');
		exit;
	}

	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM Inventory WHERE productID = :productID");
	$result->bindParam(':productID', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		?>
		<form class="edit" action="edit.php" method="POST">
			<input type="hidden" name="productID" value="<?php echo $id; ?>" />
			
			Brand Name<br>
			<input type="text" name="brandName" value="<?php echo $row['brandName']; ?>" /><br>
			
			Product Name<br>
			<input type="text" name="productName" value="<?php echo $row['productName']; ?>" /><br>
			
			Category<br>
			<input type="text" name="category" value="<?php echo $row['category']; ?>" /><br>
			
			Price<br>
			<input type="text" name="price" value="<?php echo $row['price']; ?>" /><br>
			
			Picture<br>
			<input type="file" name="picture" value="<img src="Pictures/products/<?php echo $row['picture'] ?> width="100" height="75";>"
			
			<input type="submit" value="Save" />
		</form>
	<?php } ?>