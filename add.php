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

if(isset($_POST['addbtn']))
{
	try
	{
		include('connect.php');
		$stmt = $db->prepare("INSERT INTO Inventory(brandName,productName,category,price,picture) VALUES(:brandName,:productName,:category,:price, :picture)");
		$stmt->execute(array("brandName" => $_POST['brandName'], "productName" => $_POST['productName'],"category" => $_POST['category'], "price" => $_POST['price'], "picture" => $_POST['picture']));
		echo "Product Added";
	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
	}
}
?>

<link rel="stylesheet" type="text/css" href="inventory.css">

<style>
	.view{
		margin-left: 10rem;
	}
</style>

<form method="post" action="">
	
	<h3>Add Product Information</h3>
	<table>
			<tr>
				<td>Brand Name</td>
				<td><input type="text" name="brandName" /></td>
			</tr>
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="productName" /></td>
			</tr>
			<tr>
				<td>Category</td>
				<td><input type="text" name="category" /></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" /></td>
			</tr>
			<tr>
				<td>Picture</td>
				<td><input type="file" name="picture" id="picture"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="addbtn" value="Add Product" /></td>
			</tr>
			<tr>
							<td colspan="2" align="center">
								<?php
								if(isset($_REQUEST['submit']))
								{
									include('connect.php');
									
									$iname=$_POST['picture'];
									$file=$_FILES['file']['name'];
									$size=$_FILES['file']['size'];
									
									if(empty($iname))
									{
										echo "<label class='err'> All Fields are required</label>";
									}
									
									elseif($size > 500000)
									{
										echo "<label class='err'> Image size must not be greater than 500kb</label>";
									}
									
									//Store the allowed extenstion in an array
									$allowedExts = array("jpeg", "jpg", "png");
									
									//using explode() function, separate the "File Name" and its "extension" into individual element of an array: $temp
									$temp = explode(".", $_FILES['file']['name']);
									
									//The end() function returns the last element of an array. As per array $temp, First Element: File Name; Last Name: Extension
									$extension = end($temp);
								
								//Checking the file type (extension)
								
									if((($_FILES['file']['type'] == 'image/jpeg')
									   || ($_FILES['file']['type'] == 'image/jpg')
									   || ($_FILES['file']['type'] == 'image/png'))
									   && ($_FILES['file']['size'] <= 500000)
									   && in_array($extension, $allowedExts))

										//The in_array() searches for a specific value in an array. Here, searches for $extension value in $allowedExts array
									{
										//If File is of allowed extension type, then further validation for file are processed
										if ($_FILES['file']['error'] > 0){
											echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
									}

									elseif (file_exists("Pictures/products". $_FILES['file']['name']))
									{
										echo $_FILES['file']['name']. "Picture already exist" ;
									}

									else
									{
										move_uploaded_file($_FILES['file']['tmp_name'], "upload/". $_FILES['file']['name']);

										mysqli_query($con, "INSERT INTO Inventory (picture) VALUES ('$picture' )");

										echo "Picture Uploaded!";
									}
								}
								
								mysqli_close($con);
								}
								?>
	</table>
</form>

<a href="inventory.php" class="view">View Inventory</a><br/>