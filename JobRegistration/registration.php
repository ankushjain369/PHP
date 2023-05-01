<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
    <?php  include 'links.php' ?>
    <?php include 'registration.css' ?>
  </head>
  <body>
    <head>
        <h1>Registration Form</h1>
        <p>Please Fill Out the form with required information</p>
    </head>
    <main>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <label for="fname">Name <input type="text" name="name" required>     </label>
                <label for="degree">Qualification<input type="text" name="degree">     </label>
                <label for="phone">Phone <input type="tel" name="mobile" required>     </label>
                <label for="email">Email <input type="email" name="email" required>     </label>
                <label for="language">Enter a language<input type="text" name="lang"></label>
                <label for="picture">Upload profile picture<input type="file" name="pic" required></label>
            </fieldset>
           
            <input type="submit" name="submit" value="Register"></input>
            <a href="display.php" target="_blank">Check Form </a>
        </form>
    </main>

    <?php include 'scripts.php' ?>
  </body>
</html>

