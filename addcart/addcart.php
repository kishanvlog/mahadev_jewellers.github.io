<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	cursive ; " >Mahadev jewellers shopping_cart</h1>
	<div class="row">
	<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'shopping_cart');
		$q="SELECT *  FROM  shopping_cart  order by 'id' ASC";
		$result=mysqli_query($con,$q);
		$num=mysqli_num_rows($result);
		if($num > 0)
		{
			while($product = mysqli_fetch_array($result))
			{
			?>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<form>
					<div class="card">
						<h6 class="card-title bg-info text-white p-2 text-uppercase text-center">
						<?php 
						echo $product['name'];
						?>	
						</h6>
						<div class="card-body">
							<img src="<?php echo $product['image']; ?>" alt="phone" class="img-fluid mb-2" />
							<h6 class="card-title">&#8377;<?php echo $product['price'];?>
								<span>(<?php echo $product['discount'];?>%off)</span>	
							</h6>
							<h6 class="badge badge-success">4.4<i class="fa fa-star"></i></h6>
							<input type="text" name="" class="form-control" 
							placeholder="Quantity" />
							
						</div>
						<div class="btn-group d-flex">
							<button class="btn btn-success flex-fill">Add To Cart</button>
							<button class="btn btn-warning text-white">Buy Now</button>
						</div>
					</div>

				</form>
				
			</div>
			<?php
			}
		}

	?>
</div>

</body>

</html>