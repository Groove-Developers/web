<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=236231987134231&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>






<?php


  require('db.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
    
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    
  //Checking is user existing in the database or not
        $query = "SELECT * FROM users_details WHERE account_type='CUSTOMER' and username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;

      header("Location: main/"); // Redirect user to index.php
            }else{
        header("Location: index.php");
        }
    }else{
?>
<div class="form">
<h1>Log In</h1>


<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>


<hr>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" autocomplete="off" required />
<input type="password" name="password" placeholder="Password" autocomplete="off" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />
<a href="http://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="http://www.allphptricks.com/">AllPHPTricks.com</a>
</div>
<?php } ?>



</body>
</html>
