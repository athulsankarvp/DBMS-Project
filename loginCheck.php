<?php
session_start();

$inputEmail = $_POST['email'];
$inputPassword = $_POST['pwd'];

include('connection.php');

$sql = "SELECT * FROM userinfo ";
$result = mysqli_query($conn,$sql);

$mail = mysqli_fetch_all($result);

foreach($mail as $athul){
    if(($inputEmail == $athul[3]) and ($inputPassword == $athul[4])){
        // $loginFlag = true;
        $_SESSION['user'] = $athul[1];
        $_SESSION['usertoken'] = $athul[0];
        header('Location:index.php');
    }else{
         $loginFlag = "false";
    }

}

?>