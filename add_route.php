<?php
$servername="localhost";
$username="root";
$password="";
$db = "shuttle_monitoring";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    if(isset($_POST['submit'])) 
    {
     //inserting data
        $destination   =  $_POST['route'];
        $fare   =  $_POST['fare'];


           if (empty($_POST['route'] && $_POST['fare']))           {
            header('Location:new_route.php');
            echo ("Failed to query database ".mysql_error());
           }
          else{
            $sql = "INSERT INTO route (destination, fare) VALUES    ('$destination', '$fare')";
            if(mysqli_query($conn,$sql))    
            {
             header('Location:new_route.php');   
            }
            else
           {  
           echo "Error" . $sql  . " " .mysqli_error($conn);
           header('Location:new_route.php');  
           
           }
         mysqli_close($conn);

          }
     }
?>