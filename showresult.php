<?php 
	session_start();
	if ($_SESSION["islog"] != 1) {
	header("location:login.php");

}
 ?>

 <html>
 <head>
 	<title>Your Result</title>
 </head>
 <body>

<?php
if (isset($_POST['submit'])) {
    
    
    session_unset();
    session_destroy();
    header('Location: login.php');
}
?>


 	<nav><h3><label><?php echo $_SESSION["user"];?></label></h3></nav>
 	<h4><label><?php echo $_SESSION["result"];?></label></h4>

 	<form action="" method="post" >
	
	<input type="submit" name="submit" value="Again"> 
	
	</form>

	
 </body>
 </html>