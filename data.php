<?php


    $conn =new mysqli('sql305.epizy.com','epiz_31926538','m4uJ5Vo3y3Oo','epiz_31926538_regform');
    if($conn->connection_error){
        die('connection failed :');
    }else{
        
        $name = $_REQUEST["fullname"];
        $email = $_REQUEST['email'];
        $message=$_REQUEST['message'];

      

        $stmt = $conn->prepare("INSERT INTO tdata(name,email,message) VALUES(?,?,?)");
        $stmt->bind_param("sss",$name,$email,$message);


        $stmt->execute();
        echo "message sent";
        $stmt->close();
        $conn->close();
    }
?>