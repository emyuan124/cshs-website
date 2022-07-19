<!DOCTYPE html>
<?php
include('dbconnect.php');

if(isset($_POST['submit']))
{
$msg= user_signup($_POST);
}

?>

<html>
<head> </head>

<body>

<section class="bg-grey">

<div class="main">
<div class="container">
<div class="col-md-12">
<div class="form-content-box">
<div class="login-header">
<h3 class="text-center"> Sign Up </h3>
</div>

<div class="Details">
<form action="" method="post">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Full Name" required>
</div>

<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email Address" required>
</div>

<div class="form-group">
<input type="text" class="form-control"  name="phone" placeholder="Mobile"
pattern="(\+?\d[- .]*){10,10}" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value =
this.value.replace(/(\..*)\./g, '$1');" title="Please Enter Your 10
digit vaild number!" required>
</div>



<div class="form-group text-center">
<button type="submit" name="submit" class="btn btn-submit">Signup</button>
</div>

</form>
</div>

<div class="login-footer">

</div>
</div>
</div>
</div>
</div>

<section>

<div class="clearfix"></div>

</body>
</html>

<?php

function user_signup($data){

$name = mysqli_real_escape_string($GLOBALS['db'],$data['name']);
$email = mysqli_real_escape_string($GLOBALS['db'],$data['email']);
$phone = mysqli_real_escape_string($GLOBALS['db'],$data['phone']);
$qry=mysqli_query($GLOBALS['db'],"select * from users where (email='$email' || phone='$phone') ");

if($qry->num_rows >0)
{
echo "<script>alert('Email Id or Phone Number already exists.')</script>";
}

else
{
$sql="INSERT INTO users(name,email,phone,password) VALUES('$name','$email','$phone')";
$query=mysqli_query($GLOBALS['db'],$sql) or die("Error 2".mysqli_error($GLOBALS['db']));
if($query)
{
$sms_msg
 = "Thank You for registering with us.<br>Regards,<br>onTime
 Infotech,<br>https://www.ontimeinfotech.com/";
echo "<script>alert('Congratulations!! Registration has been done successfully.')</script>";
echo '<script>window.location.href="login.php";</script>';
}
}
}
?>