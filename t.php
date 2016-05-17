<?php 

$a = $_SESSION["ar"];

 ?>
<html ng-app>
<head>
	<title>sampath</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/angular.min.js"></script>
    <link href="css/smallbox.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <script src = "js/jquery-2.1.4.min.js"></script>
    <script src = "slidedown.js"></script>
    <link href="css/footer.css" rel="stylesheet">


</head>
<body>
	<?php require("new.php");  ?>

	

	<?php
if (isset($_POST['submit'])) {
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];
    $q7 = $_POST["q7"];
    $q8 = $_POST["q8"];
    $q9 = $_POST["q9"];
    $q10 = $_POST["q10"];

    $mark1 = $_POST['radio1'];
    $mark2 = $_POST['radio2'];
    $mark3 = $_POST['radio3'];
    $mark4 = $_POST['radio4'];
    $mark5 = $_POST['radio5'];
    $mark6 = $_POST['radio6'];
    $mark7 = $_POST['radio7'];
    $mark8 = $_POST['radio8'];
    $mark9 = $_POST['radio9'];
    $mark10 = $_POST['radio10'];
      	
    $home = new Home();
    $home->iscorrect($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10, $mark1,$mark2,$mark3,$mark4,$mark5,$mark6,$mark7,$mark8,$mark9,$mark10);

}
?>


	<?php require ("sidebar.php") ?>
	<div class="container" style="margin-left: 245px;margin-right: 40px; width: 1000px;">
		<nav><h3><label><?php echo $_SESSION["user"];?></label></h3></nav>
		
			<div >
				<form action="" method="post">
					
						
					<div class="divset" style="min-height:530px;">
						
					<div id="1">
						<h3>Question 1 div</h3>
						<?php 
						//require("new.php");
						$home1 = new Home();
						$home1->loadque($a[0]); 
						?>
						
						<div>
							<input type="text" name="q1" id="q1" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio1" value="1" ng-model="check1" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio1" value="2" ng-model="check1" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio1" value="3" ng-model="check1" required><?php echo $_SESSION["ans3"]; ?><br/>
							
						</div>

						<div>
							<label style="margin-top: 40px;"><input type="radio" name="radio" value="1" ng-model="next1" required style="width: 0px;height: 0px;">Next >></label><br/>
						</div>
					</div>
					
					<div id="2" style="display: none;">
						<h3>Question 2 div</h3>
						<?php 
						//require("new.php");
						$home2 = new Home();
						$home2->loadque($a[1]); 
						?>
						<div>
							<input type="text" name="q2" id="q2" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio2" value="1" ng-model="check2" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio2" value="2" ng-model="check2" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio2" value="3" ng-model="check2" required><?php echo $_SESSION["ans3"]; ?><br/>
							

						</div>
						<div>
							<label style="margin-top: 40px;"><input type="radio" name="radio" value="1" ng-model="next2" required style="width: 0px;height: 0px;">Next >></label><br/>
						</div>
					</div>
					<div id="3" style="display: none;">
						<h3>Question 3 div</h3>
						<?php 
						//require("new.php");
						$home3 = new Home();
						$home3->loadque($a[2]); 
						?>
						<div>
							<input type="text" name="q3" id="q3" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio3" value="1" ng-model="check3" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio3" value="2" ng-model="check3" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio3" value="3" ng-model="check3" required><?php echo $_SESSION["ans3"]; ?><br/>
							

						</div>
						<div>
							<label style="margin-top: 40px;"><input type="radio" name="radio" value="1" ng-model="next3" required style="width: 0px;height: 0px;">Next >></label><br/>
						</div>
					</div>
					<div id="4" style="display: none;">
						<h3>Question 4 div</h3>
						<?php 
						//require("new.php");
						$home4 = new Home();
						$home4->loadque($a[3]); 
						?>
						<div>
							<input type="text" name="q4" id="q4" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio4" value="1" ng-model="check4" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio4" value="2" ng-model="check4" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio4" value="3" ng-model="check4" required><?php echo $_SESSION["ans3"]; ?><br/>
							

						</div>
						<div>
							<label style="margin-top: 40px;"><input type="radio" name="radio" value="1" ng-model="next4" required style="width: 0px;height: 0px;">Next >></label><br/>
						</div>
					</div>
					<div id="5" style="display: none;">
						<h3>Question 5 div</h3>
						<?php 
						//require("new.php");
						$home5 = new Home();
						$home5->loadque($a[4]); 
						?>
						<div>
							<input type="text" name="q5" id="q5" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio5" value="1" ng-model="check5" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio5" value="2" ng-model="check5" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio5" value="3" ng-model="check5" required><?php echo $_SESSION["ans3"]; ?><br/>
							

						</div>
						<div>
							<label style="margin-top: 40px;"><input type="radio" name="radio" value="1" ng-model="next5" required style="width: 0px;height: 0px;">Next >></label><br/>
						</div>
					</div>
					<div id="6" style="display: none;">
						<h3>Question 6 div</h3>
						<?php 
						//require("new.php");
						$home6 = new Home();
						$home6->loadque($a[5]); 
						?>
						<div>
							<input type="text" name="q6" id="q6" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio6" value="1" ng-model="check6" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio6" value="2" ng-model="check6" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio6" value="3" ng-model="check6" required><?php echo $_SESSION["ans3"]; ?><br/>
							

						</div>
						<div>
							<label style="margin-top: 40px;"><input type="radio" name="radio" value="1" ng-model="next6" required style="width: 0px;height: 0px;">Next >></label><br/>
						</div>
					</div>
					<div id="7" style="display: none;">
						<h3>Question 7 div</h3>
						<?php 
						//require("new.php");
						$home7 = new Home();
						$home7->loadque($a[6]); 
						?>
						<div>
							<input type="text" name="q7" id="q7" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio7" value="1" ng-model="check7" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio7" value="2" ng-model="check7" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio7" value="3" ng-model="check7" required><?php echo $_SESSION["ans3"]; ?><br/>
							 

						</div>
						<div>
							<label style="margin-top: 40px;"><input type="radio" name="radio" value="1" ng-model="next7" required style="width: 0px;height: 0px;">Next >></label><br/>
						</div>
					</div>
					<div id="8" style="display: none;">
						<h3>Question 8 div</h3>
						<?php 
						//require("new.php");
						$home8 = new Home();
						$home8->loadque($a[7]); 
						?>
						<div>
							<input type="text" name="q8" id="q8" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio8" value="1" ng-model="check8" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio8" value="2" ng-model="check8" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio8" value="3" ng-model="check8" required><?php echo $_SESSION["ans3"]; ?><br/>
							

						</div>
						<div>
							<label style="margin-top: 40px;"><input type="radio" name="radio" value="1" ng-model="next8" required style="width: 0px;height: 0px;">Next >></label><br/>
						</div>
					</div>
					<div id="9" style="display: none;">
						<h3>Question 9 div</h3>
						<?php 
						//require("new.php");
						$home9 = new Home();
						$home9->loadque($a[8]); 
						?>
						<div>
							<input type="text" name="q9" id="q9" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio9" value="1" ng-model="check9" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio9" value="2" ng-model="check9" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio9" value="3" ng-model="check9" required><?php echo $_SESSION["ans3"]; ?><br/>
						

						</div>
						<div>
							<label style="margin-top: 40px;"><input type="radio" name="radio" value="1" ng-model="next9" required style="width: 0px;height: 0px;">Next >></label><br/>
						</div>
					</div>
					<div id="10" style="display: none;">
						<h3>Question 10 div</h3>
						<?php 
						//require("new.php");
						$home10 = new Home();
						$home10->loadque($a[9]); 
						?>
						<div>
							<input type="text" name="q10" id="q10" value=<?php echo $_SESSION["answer"]; ?> style="display: none;">
							<input type="radio" name="radio10" value="1" ng-model="check10" required><?php echo $_SESSION["ans1"]; ?><br/>
							<input type="radio" name="radio10" value="2" ng-model="check10" required><?php echo $_SESSION["ans2"]; ?><br/>
							<input type="radio" name="radio10" value="3" ng-model="check10" required><?php echo $_SESSION["ans3"]; ?><br/>
						

						</div>
					</div>
					
					</div>
					<div>
					<input class="pull-right" type="submit" name="submit" value="Finish"> 
					</div>


				</form>

			</div>
	</div>

<footer>
    <div class="footer footer_col">
        <div class="col-md-6 col-md-offset-2">
            <ul class="footer-nav">
                <li><a href="AboutUs.aspx">About</a></li>
                <li><a href="Help.aspx">Help</a></li>
                <li><a href="AdminSitemap.aspx">Site map</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-md-offset-2"> 
            <div>
                <!--<a href="#" style="margin-left: 50px;">Developer site</a>-->
                <!--<img class="pull-right" src="../images/visa.png" style="width: 30px;">-->
            </div>
        </div>
    </div>
</footer>

</body>
</html>