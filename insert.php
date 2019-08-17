<?php
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$con=mysql_connect('localhost','root');
	mysql_select_db('contact',$con);
	$q="INSERT INTO  `contact`.`user` (`email` ,`password`) VALUES ('$email',  '$pass')";
	$result=mysql_query($q,$con);
	if($result==true)
	{
	?>
	<script>
			alert("Insert SuccessFull");
	</script>

<?php
	}
	else
	{
		
?>
<script>
			alert("Insert not SuccessFull");
	</script>

<?php
	}
?>