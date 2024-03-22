<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connection.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $con_password=$_POST['con_password'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $languages=$_POST['languages'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $about=$_POST['about'];
 $success=0;
 $user=0;

    $sql="Select * from `registerlogin` where username = '$username'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $user=1;
        }
        else{
            $sql="insert into `registerlogin`(username,password,con_password,email,age,gender,languages,dob,address,about) values ('$username','$password','$con_password','$email','$age','$gender','$languages','$dob','$address','$about')";
    $result=mysqli_query($con,$sql);
    if($result){
       $success=1;
    }
    else{
        die(mysqli_error($con));
    }
        }
    }
    echo json_encode(array('success' => $success, 'user' => $user));

}
?>