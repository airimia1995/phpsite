<?php
   include('session.php');
?>
<html">

   <head>
      <title>Welcome </title>
   </head>

   <body>

        <form action='insert_product.php' method='POST' enctype='multipart/form-data' ></br>
           File        : <input type='file' name= 'image' >
         <button type="submit">Adauga

         </button>
         </form>

      <h1>Welcome <?php echo $login_session; ?></h1>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>

</html>
