<<<<<<< HEAD
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

<form method="post" action="insert.php"> 
  
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



=======
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $nameErr1 = $emailErr = $genderErr = $websiteErr = "";
$name = $name1 = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "First name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }


   if (empty($_POST["lastname"])) {
    $nameErr1 = "Last name is required";
  } else {
    $name1 = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
      $nameErr1 = "Only letters and white space allowed";
    }
  }
  

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First name: <input type="text" name="firstname" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lastname" value="<?php echo $name1;?>">
  <span class="error">* <?php echo $nameErr1;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
>>>>>>> 4fb260a40f22e3975bc8698e5146eb9748dcbe31

</body>
</html>