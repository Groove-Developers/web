
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>User login|Groove Developers</title>
    <link rel="icon" href="http://groovedevelopers.com/Storage/favicon.png" type="image/gif" sizes="16x16">
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Border Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
	
	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">

	<!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

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
    <h1 class="title-agile text-center">Groove Developers</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
			<h2>Login <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>

            <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
            <hr>

            <form action="" method="post" name="login">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="username" id="text1" type="text" value="" placeholder="Username" required>
                    </div>
                </div>
                
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="myInput" type="Password" placeholder="Password">
                    </div>
                </div>
                <div class="wthree-field">
                    <input id="submit" name="submit" type="submit" value="Login" />
                </div>
				<div class="account">
					<p class="text-center">Don't have an account ?<a href="registration.php">sign up</a></p>
				</div>
            </form>
        </div>
    </div>
    <?php } ?>
    <div class="copyright text-center">
        <p>© <?php print(date('Y')); ?> | <a href="http://groovedevelopers.com/" target="_blank">Groove Developers</a></p>
    </div>
</body>
<!-- //Body -->
</html>
