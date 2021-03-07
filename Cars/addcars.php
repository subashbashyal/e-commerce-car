<?php
include_once('../dbConn.php');

//check email exizt or not
if(isset($_POST['checkemail']) && isset($_POST['email'])){
    $email = $_POST['email'];
  $sql = "SELECT p_email FROM pcars WHERE p_email = '".
  $email."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}



if(isset($_POST['username']) && isset($_POST['email'])  && isset($_POST['phone']) && isset($_POST['password'])){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];

    $sql="INSERT INTO pcars(p_usename, p_email, p_phone, p_pass) VALUES('$username','$email','$phone','$password')";

    if($conn->query($sql) == TRUE){
        echo json_encode("ok");
    } else{
        echo json_encode("failed");
    }
}
//student Login verification
if(isset($_POST['checkLogemail']) && isset($_POST['LogEmail']) && isset($_POST['LogPass'])){
    $LogEmail = $_POST['LogEmail'];
    $LogPass = $_POST['LogPass'];
    $sql ="SELECT p_email, p_pass FROM pcars WHERE p_email ='".$LogEmail."' AND p_pass ='".$LogPass."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    if($row == 1){
        echo json_encode($row);
    } else if($row === 0){
        echo json_encode($row);
    }
}

?>