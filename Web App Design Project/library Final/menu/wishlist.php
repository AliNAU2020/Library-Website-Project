<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "biglibrary");

if(isset($_POST["add_to_list"]))
{
	if(isset($_SESSION["wishlist"]))
	{
		$item_array_id = array_column($_SESSION["wishlist"], "book_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["wishlist"]);
			$item_array = array(
			'book_id' => $_GET["id"],
			'book_title' => $_POST["hidden_title"],
			'book_author' => $_POST["hidden_author"],
			'book_publisher' => $_POST["hidden_publisher"],
			'book_ISBN_10' => $_POST["hidden_isbn_10"],
			'book_ISBN_13' => $_POST["hidden_isbn_13"],
			'book_number_of_pages' => $_POST["hidden_pages"],
			'book_wished' => $_POST["wished"]
			);
			$_SESSION["wishlist"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'book_id' => $_GET["id"],
			'book_title' => $_POST["hidden_title"],
			'book_author' => $_POST["hidden_author"],
			'book_publisher' => $_POST["hidden_publisher"],
			'book_ISBN_10' => $_POST["hidden_isbn_10"],
			'book_ISBN_13' => $_POST["hidden_isbn_13"],
			'book_number_of_pages' => $_POST["hidden_pages"],
			'book_wished' => $_POST["wished"]
		);
		$_SESSION["wishlist"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["wishlist"] as $keys => $values)
		{
			if($values["book_id"] == $_GET["id"])
			{
				unset($_SESSION["wishlist"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="wishlist.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Wishlist test</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">Library wishlist</h3><br />
			<button onclick="window.location.href='Catalouge.php';">DONE?</button>
			<br /><br />
			<?php
				$query = "SELECT * FROM book ORDER BY ID ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="wishlist.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
		<img src="image/<?php echo $row["image"];?>" width="100px" height="100px"/>
		<h4>Title: <?php echo $row["Title"];?></h4>
		<h4>Author: <?php echo $row["Author"];?></h4>
		<h4>Publisher: <?php echo $row["Publisher"];?></h4>
		<h4>ISBN-10: <?php echo $row["ISBN_10"];?></h4>
		<h4>ISBN-13: <?php echo $row["ISBN_13"];?></h4>
		<h4>Pages: <?php echo $row["NumberOfPages"];?></h4>
		<input type="text" name="wished" class="form-control" value="1" />
		<input type="hidden" name="hidden_title" value="<?php echo $row["Title"]; ?>" />
		<input type="hidden" name="hidden_author" value="<?php echo $row["Author"]; ?>" />
		<input type="hidden" name="hidden_publisher" value="<?php echo $row["Publisher"]; ?>" />
		<input type="hidden" name="hidden_isbn_10" value="<?php echo $row["ISBN_10"]; ?>" />
		<input type="hidden" name="hidden_isbn_13" value="<?php echo $row["ISBN_13"]; ?>" />
		<input type="hidden" name="hidden_pages" value="<?php echo $row["NumberOfPages"]; ?>" />
		<input type="submit" name="add_to_list" style="margin-top:5px;" class="btn btn-success" value="Add to cart" />
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
			<th width="15%">Title</th>
			<th width="10%">Author</th>
			<th width="25%">Publisher</th>
			<th width="10%">ISBN-10</th>
			<th width="15%">ISBN-13</th>
			<th width="5%">Pages</th>
			<th width="5%">Wished</th>
			<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["wishlist"]))
					{
						foreach($_SESSION["wishlist"] as $keys => $values)
						{
					?>
					<tr>
			<td><?php echo $values["book_title"]; ?></td>
			<td><?php echo $values["book_author"]; ?></td>
			<td><?php echo $values["book_publisher"]; ?></td>
			<td><?php echo $values["book_ISBN_10"]; ?></td>
			<td><?php echo $values["book_ISBN_13"]; ?></td>
			<td><?php echo $values["book_number_of_pages"]; ?></td>
			<td><?php echo $values["book_wished"]; ?></td>
			<td><a href="wishlist.php?action=delete&id=<?php echo $values["book_id"];?>">Remove</a></td>
					</tr>
			<button onclick="window.location.href='Catalouge.php';">DONE?</button>
					<?php
}
}
?>

				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>
</body>
</html>
