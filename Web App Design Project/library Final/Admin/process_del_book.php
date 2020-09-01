<?php
require('config.php');

$ID=$_GET['id'];
$query="delete from book where id =".$_GET['id'];
		
	mysqli_query($conn,$query) or die("can't Execute...");
			
			
	header("location:add_and_delete_book.php");

?>