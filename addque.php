<html>
<head>
	<title>Add</title>
</head>
	<link href="css/bootstrap.min.css" rel="stylesheet">

<body>
<?php
require("new.php");
if (isset($_POST['submit'])) {
    
    $que = $_POST['que'] ; 
    $ans1 = $_POST['ans1']; 
    $ans2 = $_POST['ans2']; 
    $ans3 = $_POST['ans3']; 
    $ans = $_POST['ans']; 
    $home = new Home();

    $home->addque($que,$ans,$ans1,$ans2,$ans3);
    
}
?>
	<div class="container">
		<form action="" method="post" >
			<div  class="form-group col-lg-12 col-md-12 col-sm-12" style="margin-top: 30px;">
			<label>question :</label><input type="textarea" class="form-control" id="que" name="que" placeholder="Question" required><br/>
			<label>Answer 1 :</label><input type="text" class="form-control" id="ans1" name="ans1" placeholder="Answer 1" required><br/>
			<label>Answer 2 :</label><input type="text" class="form-control" id="ans2" name="ans2" placeholder="Answer 2" required><br/>
			<label>Answer 3 :</label><input type="text" class="form-control" id="ans3" name="ans3" placeholder="Answer 3" required><br/>
			<label>Answer :</label><input type="text" class="form-control" id="ans" name="ans" placeholder="Answer" required><br/>
			<input type="submit" name="submit" value="Submit"> 
			</div>
		</form>

	</div>

</body>
</html>