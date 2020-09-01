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
	<link rel="shortcut icon" href="../image/Favicon_glasses.png">
	<link rel="stylesheet" href="../styles/normalize.css">
	<link rel="stylesheet" href="../styles/b3by.css">
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

<body>
	<header>
		<img src="../image/library_logo.png" alt="library logo" height="80">
		<h2>history</h2>
		<br>
	<div class="profile_info">

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="history.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</header>

<nav id="mobile_menu"></nav>
<nav id="nav_menu">
	<ul>
		<li><a href="../index.php">Home</a></li>
		<li><a href="../menu/catalouge.php">Catalogue</a></li>
		<li><a href="../menu/best_3_books.php">B3BY</a></li>
		<li><a href="../menu/history.php" class="current">Website History</a></li>
		<li class="lastitem"><a href="#">About US</a>
			<ul>
				<li><a href="../menu/about_us.php">About the designers</a></li>
			</ul>
		</li>
	</ul>
</nav>
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
	<button onclick="window.location.href='search_form.php';">Search</button>
		<h2>Update 0.01</h2>
		<p>Welcome to our website, this is the first update to this website.<br>
		Basically the creation of the website, enjoy!</p>
		<br>
		<h2>Update 0.2</h2>
		<p>In this version, the first catalogue page is created!<br>
		This page contains 10 books in our library's website.</p>
		<br>
		<h2>Update 0.4</h2>
		<p>In this version, the second catalouge page is created!<br>
		This page is hidden from the menu navigation and can only<br>
		be viewed </p>
		<br>
		<h2>Update 0.6</h2>
		<p>In this version, the best three books of the year page is created!<br>
		This page presents the top three books that sold this year.</p>
		<br>
		<h2>Update 0.8</h2>
		<p>In this version, the home page is created!<br>
		The home page, or the welcome page, welcomes the user to the library<br>
		and can show events that will happen and with contact information.</p>
		<br>
		<h2>Update 1.0</h2>
		<p>In this version, the website is ready to be presented.</p>
	</section>
<aside>
	
</aside>
	</main>
	<footer>
		
	</footer>
</body>
</html>