<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connection.php';
    $username=$_POST['loginUsername'];
    $password=$_POST['loginPassword'];
   
 $login=0;
 $invalid=0;

    $sql="Select * from `registerlogin` where username = '$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
           $login=1;
        }
        else{
         $invalid=1;
        }
    }
    echo json_encode(array('login' => $login, 'invalid' => $invalid));
}
?>