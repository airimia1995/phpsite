
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
<?php
$MSG="";
//IF UPLOAD BUTTON IS PRESSED
if(isset($_POST['UPLOAD'])){
  //the path to store the uploaded image
  $target="uploaded/".basename($_FILES['image']['name']);

  //conect to the DB_DATABASE
  $db=mysqli_connect("localhost","root","","facebook");
  //get all the submitted data from the form
 $image = $_FILES['image']['name'];
  //$text = $_POST['text'];


  $sql = "INSERT INTO poza(image) VALUES ('$image')";

  mysqli_query($db,$sql);

//move the uploaded image into the folder image_type_to_extension
if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
  $msg = "IMAGE uploaded";}
  else{
    $msg = "There was a problem";
}

}
?>
<!Doctype html?
<html>
<head>
  <title>Image Upload</title>
</head>
  <body>
      <div id="content">
        <?php
		$db=mysqli_connect("localhost", "root", "", "facebook");
		$sql="SELECT * FROM poza";
		$result=mysqli_query($db,$sql);
		while ($row=mysqli_fetch_array($result)){
			echo"<div id='img_div'>";
				echo "<img src='uploaded/".$row['image']."'>";
			echo "</div>";

		}
	?>
        <form method="post" action="adauga_poza.php" enctype="multipart/form-data">
          <input type="hidden" name="size" value="1000000">
            <div>
              <input type="file" name="image">
            </div>
            <div>
              <textarea name="text" cols="40" rows="4" placeholder="Say something about this image.."></textarea>
            </div>
            <div>
              <input type="submit" name="upload" value="Upload Image">
            </div>
        </form>
      </div>
  </body>
<html>
