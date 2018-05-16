<html>
<body>
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
	
	?>
	<p><a href="add.php"><input type="button" name="add" value="Add New Product"</a></p>
	<p><a class="logout" href="logout.php"><input type="button" name="logout" value="Log Out"></a></p>
		
		<table border="1" cellspacing="0" cellpadding="4">
				<thead>
					<tr>
						<th>Brand Name</th>
						<th>Product Name</th>
						<th>Category</th>
						<th>Price</th>
						<th>Picture</th>
					</tr>
				</thead>
			<tbody>
				<?php include('connect.php');
				$result = $db->prepare("SELECT * FROM Inventory ORDER BY productID DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++)
				{ ?>
					<tr class="record">
						<td><?php echo $row['brandName']; ?></td>
						<td><?php echo $row['productName']; ?></td>
						<td><?php echo $row['category']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><img src="Pictures/products/<?php echo $row['picture'] ?> "width="100" height="75";></td>
						<td><a href="editform.php?id=<?php echo $row['productID']; ?>"><input type="button" value="Edit"></a> &nbsp;&nbsp;| &nbsp; <a href="delete.php?id=<?php echo $row['productID']; ?>"><input type="button" value="Delete"></a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<br/>
		<br/>
	
</body>	

</html>