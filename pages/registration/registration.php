<?php 
   $FName = $_POST['FName']; 
   $LName = $_POST['LName'];  
   $gender = $_POST['gender']; 
   $contact = $_POST['C_no']; 
   $street = $_POST['street']; 
   $pin = $_POST['pin'];
   $email = $_POST['email']; 
   $password = $_POST['password']; 
  
    //Database connection

    $conn = new mysqli("localhost", "root","","Website");
    if($conn->connect_error){
        die("Failed to connect:".$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into user_details(FName, LName, gender, C_No, street, pin)values(?,?,?,?,?,?)");
        $stmt->bind_param("sssisi",$FName, $LName, $gender, $contact, $street, $pin);
        $stmt->execute();
        $uid = mysqli_insert_id($conn);
        echo "Registration Successful";
        // $stmt = $conn->prepare("insert into user_login(u_id, email, password)values(?,?,?)");
        // $stmt->bind_param("iss",$uid, $email, $password);
        // $stmt->execute();
        // echo "Registration Successful";
        $stmt->close();
        $conn->close();
    }
?>