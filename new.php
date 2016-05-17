<?php 
require("dbcon.php");
$db = new DBCon();
$mysqli = $db->connection();

class Home{

	function signup($name, $nic)
	{
		global $mysqli;

		$query= "SELECT * FROM sysuser WHERE nic='".$nic."'";
		$result = mysqli_query($mysqli, $query);

		if (mysqli_num_rows($result) == 1) {
			echo "You allready signin!!!";;
		}else{
			$query1= "INSERT INTO `sysuser`(`nic`, `username`, `date`) VALUES ('".$nic."' ,'".$name."', NOW());";
	        $result1 = mysqli_query($mysqli, $query1);
	        header("Refresh:0; url=login.php");

		}

	}




	function login($name){
		global $mysqli;
		//$query= "INSERT INTO `user`(`username`) VALUES ('".$name."');";
        //$result = mysqli_query($mysqli, $query);
		$_SESSION["userid"] = $name;
		$query= "SELECT * FROM sysuser WHERE nic='".$name."'";
		$result = mysqli_query($mysqli, $query);

		if (mysqli_num_rows($result) == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $username = $row["username"];
                
            }
        }
		if (mysqli_num_rows($result) == 1) {
			$_SESSION["islog"] = 1;
			$_SESSION["user"] = $username;
			
			header("Location:sampath.php");
		}else{
			echo "Enter correct NIC or signup";
		}
/*
        $query1= "SELECT id FROM user ORDER BY id DESC LIMIT 1;";
        $result1 = mysqli_query($mysqli, $query1);

        if (mysqli_num_rows($result1) == 1) {
            while ($row = mysqli_fetch_assoc($result1)) {
                $lastid = $row["id"];
                
            }
        }

        $_SESSION["userid"] = $lastid;
*/
	}

	function createar()
	{
		global $mysqli;

		$query= "SELECT id FROM que ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($mysqli, $query);

        if (mysqli_num_rows($result) == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $probid = $row["id"];
                
            }
        }
        $rand_no = rand(1,$probid);

        for ($i=0; $i <10 ; $i++) { 
        	$arr[$i] = rand(1,$probid);
        }

        return $arr;

	}


	function loadque($qu){
		global $mysqli;
		
        $query_get_prob= "SELECT * FROM que WHERE id='".$qu."';";
        $result_get_prob =mysqli_query($mysqli,$query_get_prob);
        while ($row1 = mysqli_fetch_assoc($result_get_prob)) {
            $prob = $row1["problem"];
            $q = $row1["answer"];
            $ans1 = $row1["ans1"];
            $ans2 = $row1["ans2"];
            $ans3 = $row1["ans3"];
                
        }
        $_SESSION["answer"] = $q;
        $_SESSION["ans1"] = $ans1;
        $_SESSION["ans2"] = $ans2;
        $_SESSION["ans3"] = $ans3;

			echo "<div class=\"small-box aqua\"> this '".$prob."'<br/>";
        	//echo "<input type=\"radio\" name=\"ans1\" value=\"1\"> ans1<br>";
        	//echo "<input type=\"radio\" name=\"ans2\" value=\"2\"> ans2<br>";
        	//echo "<input type=\"radio\" name=\"ans3\" value=\"3\"> ans3<br>";
        	echo "</div>";

        	



        

	}


	function iscorrect($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10, $mark1,$mark2,$mark3,$mark4,$mark5,$mark6,$mark7,$mark8,$mark9,$mark10)
	{
		global $mysqli;
/*
		$query = "SELECT * FROM que WHERE id='".$queid."';";
		$result = mysqli_query($mysqli,$query);
		
		while ($row = mysqli_fetch_assoc($result)) {
            $ans = $row["answer"];
                
        }
		if ($mark == $ans) {
			echo "correct!!!!";
			$_SESSION["result"] = $_SESSION["result"] + 10;
			if ($_SESSION["Qid"] >= 6) {
				$query1= "UPDATE user SET score ='".$_SESSION["result"]."' WHERE id='".$_SESSION["userid"]."';";
		        $result1 = mysqli_query($mysqli, $query1);
				header('Location: showresult.php');
				
			}
			
			//header("Refresh:0");
			
		}else{
			echo "Incoorect!!!!";
			if ($_SESSION["Qid"] >= 6) {
				$query1= "UPDATE user SET score ='".$_SESSION["result"]."' WHERE id='".$_SESSION["userid"]."';";
		        $result1 = mysqli_query($mysqli, $query1);
				header('Location: showresult.php');
			}

		}*/

		if ($q1 == $mark1) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}
		if ($q2 == $mark2) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}
		if ($q3 == $mark3) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}
		if ($q4 == $mark4) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}
		if ($q5 == $mark5) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}
		if ($q6 == $mark6) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}
		if ($q7 == $mark7) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}
		if ($q8 == $mark8) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}
		if ($q9 == $mark9) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}
		if ($q1 == $mark1) {
			$_SESSION["result"] = $_SESSION["result"] + 10;
		}

		$query1= "INSERT INTO `user`(`nic`, `score`) VALUES ('".$_SESSION["userid"]."','".$_SESSION["result"]."');";
		$result1 = mysqli_query($mysqli, $query1);
		header('Location: showresult.php');


	}

	function showresult(){
		global $mysqli;
		$sql = "SELECT * FROM user ORDER BY score DESC LIMIT 10";
		$result = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        echo "user: " . $row["username"]. " - Score: " . $row["score"].  "<br>";
		    }
		} else {
		    echo "0 results";
		}


	}

	function addque($que,$ans,$ans1,$ans2,$ans3){
		global $mysqli;
		$sql = "INSERT INTO que(problem,answer,ans1,ans2,ans3) VALUES ('".$que."','".$ans."','".$ans1."','".$ans2."','".$que3."')";
		$result = mysqli_query($mysqli, $sql);
		header('Location: addque.php');
	}


}




 ?>