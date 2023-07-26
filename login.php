<?php  
	$usr = $_POST["usr"];
	$pwd = $_POST["pwd"];
	if($usr == "vishnu" && $pwd == "2005")
	{
		$loginName = "Welcome Admin";
	}
	else
	{
		$loginName = "Login Failed";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>	
		<link rel="stylesheet" href="sitestyle.css">	
	</head>
	<body>		
		
			<h1>Cloud Login Result</h1>
		
		<hr>
		<article>			
			
				<h2> <?php echo $loginName ?></h1>
			
	</body>
</html>


