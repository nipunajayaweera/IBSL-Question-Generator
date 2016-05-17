<?php 
	session_start();
	$_SESSION["result"] = 0;
	$_SESSION["ans1"] = "";
	$_SESSION["divid"] = "";
	$_SESSION["islog"] = "";
	
	
 ?>
<html>
<head>
	<title>Login</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php
	require("new.php");
	if (isset($_POST['submit'])) {
	    $name = $_POST["name"];

	    
	    
	    $home = new Home();
	    
	    $ar  = $home->createar();
	    $_SESSION["ar"] = $ar;
	    $home->login($name);

	    //header("Refresh:0; url=sampath.php");
	}
?>
	<div class="container-fluid main">
		<div class="row">
			<div class="col-md-12 backg">
				<div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
					<div class="text-box">
	                	<p class="intro">Test your Knowledge</p>
	                    <h2>login</h2>
	                    <h3>Enter your NIC:</h3>
	                    <form action="" method="post" >
							<input type="text" style="background-color: rgba(37, 36, 36, 0); border: outset;" id="name" name="name" placeholder="Enter NIC" required><br/>
							<input type="submit" style="margin-top: 10px;padding-left: 70px;padding-right: 70px;" name="submit" value="Login"> 
							<div>
								<a href="signup.php">SignUp</a>
							</div>
						</form>
	                    <!--<p>By <span><a href="http://www.html5layouts.com">HTML5 Layouts</a></span></p>-->
	                    <p><a href="test.html" class="link-button" style="opacity: 0.35; transition: opacity 0.25s ease-in-out; -webkit-transition: opacity 0.25s ease-in-out;">Rate US</a></p>
					</div>
	  			</div>
			</div>
			
		</div>
	</div>

</body>
</html>