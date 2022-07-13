<?php
$con = mysqli_connect('localhost', 'root');
if ($con) {
    echo "Connection successful";
} else {
    echo "No Connection";
}
mysqli_select_db($con, 'ostapacheignite');
$commentinfos = $_POST['comments'];

$query = " insert into commentinfo (commentinfos) 
values ('$commentinfos')";
echo "$query";

mysqli_query($con, $query);

header('location:index.php')
?>