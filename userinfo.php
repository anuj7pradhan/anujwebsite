<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo"Connection successful";
}else{
   echo"No Connection";
}
mysqli_select_db($con, 'ostapacheignite');
$user = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfo (user, email, mobile, comment) 
values ('$user','$email','$mobile','$comments')";
echo "$query";

mysqli_query($con,$query);

header('location:index.php')

?>