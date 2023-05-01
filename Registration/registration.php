<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
    <?php  include 'links.php' ?>
    <?php include 'registration.css' ?>
  </head>
  <body>
    <header>
        <h1>Registration Form</h1>
        <p>Please Fill Out the form with required information</p>
    </header>
    <main>
        <form action="" method="POST">
            <fieldset>
                <label for="fname">Name <input type="text" name="name" required>     </label>
                <label for="degree">Qualification<input type="text" name="degree">     </label>
                <label for="phone">Phone <input type="tel" name="mobile" required>     </label>
                <label for="email">Email <input type="email" name="email" required>     </label>
                <label for="references">Any References <input type="text" name="refer"></label>
                <label for="jobposting">Job Posting<input type="text" name="post" value="Web Developer" ></label>
            </fieldset>
           
            <input type="submit" name="submit"></input>
            <a href="display.php" target="_blank">Check Form </a>
        </form>
    </main>

    <?php include 'scripts.php' ?>
  </body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $degree = $_POST['degree'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $refer = $_POST['refer'];
      $post = $_POST['post'];

      $insertData = " insert into jobregistration(Name,Degree,Mobile,Email,Refer,Post) values('$name','$degree','$mobile','$email','$refer','$post') ";

      $res = mysqli_query($conn,$insertData);

      if($res){
      ?>
      <script>
        alert('Registered Successfully');
      </script>
      <?php
      }else{
      ?>
      <script>
        alert('Not Registered');
      </script>
      <?php
      }

      header("location:display.php");
}


?>