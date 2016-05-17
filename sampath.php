<?php
// Start the session
session_start();
//$_SESSION["Qid"] = 0;
//$_SESSION["result"] = 0;
if ($_SESSION["islog"] != 1) {
	header("location:login.php");

}

?>
<html>
<head>
	<title>sampath</title>
	
</head>
<body>
<?php require("t.php"); ?>

</body>
</html>
