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
		<img src="image/library_logo.png" alt="library logo" height="80">
		<h2>About Us</h2>
		<br>
	<div class="profile_info">


			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="about_us.php?logout='1'" style="color: red;">logout</a>
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
		<li><a href="../menu/history.php">Website History</a></li>
		<li class="lastitem"><a href="#">About US</a>
			<ul>
				<li><a href="../menu/about_us.php" class="current">About the designers</a></li>
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
		<h2>Ali Shaikh </h2>
		<p>Ali Shaikh is a fourth-year undergraduate computer science student. He is more focused on web design. Ali was
		responsible for creating the home page of the library web project. </p>
			<br>
		<h2>Kliti Agolli</h2>
		<p> Kliti Agolli is a undergraduate computer science student. He was responsible for creating the Best three book page of the final web project. </p>
			<br>
		<h2>Selmir Avdic</h2>
		<p>Selmir Avdic was responsible for the cration of the catalouge pages and css files.<br>
		He is an undergraduate that strives to become a web application developer.</p>
	</section>
<aside>

</aside>
	</main>
	<footer>

	</footer>
</body>
</html>
