
<html>
 <head>
 	<title>aaaa</title>
 </head>
 <body>
 	<div>
 	<button onclick="myFunction()">Click me</button>
 	</div>
 	<h3>ertqqg</h3>
 	<div id="1">
 		
 		<label  name="1">ccc</label>
 	</div>

 	<script>
    function myFunction(){
    	<?php require("test.php"); ?>
     	var x=document.getElementById("1");
     	x.innerHTML = '<?php  echo $a[1]["problem"];?>';
     }      
 </script>

 </body>
 </html>