<!DOCTYPE html>
<html>
<head>
	<title>Add To cart</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bs4/bootstrap.min.css">
		<script src="bs4/jquery-3.4.1.min.js"></script>
		<script src="bs4/popper.min.js"></script>
		<script src="bs4/bootstrap.min.js"></script>
		<link rel="stylesheet" href="bs4/font-awesome.min.css">
</head>
<body class="container">
	<h1 class="text-center text-danger mb-5 " style="font-family: 'Abril Fatface" ,
	cursive ; " >Online Shopping cart Mysql php</h1>
	<div class="row">
		<?php
			$con=mysql_connect('localhost','root');
			mysql_select_db('shopping_cart',$con);
			$q="SELECT * FROM  shopping_cart ";
			$result=mysql_query($q,$con);
			if($result)
			{
				echo "success";
			}
			else
			{
				echo "not success";
		    }
			
		?>
	</div>
			
</body>
</html>