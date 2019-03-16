<?php 
session_start();
?>
<html>
<head>
<title>login</title>
<style>
body
{
background-image:url(login.jpg);
background-size:cover;
}
.aa{
width:300px;
height:270px;
background-color:rgba(0,0,0,0.5);
margin:0 auto;
margin-top:40px;
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
.aa input[type="phoneno"]
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
a
{
color:white;
text-decoration:none;
}
h4
{
color:white;
font-weight:bolder;
}
</style>
<script>
function cal()
{
 var pattern=/^[A-Za-z]+$/;
 if(f1.sname.value.match(pattern))
{
return true;
}
else
{
alert("must contains only alphabets characters");
f1.sname.focus();
return false;
}

}
function phn_valid()
{
var x=prompt("enter the phone number(exactly 10 digits)");
f1.phno.value=x;
f1.submit.focus();
if(x.length<10 ||x.length>10)
{
alert("Must contain only 10 numbers");
f1.phno.focus();
}
else{
alert("entered pattern is correct"); 
return true;
}
}
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
function mail_validate(phno)
{
var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(f1.mail.value.match(mailformat))
{
f1.pass.focus();
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
<div class="aa">
<form name="f1" action="login.php" method="POST" >
<h2 style="margin-top:-50px;padding-left:65px;color:white">SIGN IN </h2>
<input type="email" name="mail" placeholder="Email address" onchange="mail_validate()"><br><br>
<input type="password" name="pass" placeholder="Password" onfocus="return pwd_valid();"><br><br>
<input type="text" name="sname" placeholder="Name" onchange="return cal()" required><br><br>
<input type="phoneno" name="phno" placeholder="Phone No" onfocus="phn_valid()"><br><br>
<input type="submit"  name="submit" value="SIGN IN">
</form>
<?php
if(isset($_POST["submit"]))
{
$email=$_POST["mail"];
$password=$_POST["pass"];
$text=$_POST["sname"];
$phoneno=$_POST["phno"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"webproject_510");
$query="insert into signin values('$email','$password','$text','$phoneno')";
$res=mysqli_query($con,"$query");
header("location:web_project.php");
}
?>
</body>
</html>
