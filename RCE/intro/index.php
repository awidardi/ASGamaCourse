<?php
	print("Please specify the id of the file to see");
	print("<p>");
	$file=$_GET['id'];
	system("cat $file");
?>
