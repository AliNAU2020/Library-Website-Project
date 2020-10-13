<form method="post" enctype="multipart/form-data">
<label>Title</label>
<input type="text" name="title">
<br><br>
<label>Author</label>
<input type="text" name="author">
<br><br>
<label>Publisher</label>
<input type="text" name="publisher">
<br><br>
<label>ISBN-10</label>
<input type="text" name="isbn_10">
<br><br>
<label>ISBN-13</label>
<input type="text" name="isbn_13">
<br><br>
<label>Number of Pages</label>
<input type="text" name="NumberOfPages">
<br><br>
<label>File upload</label>
<input type="File" name="file">
<br><br>
<input type="submit" name="submit">

</form>

<?php
$conn=mysqli_connect("localhost","root","","biglibrary")or die("Can't Connect...");

if (isset($_POST["submit"])){
$Title = $_POST["title"];
$Author = $_POST["author"];
$Publisher = $_POST["publisher"];
$ISBN_10 = $_POST["isbn_10"];
$ISBN_13 = $_POST["isbn_13"];
$NumberOfPages = $_POST["NumberOfPages"];

#file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

     #upload directory path
$uploads_dir = '../menu/image';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

$sql = "INSERT INTO book (title, author, publisher, isbn_10, isbn_13, NumberOfPages, image)
			values('$Title', '$Author', '$Publisher', '$ISBN_10', '$ISBN_13', '$NumberOfPages', '$pname')";

if(mysqli_query($conn,$sql)){

echo "file sucessfully uploaded";
header("location:add_and_delete_book.php");
}
else{
 echo "error";
}
}
?>

<table>
<?php
$conn=mysqli_connect("localhost","root","","biglibrary")or die("Can't Connect...");
$q="select * from book";
$res=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($res)){?>
<tr>
	        <td><?php echo $row['id']; ?></td>
		<td><?php echo $row['Title']; ?></td>
		<td><?php echo $row['Author']; ?></td>
		<td><?php echo $row['Publisher']; ?></td>
		<td><?php echo $row['ISBN_10']; ?></td>
		<td><?php echo $row['ISBN_13']; ?></td>
		<td><?php echo $row['NumberOfPages']; ?></td>
		<td><img src="../menu/image/<?php echo $row["image"]; ?>" height="100"></td>
</tr>
<?php } ?>
</table>
