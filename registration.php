<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>User Signup | Groove Developers</title>
    <!-- Meta-Tags -->
    <link rel="icon" href="http://groovedevelopers.com/Storage/favicon.png" type="image/gif" sizes="16x16">
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
<script type="text/javascript" src="js/countries.js"></script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=236231987134231&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    
    <h1 class="title-agile text-center">Groove Developers</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
            <h2>Register Here <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>

            <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
            <hr>


<?php
    require('db.php');

    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $phone_num = stripslashes($_REQUEST['phone_num']);
        $phone_num = mysqli_real_escape_string($con,$phone_num);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con,$address);
        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($con,$city);
        $country = stripslashes($_REQUEST['country']);
        $country = mysqli_real_escape_string($con,$country);
        $reg_date = date("Y-m-d H:i:s");

$query = "SELECT username FROM users_details WHERE username='".$username."'";
$results = mysqli_query($con, "SELECT Count(*) FROM users_details WHERE username=$username");
   

   if (mysql_num_rows($query) != 0)
   {
     echo "Username already exists";
    }

    else
   {
     
    
        
        $query = "INSERT into users_details (username, password, email, account_type, phone_num, address, city, country, reg_date, payment_mode, payment_mail, profile_img)
         VALUES ('$username', '".md5($password)."', '$email', 'CUSTOMER', '$phone_num', '$address', '$city', '$country', '$reg_date', 'Paypal', '$email', 'p1.jpg')";


  $result = mysqli_query($con,$query);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            header("Location: main/"); // Redirect user to index.php
        }
    }
 }
 ?>
  <form name="registration" action="registration.php" method="post" autocomplete="off">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="username" id="text1" type="text" value="" placeholder="Username" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="email" id="email" type="email" value="" placeholder="Email" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="myInput" type="Password" placeholder="Password">
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-tty" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="phone_num" id="text" type="text" placeholder="Phone Number">
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-address-card" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="address" id="text" type="text" placeholder="Address">
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="city" id="text" type="text" placeholder="City">
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                    <div class="wthree-field autocomplete">
                        <input name="country" id="myInput" type="text" placeholder="Country">
                    </div>
                </div>

                <div class="wthree-field">
                    <input id="submit" name="submit" type="submit" value="Register" />
                </div>
                <div class="account">
                    <p class="text-center">Already have an account ? <a href="index.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="copyright text-center">
       <p>© <?php print(date('Y')); ?> | <a href="http://groovedevelopers.com/" target="_blank">Groove Developers</a></p>
    </div>



</body>
<!-- //Body -->
</html>
