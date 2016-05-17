<?php 
require("dbcon.php");
$db = new DBCon();
$mysqli = $db->connection();

 class Test{
 	function loadque($qu){
		global $mysqli;
		
        $query_get_prob= "SELECT * FROM que WHERE id='".$qu."';";
        $result_get_prob =mysqli_query($mysqli,$query_get_prob);
  /*      while ($row1 = mysqli_fetch_assoc($result_get_prob)) {
            $prob = $row1["problem"];
            $q = $row1["answer"];
            $ans1 = $row1["ans1"];
            $ans2 = $row1["ans2"];
            $ans3 = $row1["ans3"];
                
        }*/
        $r =  mysqli_fetch_assoc($result_get_prob);
        return $r;

        

	}
 }
 ?>