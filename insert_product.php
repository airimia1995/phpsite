<?php
      include('session.php');
$link="./uploaded/"."BLA.jpg";
move_uploaded_file($_FILES["image"]["tmp_name"],$link);
 $user = $_SESSION['login_user'];
mysql_query($db, "INSERT INTO poza(ID_Client,poza) VALUES ($user,$link)");
$result2 = mysql_query($db, "SELECT * FROM poza WHERE ID_Client = $user");

$row = mysqli_fetch_row($result2);
 printf (" %s\n",$row[0]);


 ?>
 <!DOCTYPE html>
<html>
<body>
  <?php
echo "<img src='$link'/>";
   ?>
</body>
</html>
