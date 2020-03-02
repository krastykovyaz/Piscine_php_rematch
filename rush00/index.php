<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>shopping cart</title>
		<script src="Storage.js"></script>
		<link rel="stylesheet" href="StorageStyle.css">
		<style>
			/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 500px) {
			.column {
				width: 100%;
			}
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body onload="doShowAll()"; bgcolor="grey">
		<h1 style="font-family: Arial;
					text-align: center;
					text-shadow: 2px 1px #BDB8B8;">Online store</h1>
					<div class="user" style="vertical-align: middle;">User:<span><b style="color:black"> <?php echo $_SESSION['loggued_on_user']; ?></b></span></div>
		<center><div class="head" style="height: 28.5px">
				<a href="index.html" target="_blank" 
				style="font-family: Courier New">Going back to registration</a>

				
			<a href="basket.html" target="_blank">
				<img src= "img/basket.png";
					style="float:left;
					width:24px;
					height:24px;"></a>
					<span><a href="logout.php" target="_blank" onclick="ClearAll()">
				<img src= "img/logout.png";
					style="float:right;
					top: 10%;
					width:27px;
					height:27px;"></a></span>
		</div></center>
		<div class="bas">Basket
		
		</div>
		<div class="user" style="position: absolute;right: 1%;">LogOut</div>
		<div class="w3-row-padding">
  <div class="w3-third">
    <img src="img/helmet.png" style="width:97%">
	<p style="color: #BCBBBB;">Los Angeles Kings Helmet</p>
		<p style="font-family: Courier New">Article: 1</p>
		<p style="font-family: Courier New">Price: 50$</p>
		
  </div>
  <div class="w3-third">
    <img src="img/hoodie.png" style="width:80%">
	<p style="color: #BCBBBB;">Anaheim Ducks Hoodie</p>
		<p style="font-family: Courier New">Article: 2</p>
		<p style="font-family: Courier New">Price: 20$</p>
		
  </div>
  <div class="w3-third">
    <img src="img/jersey.png" style="width:80%">
	<p style="color: #BCBBBB;">Vegas Golden Nights Jersey</p>
		<p style="font-family: Courier New">Article: 3</p>
		<p style="font-family: Courier New">Price: 33$</p>
		
  </div>
</div>
<div class="head">

<form action="" style="text-align:center"; method="POST"; name="ShoppingList">
		
		<select type="text" name="name">
		<option value="Helmet, M">Helmet, M</option>
		<option value="Helmet, L">Helmet, L</option>
		<option value="Hoodie, S">Hoodie, S</option>
		<option value="Hoodie, M">Hoodie, M</option>
		<option value="Hoodie, L">Hoodie, L</option>
		<option value="Jersey, S">Jersey, S</option>
		<option value="Jersey, M">Jersey, M</option>
		<option value="Jersey, L">Jersey, L</option>
		</select>
		<input type="text" name="data" style="width:30%" placeholder="quantity" value=""/>
		<input type="submit" value="Save"   onclick="SaveItem()"/>
		</form>
</div>

</html>