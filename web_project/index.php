<?php
session_start();
?>
<html>
<head>
<title>myaccount</title>
<style>
.aa{
width:300px;
height:250px;
background-color:rgba(0,0,0,0.5);
margin:0 auto;
margin-top:20px;
padding-top:90px;
padding-left:50px;
border-radius:15px;
-webkit-border-radius:15px;
-o-border-radius:15px;
box-shadow:inset -4px -4px rgba(0,0,0,0.4);
}
.aa input[type="text"]
{
width:230px;
height:35px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
padding-left:10px;
font-weight:bolder;
}
.aa input[type="email"]
{
width:230px;
height:35px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
padding-left:10px;
font-weight:bolder;

}
.aa input[type="password"]
{
width:230px;
height:35px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
padding-left:10px;
font-weight:bolder;
}
.aa input[type="submit"]
{
width:200px;
height:35px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
background-color:skyblue;
font-weight:bolder;
}
a{
color:white;
text-decoration:none;
}
h3{
color:white;
font-weight:bolder;
font-size:15px;
}
body
{
background-image:url(entry1.jpg);
background-size:cover;
font-family:sans-serif;
font-size:20px;
font-weight:bold;
}
</style>
<script>
function pwd_valid()
{
var y=prompt("enter the valid password");
f1.pass.value=y;
f1.submit.focus();
var password=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[6a-zA-Z0-9])(?!.*\s).{8,}$/;
if(y.match(password))
{
return true;
}
else
{
alert("Must contain atleast one number and one uppercase and lowercase, and atleast 8 or more characters");
f1.psw.focus();
return false;
}
}
function mail_validate()
{
var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(f1.mail.value.match(mailformat))
{
f1.phno.focus();
return true;
}
else{
alert("You have entered an invalid email address!!!");
f1.mail.focus();
return false;
}
}
</script>
</head>
<body>
<img  style="margin-left:1150px;margin-top:-70px"src="img.png" alt="" width="250px" height="200px">
<marquee width="100%" style="margin-top:-50px"><b><i><h4><span style="color:white">Welcome To PlantPlan!!! <br><pre>       <span style="color:yellow">Please Signin to see the Webpage*---*</i></h4></marquee>
<div class="aa">
<form name="f1" action="index.php" method="POST">
<h4 style="margin-top:-50px;padding-left:65px;color:white"> LOGIN </h4>
<input type="email" name="mail"  placeholder="Email address" onchange="return mail_validate()"><br><br>
<input type="password"  name="pass"  placeholder="Password"   onfocus="pwd_valid()"><br><br>
<input type="submit" name="submit" value="LOGIN">

<h3><a href="forgot%20password.html">1.Forgot Password?</a><br>
 Don't have an Account!! <br> <i>Please Click here to <a  style="color:yellow" href="login.php">Sign In</a></i></h3>
</form>
</div>
<?php
if(isset($_POST["submit"]))
{
$email=$_POST["mail"];
$password=$_POST["pass"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"webproject_510");
$query="insert into signin values('$email','$password')";
if($email!=""&&$password!="")
	{
		$sql="SELECT email,password FROM signin WHERE email='$email' AND password='$password'";
		$res=$con->query($sql);
		if($res->num_rows==1)
		{
			$_SESSION["email"]=$email;
			header("location:web_project.php");
		}
		else
		{?>
			<script>
				alert("Invalid User or Password");
			</script>
	<?php
		}
	}
	else
	{
		?>
		<script>
		alert("Please Enter all the Details");
	</script>
	<?php
	}
}
?>
</body>
</html>