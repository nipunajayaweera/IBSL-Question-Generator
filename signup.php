<html>
<head>
	<title>login</title>
</head>
<body>
	<?php
	require("new.php");
	if (isset($_POST['submit'])) {
	    $name = $_POST["name"];
	    $nic = $_POST["nic"];
	    $home = new Home();
	    $home->signup($name,$nic);

	    //header("Refresh:0; url=sampath.php");
	}
?>
	<form action="" method="post" >
	<input type="text" id="name" name="name" placeholder="Name" required><br/>
	<input type="text" id="nic" name="nic" placeholder="NIC" required><br/>
	<input type="submit" name="submit" value="Signup"> 
	
	</form>
</body>
</html>