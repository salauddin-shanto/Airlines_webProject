<?php

    include 'connection.php';
    
    $em=$_POST['email']; 
    $pass=$_POST['password'];
    $pass=md5($pass);

    $sql=" SELECT * from users where email='$em' AND password='$pass' ";
    $stmt=$conn->prepare($sql);
    $stmt->execute();

    foreach($result=$stmt->fetchall() as $key=>$val){
        $name=$val['name'];
        $phone=$val['phone'];
        $email=$val['email'];    
        $password=$val['password'];
        $nid=$val['nid'];
        $dob=$val['dob'];
        $address=$val['address'];
        $post_code=$val['post_code'];

    } 


    if($email != "" and $password !="")
    {

        $sql="UPDATE logged_user SET name = '$name', phone = '$phone', email='$email', password='$password', nid='$nid', dob='$dob', address='$address', post_code='$post_code'
        where id=1";

        $conn->exec($sql);

        
        header("Location: payment.php");
        exit();
        
    }

    else{
        echo "<script>alert('Incorrect Email/Password')</script>";
        //echo "<script>window.open('user_login.php','_self')</script>";
                
        header("Location: user_login.php?error=Incorect Username or Password");
        exit();

    }
 

    $conn=null;

?>
