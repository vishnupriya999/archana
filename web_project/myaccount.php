<?php
session_start();
?>
<html>
<head>
<title>myaccount</title>
<style>
body
{
background-image:url(plant5.jpg);
background-size:cover;
}
.aa{
width:250px;
height:100px;
background-color:rgba(0,0,0,0.5);
margin:0 auto;
margin-top:150px;
padding-top:90px;
padding-left:50px;
border-radius:15px;
-webkit-border-radius:15px;
-o-border-radius:15px;
box-shadow:inset -4px -4px rgba(0,0,0,0.4);
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
h4{
color:white;
font-weight:bolder;
}
</style>
</head>
<body>
<div class="aa">
<h4 style="margin-top:-50px;padding-left:50px"> MY ACCOUNT</h4>
<form method="POST" action="myaccount1.php">
<input type="submit" name="submit" value="VIEW MY ACCOUNT">

</form>
</div>
</body>
</html>