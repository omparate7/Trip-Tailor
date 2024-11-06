<?php 


session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `user`( `Name`, `Email`, `Password`, `Phone`, `age`, `gender`) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        
        $stmt->bind_param("ssssis",$name,$email, $password, $phone, $dob, $gender);
        if ($stmt->execute()) {
            $_SESSION['UserID'] = $stmt->insert_id; // Store UserID in session
            header("../destinationType.html"); // Redirect to the next step
            exit();
        }else {
            echo "Error: ". $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();


}
?>