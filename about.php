<html>
	
	<head>

		<title>boot strap example</title>

		 <meta charset="utf-8"> 

		 <meta name="viewport" content="width=device-width, initial-scale=1">

				 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
		<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="bs4/bootstrap.min.css">

		 <style>
		 	*
		 	{
		 		margin:0;
		 		padding: 0;
		 		font-family: 'Josefin Sans', sans-serif;
		 	}
		 	
		 </style>

	</head>

<body>

	<header>
		
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="about.html">Mahadev Jewellers</a>

 		 <button class="navbar-toggler" type="button" data-toggle="collapse" 
 		 data-target="#navbarSupportedContent" 	aria-controls="navbarSupportedContent" 
 		 aria-expanded="false" 
 		 aria-label="Toggle navigation">

   		 <span class="navbar-toggler-icon"></span>

 	 </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">

        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="about.php">About</a>

      </li>



      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" 
        	data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           our Collection    </a>
		   
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		
          <a class="dropdown-item" href=" addcart/addcart.php ">Gold_item</a>

          <a class="dropdown-item" href=" addcart/dcart.php ">Diamond_items</a>

          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href=" addcart/scart.php ">Silver_items</a>

        </div>

      </li>


      <li class="nav-item">

        <a class="nav-link disabled" href="#">Search</a>

      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">

      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

    </form>

  </div>

</nav>

<div class="jumbotron jumbotron-fluid">

  <div class="container">

    <h1>About us section</h1> 

    <p>Bootstrap is the most popular HTML, CSS...</p> 

  </div>

</div>

</header>

<section>

	<div class="container-fluid">

		<h1 class="text-center text-capitalize pt-5">About us</h1>

		<hr class="w-25 mx-auto">

		<div class="row mb-5">
			<div class="col-lg-6 col-md-6 col-12">

				<img src="image/img4.jpg" class="img-fluid">

			</div>

			<div class="col-lg-6 col-md-6 col-12">

				<h1>Our purpose ?</h1>

				<hr>

				<p>
					The Mahadev jewellers is available since 1991.we believe that consumers satisfaction
					is our profit.The Mahadev jewellers believes to satisfy the consumer with its best services.
					once the consumer comes he would not think to go back since our sale staff is well experience
					.... 
				</p>

				<button class="btn bg-primary text-white ">Wanna Know me</button>

			</div>

		</div>


	</div>

</section>

<footer>
	
	<P class="text-center bg-dark text-white">@copyright mahadevjewellers.com 1991</P>

</footer>





<script src="bs4/jquery-3.4.1.min.js"></script>

<script src="bs4/popper.min.js"></script>

<script src="bs4/bootstrap.min.js"></script>

</body>

</html>