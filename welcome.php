<?php 
session_start();


 include 'dbconnect.php';
 include 'header.php';


 if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
      header("location: login.php");
      exit;
    }


    if(!isset( $_SESSION['username'])){
      header("location: login.php");
      exit;  
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="style.css"></link>
      <title>Welcome <?php echo $_SESSION['username']; ?></title>
</head>



<?php include 'footer.php' ?> 
       <?php include 'script.php' ?> 
<body>



</html>