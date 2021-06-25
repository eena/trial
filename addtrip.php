<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "shuttle_monitoring";

$conn = mysqli_connect($servername, $username, $password,$db);
    
    if(isset($_POST['submit']))
    {
        $tripno = $_POST['ticketno'];
        $manifestno = $_POST ['manifestno'];
        $schedule = $_POST['sched'];
        $date = $_POST['date'];
        $time = $_POST['departure_time'];
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $noofpassenger = $_POST['noofpassenger'];
        $name_driver = $_POST['name_driver'];
        $plateno = $_POST['plateno'];
        $unit = $_POST['unitused'];
        $remarks = $_POST['remarks'];

        if(empty($_POST['ticketno'] && $_POST ['manifestno'] && $_POST['sched'] && $_POST['date'] && $_POST['departure_time'] && $_POST['origin'] && $_POST['destination'] && $_POST['noofpassenger'] && $_POST['name_driver'] && $_POST['plateno'])) {
            echo '<script>alert("Please Complete the details")</script>'. mysqli_error($conn);

        }
        $sql = "INSERT INTO tripticketdetails(tripticketno,manifestno, schedule, date, departuretime, origin, destination, noofpassengers, drivername, plateno, unitused, remarks) VALUES ('$tripno','$manifestno','$schedule','$date', '$time', '$origin', '$destination', '$noofpassenger', '$name_driver', '$plateno', '$unit', '$remarks')";
        if(mysqli_query($conn, $sql)) {
            header('location:tripdtls.php');
            echo "New record created successfully !";
            } else {
                header('location:tripdtls.php');
                echo "error:";
                die;
            } 
            mysqli_close($conn);        
    }





?>