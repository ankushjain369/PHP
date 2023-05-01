<!doctype html>
<html lang="en">
  <head>
    <title>UPDATE</title>
    <?php  include 'links.php' ?>
    <?php include 'registration.css' ?>
  </head>
  <body>
    <head>
        <h1>Registration Form</h1>
        <p>Please Fill Out the form with required information</p>
    </head>
    <main>
        <form action="" method="POST">
<?php

include 'connection.php';

$ids = $_GET['id'];

$showquery = " select * from jobregistration where id = {$ids} ";
$showdata = mysqli_query($conn,$showquery);
$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){

$idupdate = $_GET['id'];

      $name = $_POST['name'];
      $degree = $_POST['degree'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $refer = $_POST['refer'];
      $post = $_POST['post'];


      $updatequery = " update jobregistration set Name='$name',Degree='$degree',Mobile='$mobile',Email='$email',Refer='$refer',Post='$post' where Id=$idupdate";

      $res = mysqli_query($conn,$updatequery);

      if($res){
      ?>
      <script>
        alert('Updated Successfully');
      </script>
      <?php
      }else{
      ?>
      <script>
        alert('Not Updated');
      </script>
      <?php
      }
}

?>
            <fieldset>
                <label for="fname">Name <input type="text" name="name" value="<?php echo $arrdata['Name'];?>"  required>     </label>

                <label for="degree">Qualification<input type="text" name="degree" value="<?php echo $arrdata['Degree'];?>"></label>

                <label for="phone">Phone <input type="tel" name="mobile" value="<?php echo $arrdata['Mobile'];?>" required>     </label>

                <label for="email">Email <input type="email" name="email" value="<?php echo $arrdata['Email'];?>" required>     </label>

                <label for="references">Any References <input type="text" name="refer" value="<?php echo $arrdata['Refer'];?>"></label>

                <label for="jobposting">Job Posting<input type="text" name="post" value="<?php echo $arrdata['Post'];?>"></label>
            </fieldset>
           
            <input type="submit" name="submit" value="Update"></input>
            <a href="display.php" target="_blank">Check Form </a>
        </form>
    </main>

    <?php include 'scripts.php' ?>
  </body>
</html>

