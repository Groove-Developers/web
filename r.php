<?php
ob_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
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
        $first_name = stripslashes($_REQUEST['first_name']);
        $first_name = mysqli_real_escape_string($con,$first_name);
        $middle_name = stripslashes($_REQUEST['middle_name']);
        $middle_name = mysqli_real_escape_string($con,$middle_name);
        $last_name = stripslashes($_REQUEST['last_name']);
        $last_name = mysqli_real_escape_string($con,$last_name);
        $account_type = stripslashes($_REQUEST['account_type']);
        $account_type = mysqli_real_escape_string($con,$account_type);
        $phone_num = stripslashes($_REQUEST['phone_num']);
        $phone_num = mysqli_real_escape_string($con,$phone_num);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con,$address);
        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($con,$city);
        $country = stripslashes($_REQUEST['country']);
        $country = mysqli_real_escape_string($con,$country);
        $payment_mode = stripslashes($_REQUEST['payment_mode']);
        $payment_mode = mysqli_real_escape_string($con,$payment_mode);
        $payment_mail = stripslashes($_REQUEST['payment_mail']);
        $payment_mail = mysqli_real_escape_string($con,$payment_mail);
        $profile_img = stripslashes($_REQUEST['profile_img']);
        $profile_img = mysqli_real_escape_string($con,$profile_img);
		$reg_date = date("Y-m-d H:i:s");


        
        $query = "INSERT into users_details (username, password, email, first_name, middle_name, last_name, account_type, phone_num, address, city, country, reg_date, payment_mode, payment_mail, profile_img)
         VALUES ('$username', '".md5($password)."', '$email', '$first_name', '$middle_name', '$last_name', 'CUSTOMER', '$phone_num', '$address', '$city', '$country', '$reg_date', 'Paypal', '$email', 'p1.jpg')";


  $result = mysqli_query($con,$query);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
        ?>
    	
<form name="registration" action="" method="post">
<div class="form">
<h1>Registration</h1>
<input type="text" name="username" placeholder="Username" id="username" required />
<input type="email" name="email" placeholder="Email" id="email" required />
<input type="password" name="password" placeholder="Password" id="password" required />
<input type="text" name="first_name" placeholder="First Name" required />
<input type="text" name="middle_name" placeholder="Middle Name" required />
<input type="text" name="last_name" placeholder="Last Name" required />
<input type="text" name="phone_num" placeholder="Phone Number" required />
<input type="text" name="address" placeholder="Address" required />
<input type="text" name="city" placeholder="City" required />
<input type="text" name="country" placeholder="Country" required />
<input type="submit" name="submit" value="Register" />

<p>Registered? <a href='index.php'>Login Here</a></p>

</div>
</form>
<?php
 }?>




</body>
</html>
