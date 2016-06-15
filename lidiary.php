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
		<h1><a href="index.php">은아</a></h1>
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

				$sql = "SELECT title, date, text FROM diary WHERE id=".$id;
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<h2><?=htmlspecialchars($row['title'])?></h2>
			<br><?=htmlspecialchars($row['date'])?></br>
			<br><?=htmlspecialchars($row['text'])?></br>
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