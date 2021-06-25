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
        $company    =  $_POST['Company'];
        $idno    =  $_POST['idno'];
        $last_name  =  $_POST['last_name'];
        $first_name    =  $_POST['first_name'];
        $middle_name  =  $_POST['middle_name'];
        $suffix  =  $_POST['suffix'];
        $common_route  =  $_POST['route'];

           if (empty($_POST['Company'] && $_POST['idno'] && $_POST['last_name'] && $_POST ['first_name']))
           {
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            header('Location:shuttle_monitoring.php'); 
           }
          else{
            $sql = "INSERT INTO employees (company, idno, last_name, first_name, middle_name, suffix, common_route) VALUES    ('$company', '$idno', '$last_name', '$first_name', '$middle_name', '$suffix', '$common_route')";
            if(mysqli_query($conn,$sql))    
            {
             header('Location:shuttle_monitoring.php');   
            }
            else
           {  
           echo "Error" . $sql  . " " .mysqli_error($conn);
           
           }
         mysqli_close($conn);

          }
     }
?>