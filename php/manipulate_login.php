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

        session_start();
        $_SESSION["name"] = "$name";
        $_SESSION["phone"] = "$phone";
        $_SESSION["email"] = "$email";
        $_SESSION["password"] = "$password"; 
        $_SESSION["nid"] = "$nid";
        $_SESSION["dob"] = "$dob";
        $_SESSION["address"] = "$address";
        $_SESSION["post_code"] = "$post_code";

        echo '<script>
        alert("Login Successful\nGo to Payment to purchase your ticket. ");
        window.location.href = "payment.php";
        </script>';

 
         
    }

    else{
        echo '<script>
        alert("Incorrect Email/Password\nTry again");
        window.location.href = "user_login.php";
        </script>';

    }
 

    $conn=null;

?>
