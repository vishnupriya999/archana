<?php
session_start();
?>
<html>
<head>
<title>myaccount</title>
<style>
body{
	background-image:url(pic.png);
	background-size:cover;
	no-repeat:none;

}
div{
margin-top:200px;
margin-left:450px;
}
h1{
	border:2px black groove;
	background-color:purple;
	padding-left:500px;
}
a{
border:5px groove black;
border-size:5px;
float:right;
background-color:rgb(0,255,255);
text-decoration:none;
}
</style>
</head>
<body>
<h1>MY ACCOUNT</h2>
<a href="index.php">LOG OUT</a>
<div>
<?php
if(isset($_POST["submit"]))
{
$e=$_SESSION["email"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"webproject_510");
$query="SELECT email,sname,phoneno from signin where email='$e'";
echo "<table border='2'>";
if($result=mysqli_query($con,$query)){
    if(mysqli_num_rows($result)>0){
            echo "<tr>";
                echo "<th>email</th><th>sname</th><th>phoneno</th>";  
            echo "</tr>";
   while($row = mysqli_fetch_array($result)){
                echo "<tr><td> {$row['email']} </td><br> <td> {$row['sname']} </td> <td> {$row['phoneno']} </td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
}
} 
}
?>
</div>
</body>
</html>