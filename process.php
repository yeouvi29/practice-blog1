<?php
require_once('conn.php');
?>



<?php

$title =  mysqli_real_escape_string($conn, $_POST['title']);
$date =  mysqli_real_escape_string($conn, $_POST['date']);
$text =  mysqli_real_escape_string($conn, $_POST['text']);
$sql = "INSERT INTO 
		`diary` 	
		(`id`, `title`, `date`, `text`)
		 VALUES (NULL, '{$title}', '{$date}', '{$text}');";
mysqli_query($conn, $sql);

?>