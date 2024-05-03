<?php
 require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];


// function asd(){
//             echo '<script>message("Uspeshnaya regitratsiya")</script>'; 
// };
// echo ".!.";
if(empty($login) || empty($pass) || empty($repeatpass) || empty($email)){
    echo "Zapolnite vse polya";
}else{
    if($pass != $repeatpass){

        echo"Paroli ne socpadayut";    // header("Location: http://localhost/new/car/index.php");   
    }else{
        $sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass', '$email')";
        if($conn -> query($sql) === TRUE){
            echo "Uspeshnaya registratsiya";
            // header("Location: http://localhost/new/car/login.php");    
        }else{
            echo "Oshibka". $conn->error;
        }
    }
}