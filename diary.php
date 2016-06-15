<?php
require_once('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" >
	<style media="screen">
		
	</style>
	
</head>
<body >
	<header>
		<h1><a href="index.php">Eunah</a></h1>
	</header>
	<nav>
		<ol>
			
			<li><a href="diary.php">DIARY</a></li>
			<li><a href="todo.php">TODO</a></li>
			<li><a href="cook.php">COOK</a></li>
			<li><a href="travel.php">TRAVEL</a></li>
			<li><a href="study.php">STUDY</a></li>
		</ol>
	</nav>
	
	<article>



		
		<div id="dwrite">
		<form action="process.php" method="post" class="form-horizontal">
			 
				<label for="title"> TITLE : </label>
	       		<input type="text" id="title" name="title">
	       		<p>
	     		<label for="date"> DATE  :  </label>
	       		<input id="date" type="text" name="date" placeholder="mm-dd-yyyy">
	     		</p>
	     		
	     		<p>
	       		<label for="dtext"> DIARY </label>
	       		</p>
	       		<input id="dtext" name="text" ></input>
	       		
	        	<p>
	        	</p>
	       		<input type="submit" value="SUBMIT">
	       		</p>
        
        </form>
        </div>

        <div id="dlist" class="container">
 			<table>
           		<tr>
           			<th>LAST</th>
			    </tr>    	
			   
			    
			        	<?php
							$sql = "SELECT * FROM `diary`";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($result)){
								echo '<tr><td><a href="lidiary.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></td></tr>';
							}
						?>
				
			 	
			</table>	
		</div>
		</article>


		
</body>
</html>








