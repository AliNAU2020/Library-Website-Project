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
		<h2>TOP 3 BOOKS OF THE YEAR!</h2>
		<br>
	<div class="profile_info">


			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="best_3_books.php?logout='1'" style="color: red;">logout</a>
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
		<li><a href="../menu/best_3_books.php" class="current">B3BY</a></li>
        	<li><a href="../menu/history.php">Website History</a></li>
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
        <h1 style="color: #7851A9; margin-bottom: 20px "> Best seller #1: The Nickle Boy </h1>
    
		
                <img  src="image/NickleBoy.jpeg" alt="The Nickle Boy" height="250" align="left" style=" margin-right: 15px">
<p>
   The Nickel boys by Colson Whitehead is one of this year's best sellers .
As the Civil Rights movement begins to reach the black enclave of Frenchtown in segregated Tallahassee, Elwood Curtis takes the words of Dr. Martin Luther King to heart: He is "as good as anyone." Abandoned by his parents, but kept on the straight and narrow by his grandmother, Elwood is about to enroll in the local black college. But for a black boy in the Jim Crow South of the early 1960s, one innocent mistake is enough to destroy the future. Elwood is sentenced to a juvenile reformatory called the Nickel Academy, whose mission statement says it provides "physical, intellectual and moral training" so the delinquent boys in their charge can become "honorable and honest men."
<br>
    <br>
    <br>
        <strong>Product Information:</strong><br>
        <strong>Author:</strong> Colson Whitehead.<br>
        <strong>Publisher:</strong> Doubleday; First Edition Limited Issue edition (August 16, 2019))<br>
        <strong>Paperback:</strong> 224 pages<br>
        <strong>ISBN-10:</strong> 198480538X<br>
        <strong>ISBN-13:</strong> 978-1984805386<br> 
    
        </p>
    
    
             
    
        <h1 style="color: #7851A9; margin-top: 20px ;margin-bottom: 20px "> Best seller #2: Pretty Revenge </h1>
    
		
                <img  src="image/Pretty.jpg" alt="Pretty" height="250" align="left" style=" margin-right: 15px">
        
  <p>     
 Pretty Revenge by Emily Liebert is this year's number two best seller .The name of the game is revenge—no matter the cost—in this emotionally charged thriller reminiscent of The Wife Between Us and The Perfect Nanny.

Kerrie O’Malley, jobless and in an unfulfilling relationship, can isolate the singular moment in her life when things veered off course—the night she was irrevocably wronged by someone she looked up to. Eighteen years later, when Kerrie sees the very woman who destroyed her life on television, a fire ignites inside her. The stakes are high. The risks are perilous. But she’ll stop at nothing to achieve the retribution she deserves.

Exploring just how far someone will go for vengeance, Pretty Revenge is a riveting, compulsively readable novel bursting with twists and turns and plenty of suspense.
        <br>
        <br>
        <strong> Product details</strong>  <br>
   <strong> Author:</strong> Emily Liebert .<br>
    <strong>Publisher:</strong> Gallery Books (July 2, 2019) <br>
    <strong>Paperback:</strong> 320 pages<br>
    <strong>ISBN-10:</strong> 1982122102<br>
<strong>ISBN-13: </strong> 978-1982122102<br>
        </p> 
        
        
        
       
        
         <h1 style="color: #7851A9; margin-top: 20px; margin-bottom: 20px; "> Best seller #3: I'm Fine and Neither are you.</h1>
    
		
                <img  src="image/Bookk.jpg"
             alt="Fine"
             height="250" align="left" style=" margin-right: 15px">
        
        
        
        <p>
    I'm fine and neither are you by Camille Pagan is this years' number 3 best seller.A Washington Post and Amazon Charts bestseller.



Wife. Mother. Breadwinner. Penelope Ruiz-Kar is doing it all—and barely keeping it together. Meanwhile, her best friend, Jenny Sweet, appears to be sailing through life. As close as the two women are, Jenny’s passionate marriage, pristine house, and ultra-polite child stand in stark contrast to Penelope’s underemployed husband, Sanjay, their unruly brood, and the daily grind she calls a career.
What seems like a smart idea quickly spirals out of control, revealing new rifts and even deeper secrets. As Penelope stares down the possible implosion of her marriage, she must ask herself: When it comes to love, is honesty really the best policy?
            <br>
            <br>
            <br>
            
    <strong>Product details </strong> <br>
    <strong>Author: </strong> Camille Pagan.<br>
   <strong> Publisher:</strong> Lake Union Publishing (June 1, 2019)<br>
    <strong>Paperback: </strong> 270 pages<br>
   <strong>ISBN-10: </strong> 1542042550<br>
<strong>ISBN-13: </strong> 978-1542042550 <br>
       
        
        
        
        
	</section>
	</main>
	<footer>
		
	</footer>
</body>
</html>

