<?php
require_once('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" >
	<style media="screen"></style>
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
		<div id="listdiary">	
			<?php
				$id = mysqli_real_escape_string($conn,$_GET['id']);

				$sql = "SELECT title, ingrediants, recipe FROM cook WHERE id=".$id;
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<h2><?=htmlspecialchars($row['title'])?></h2>
			<br><?=htmlspecialchars($row['ingrediants'])?></br>
			<br><?=htmlspecialchars($row['recipe'])?></br>
		</div>	    
 		
        <div id="dlist" class="container">
 			<table>
           		<tr>
           			<th>LAST</th>
			    </tr>    				  			  
			        	<?php
							$sql = "SELECT * FROM `cook`";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($result)){
								echo '<tr><td><a href="licook.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></td></tr>';
							}
						?>							 	
			</table>	
		</div>
       
	</article>
</body>
</html>