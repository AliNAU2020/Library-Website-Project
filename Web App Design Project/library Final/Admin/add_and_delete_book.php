<?php
session_start();
require('config.php');

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">

					<table border='1' WIDTH='100%'>
						<tr>
						<td colspan="9"><a href="addbook.php">Add New Book</a><br><a href="home.php">DONE</a></td>
						</tr>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>ID</u></b></td>
<TD style="color:darkgreen" WIDTH='20%'><b><u>Title</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>Author</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>PUBLISHER</u></b></TD>
<TD style="color:darkgreen" WIDTH='15%'><b><u>ISBN-10</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>ISBN-13</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>Number of pages</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>

						</tr>
						<?php

							while($row=mysqli_fetch_assoc($res))
							{?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['Title']; ?></td>
									<td><?php echo $row['Author']; ?></td>
									<td><?php echo $row['Publisher']; ?></td>
									<td><?php echo $row['ISBN_10']; ?> </td>
									<td><?php echo $row['ISBN_13']; ?> </td>
									<td><?php echo $row['NumberOfPages']; ?> </td>
						 			<td><img src="../menu/image/<?php echo $row["image"]; ?>" height="100"></td>
									<td><a href="process_del_book.php?id=<?php echo $row['id']; ?>">DROP</a></td>
							</tr>
						<?php	} ?>

					</TABLE>

			</div>

		</div>

	</div>
