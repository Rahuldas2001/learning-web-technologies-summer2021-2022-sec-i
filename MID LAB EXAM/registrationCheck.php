<?php

    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];
    $name = $_REQUEST['name'];
    $usertype = $_REQUEST['usertype'];

    if($id==null && ($password != cpassword)){
        echo "Invalid input";
    }else{
        $date = $id"|",$password"|",$cpassword"|",$name"|",$usertype"\r\n";
        $file = fopen('user.txt','a');
        fwrite($file,$date);
        header('location: Login.html');
        
    }


?>