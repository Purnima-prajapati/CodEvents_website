<?php
//    if(isset($Username) || isset($Email) || isset($Password)){//
    $Username= $_POST['Username'];
    $Email= $_POST['Email'];
    $Password= $_POST['Password'];

    header("Location: home.php");
    $conn =new mysqli('localhost','root','','signup');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt =$conn->prepare("insert into users(Username,Email,Password)
        values(?,?,?)");
        $stmt->bind_param("ssi",$Username,$Email,$Password);
        $stmt->execute();
        echo"SignUp Successful....";
        $stmt->close();
        $conn->close();
 
   }
   
//}//
?>

