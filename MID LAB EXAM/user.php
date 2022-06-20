<?php
    if(isset($_COOKIE['status'])){
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <center>
        <h3><i>USERS HOME PAGE</i></h3>
        <h2><i>WELCOME RAHUL</i></h2>
    </center>
    <center>
        <a href="userList.php">profile</a><br>
        <a href="logout.php">Logout</a><br>
    </center>
    
    
</body>
</html>
<?php }
else{
    echo"Invalid request";
}
?>