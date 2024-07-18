<?php
    $subject =$_POST['subject'];
    $message =$_POST['message'];

    //Database connection
    $conn = new mysqli('localhost','root','Ajay@2028','test');
    if($conn->connect_error){

        die('connection Failed : ' .$conn->connect_error);

    }else{
            $stmt =$conn->prepare("insert into Registration (subject,message) values(?,?)" );
            $stmt->bind_param("ss",$subject,$message);
            $stmt->execute();
            echo "Registration successfully";
            $stmt->close();
            $conn->close();

    }

?>