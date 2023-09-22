<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $password=$_POST['password']; 
    $mail=$_POST['mail']; 
    $number=$_POST['number']; 


$con=new mysqli('localhost','root','','second');
if($con){
    echo "connection successful";
    $sql="insert into `correct`(name,password,mail,number)values('$name','$password','$mail','$number')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully";
    }else{
        die(mysqli_error($con));

    }
}else{
    die(mysqli_error($con));
}
}
?>