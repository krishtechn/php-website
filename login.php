<?php 


session_start();

include 'dbconnect.php';

 if(isset($_POST['login'])){
 $name = $_POST['full-name'];
 $email = $_POST['email'];

 $sql = "SELECT name,email from `students` WHERE name = '$name' and email='$email';";

 $result = mysqli_query($con,$sql);

  $num = mysqli_num_rows($result);
//   echo $num;

  if($num > 0){
      echo '<script>alert("data inserted success fully now login")</script>';
      $_SESSION['login'] = true;
      $_SESSION['username'] = $name;
      header("location:welcome.php");
  }else{
        echo '<script>alert("Invalid username and email so you are not login")</script>';
  }

//  if($result){
//        echo '<script>alert("data inserted success fully now login")</script>';
//        header("location:login.php");
//  }else{
//       echo '<script>alert("data is not inserted success fully")</script>';
//  }


 }else{
      echo '<script>alert("field your details")</script>';
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
      <title>Login</title>
</head>
<body>
      
<section class="text-gray-600 body-font">
      <form action="login.php" method="post">
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col mx-auto my-5 w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5 text-lg">Login</h2>
      <div class="relative mb-4">
        <label for="full-name" class="leading-7 text-sm text-gray-600">Username</label>
        <input type="text" id="full-name" name="full-name" required class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" required class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <button name="login" class="text-white bg-indigo-500 border-0 py-2 focus:outline-none hover:bg-indigo-600 rounded text-lg">Login</button>
      <p class="text-xs text-gray-500 mt-3 text-danger">Please enter a valid details</p>
    </div>
  </div>
  </form>
</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>