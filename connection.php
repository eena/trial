
<?php

$db = mysqli_connect("localhost","root","","shuttle_monitoring");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>