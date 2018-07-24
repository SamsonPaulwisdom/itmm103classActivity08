<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>
<body>

  <?php

  $username = "";
  $firstname = "";
  $lastname = "";
  $email = "";
  $password = "";
  $confirmpass = "";
  $address = "";
  $number = "";

  $usernameErr = $firstnameErr = $lastnameErr = $emailErr = $passwordErr = $confirmpassErr = $addressErr = $numberErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

//user's name..
  if (empty($_POST['username'])) {
    $usernameErr = " * username is required!";
  }
  else{
    $username = $_POST['username'];
  }



  //first name..
  if (empty($_POST['firstname'])) {
    $firstnameErr = " * first name is required! <br>";
  }
  else{
    $firstname = $_POST['firstname'];
  }


if (empty($_POST['lastname'])) {
    $lastnameErr = " * last name is required! <br>";
  }
  else{
    $lastname = $_POST['lastname'];
  }

  if (empty($_POST['email'])) {
    $emailErr = " * email is required! <br>";
  }
  else{
     $email = $_POST['email'];
  }

if (empty($_POST['password'])) {
    $passwordErr = " * password is required! <br>";
  }
  else{
     $password = $_POST['password'];
  }

  if (empty($_POST['confirmpass'])) {
    $confirmpassErr = " * Confirm password is required! <br>";
  }
  else{
     $confirmpass = $_POST['confirmpass'];
  }


  if (empty($_POST['address'])) {
    $addressErr = " * address is required! <br>";
  }
  else{
    $address = $_POST['address'];
  }

  if (empty($_POST['number'])) {
    $numberErr = " * Mobile number is required! <br>";
  }
  else{
    $number = $_POST['number'];
  }



}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  
  Username: <input type="text" name="username">
  <?php echo $usernameErr; ?>
  <br>
  First Name:<input type="text" name="firstname"> 
<?php echo $firstnameErr; ?>
  <br>
  Last Name: <input type="text" name="lastname" >
<?php echo $lastnameErr; ?>
  <br>
  E-mail: <input type="email" name="email">
<?php echo $emailErr; ?>
  <br>
  Password: <input type="password" name="password" maxlength="10">
<?php echo $passwordErr; ?>
  <br>
  Confirm password: <input type="password" name="confirmpass">
<?php echo $confirmpassErr; ?>
  <br>
  Address : <input type="text" name="address">
  <?php echo $addressErr; ?>
  <br>
  Mobile Number: <input type="number" name="number">
<?php echo $numberErr; ?>
  <br>
  <input type="hidden" value="true" name="submitted">
  <input type="submit" value="Submit" name="submitbutton">


</form>




</body>
</html>