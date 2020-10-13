<?php header ('Location: /Web App Design Project/index.html') ; ?>
<?php 
	include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" name="viewport"
	content="width=device-width, initial-scale=1.0">

	<title>Big Library</title>
	<link rel="shortcut icon" href="menu/image/Favicon_glasses.png">
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/slicknav.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.slicknav.min.js">
</script>
	<script type="text/javascript">
	$(document).ready(function(){
	$('#nav_menu').slicknav({prependTo:"#mobile_menu"});
	});
</script>

</head>

<body>

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

	<header>
		<img src="menu/image/library_logo.png" alt="library logo" height="80">
		<h2>Big Library</h2>
		<br>
	<div class="profile_info">


			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</header>

<nav id="mobile_menu"></nav>
<nav id="nav_menu">
	<ul>
		<li><a href="index.php" class="current">Home</a></li>
		<li><a href="menu/catalouge.php">Catalogue</a></li>
		<li><a href="menu/best_3_books.php">B3BY</a></li>
		<li><a href="menu/history.php">Website History</a></li>
		<li class="lastitem"><a href="#">About US</a>
			<ul>
				<li><a href="menu/about_us.php">About the designers</a></li>
			</ul>
		</li>
	</ul>
</nav>
	<main>
	<section>
	<button onclick="window.location.href='menu/search_form.php';">Search</button>
		<br>
		<h3>Welcome to the Big Library, where will you find the best quality library materials such as library books, audiobooks, and
			many good stuffs.</h3>
		<figure>
		<img src = "menu/image/libraries_building.jpg" alt = "library building">
		<figcaption>Library Building </figcaption>
	</figure>
	</section>
<aside>
  <h2>Contact Information:</h2>
	<p>John Smith </p>
	<p>Alex Bustos</p>
	<p>Ryan Parks</p>
	<h3>biglibrary@gmail.com</h3>
	<h3>Phone Number: 7134440095</h3>
</aside>
	</main>
	<footer>
	<p>&copy; 2019, Big Library, Katy, TX 77491</p>
	</footer>
</body>
</html>
