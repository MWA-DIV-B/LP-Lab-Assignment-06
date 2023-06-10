<?php

    require_once('connection.php');

    if(isset($_POST['btn'])) {
        $UserName = mysqli_real_escape_string($con, $_POST['uname']);
        $Email = mysqli_real_escape_string($con,$_POST['email']);
        $Password = mysqli_real_escape_string($con,$_POST['pws']);
        $CPassword = mysqli_real_escape_string($con,$_POST['psw-repeat']);

        if (empty ($UserName) || empty ($Email) || empty ($Password) || empty ($CPassword)) {
            echo 'Please fill the blanks';
        }
        if ($Password!=$CPassword) {
            echo 'Password Not matched';
        }
        else{
            $Pass = md5($Password);
            $sql = "insert into user (UName, Email, Password) values('$UserName','$Email','$Pass')";
            $result = mysqli_query($con, $sql);

            if($result) {
                echo 'Your code has Been saved in the Database';
            } else {
                echo 'Please Check you Connection';
            }
        }
    }
?>