<?php 
	include('../functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" name="viewport" 
	content="width=device-width, initial-scale=1.0">

	<title>Big Library</title>
	<link rel="shortcut icon" href="image/Favicon_glasses.png">
	<link rel="stylesheet" href="../styles/normalize.css">
	<link rel="stylesheet" href="../styles/catalogue.css">
	<link rel="stylesheet" href="../styles/slicknav.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="../js/jquery.slicknav.min.js">
</script>
	<script type="text/javascript">
	$(document).ready(function(){
	$('#nav_menu').slicknav({prependTo:"#mobile_menu"});
	});
</script>

</head>

<style>
th,td{
padding-bottom:10px;
}
</style>

<body>
	<header>
		<img src="image/library_logo.png" alt="library logo" height="80">
		<h2>Catalogue</h2>
		<br>
	<div class="profile_info">

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="Catalouge.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</header>

<nav id="mobile_menu"></nav>
<nav id="nav_menu">
	<ul>
		<li><a href="../index.php">Home</a></li>
		<li><a href="../menu/catalouge.php" class="current">Catalogue</a></li>
		<li><a href="../menu/best_3_books.php">B3BY</a></li>
		<li><a href="../menu/history.php">Website History</a></li>
		<li class="lastitem"><a href="#">About US</a>
			<ul>
				<li><a href="../menu/about_us.php">About the designers</a></li>
			</ul>
		</li>
	</ul>
</nav>
<div class="center">
	<h2>Welcome!</h2>
	<h3>This is our selection of books avalable!</h3>
	<button onclick="window.location.href='search_form.php';">Search</button>
	<button onclick="window.location.href='wishlist.php';">Wishlist</button>
  </div>
	<main>

	<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  <?php endif ?>

	<section>
<?php
include 'DBConnect.php';
?>


<table align="center" style="text-align:center">
<?php
$query = 'SELECT * FROM Book WHERE id IN (6,7,8,9,10)';
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result))
	{
	echo '<tr><td>';?> <img src="image/<?php echo $row["image"]; ?>" height="100"> <?php echo '</td></tr>';
	echo '<tr><td>Title:'. $row['Title'] . '</td></tr>';
	echo '<tr><td>Author:'. $row['Author'] . '</td></tr>';
	echo '<tr><td>Publisher:'. $row['Publisher'] . '</td></tr>';
	echo '<tr><td>ISBN-10:'. $row['ISBN_10'] . '</td></tr>';
	echo '<tr><td>ISBN-13:'. $row['ISBN_13'] . '</td></tr>';
	echo '<tr><td>Number of Pages:'. $row['NumberOfPages'] . '</td></tr>';
	}
echo "</table>";
}
else{ 
echo "Failed";
}
$conn-> close();
?>
</table>
	</section>

	<aside>
<?php
include 'DBConnect.php';
?>


<table align="center" style="text-align:center">
<?php
$query = 'SELECT * FROM Book WHERE ID IN (1,2,3,4,5)';
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result))
	{
	echo '<tr><td>';?> <img src="image/<?php echo $row["image"]; ?>" height="100"> <?php echo '</td></tr>';
	echo '<tr><td>Title:'. $row['Title'] . '</td></tr>';
	echo '<tr><td>Author:'. $row['Author'] . '</td></tr>';
	echo '<tr><td>Publisher:'. $row['Publisher'] . '</td></tr>';
	echo '<tr><td>ISBN-10:'. $row['ISBN_10'] . '</td></tr>';
	echo '<tr><td>ISBN-13:'. $row['ISBN_13'] . '</td></tr>';
	echo '<tr><td>Number of Pages:'. $row['NumberOfPages'] . '</td></tr>';
	}
echo "</table>";
}
else{ 
echo "Failed";
}
$conn-> close();
?>
</table>
	</aside>
	</main>
	<footer>
		<p><<a href="../menu/Catalouge.php">1</a>|<a href="../menu/Catalouge_2.php">2</a>></p>
	</footer>
</body>
</html>