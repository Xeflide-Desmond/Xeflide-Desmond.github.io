<?php

$server ="localhost";
$user = "root";
$password ="";
$dbname = "xef_hub";

$con = mysqli_connect($server , $user, $password, $dbname);

if($con){
	?>
		<script>
			alert("Connection successful");
		</script>
	<?php
}else{
	?>
		<script>
			alert("No Connection");
		</script>
	<?php	
}


?>