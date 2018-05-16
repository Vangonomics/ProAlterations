<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="ProAlterationStyle.css" rel="stylesheet">
<title>Pro Alterations & Suits</title>
</head>

<body>
	<div>
		<a href="index.php"><img id="logo" src="logo.png" alt="logo"></a>
	</div>
	<div class="navbar">
		<ul>
			<li class="nav" id="firstnav"><a href="index.php">Home</a></li>
			<li class="nav"><a href="about.php">About</a></li>
			<li class="nav"><a href="product.php">Product</a></li>
			<li class="nav" id="lastnav"><a href="service.php">Service</a></li>
		</ul>
	</div>
	<div>
		<div class="item">
			<tbody>
				<?php include('connect.php');
				$result = $db->prepare("SELECT * FROM Inventory ORDER BY productID");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++)
				{ ?>
					<tr class="record">
						<td align="center" style="margin: 4rem 4rem 4rem 4rem;"><img src="Pictures/products/<?php echo $row['picture'] ?> "width="200" height="150";></td>
					</tr>
				<?php } ?>
			</tbody>
		</div>
	</div>
	
	<div>
		<footer>
			<p>All rights reserved to Pro Alteration & Suits</p>
				<a class="socialMedia" href="http://www.instagram.com"><img src="Pictures/instagram.png" alt="Instagram" style="height: 3rem; width: 3rem;"></a>
				<a class="socialMedia" href="http://www.twitter.com"><img src="Pictures/twitter.png" alt="Twitter" style="height: 3rem; width: 3rem;"></a>
				<a class="socialMedia" href="http://www.facebook.com"><img src="Pictures/facebook.png" alt="Facebook" style="height: 3rem; width: 3rem;"></a>
		</footer>
	</div>
</body>
</html>