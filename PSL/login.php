<?php

    session_start();

    $con = mysqli_connect("localhost", "vk", "123", "cricket") or die(mysqli_error($con));

    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $_SESSION['user'] = $username;

function getusername(){

return $username;

}

    $check_u = "select * from login where username ='$username'";
    $res_u = mysqli_query($con,$check_u) or die(mysqli_error($con));
    $check_p = "select * from login where username = '$username' and password = '$password'";
    $res_p = mysqli_query($con,$check_p) or die(mysqli_error($con));

    if(mysqli_num_rows($res_u)==0)
    {
      echo "<script type='text/javascript'>alert('Incorrect username!!');</script>";
      header("refresh: 0.01; url=login.html");
    }

    if(mysqli_num_rows($res_p)==0)
    {
      echo "<script type='text/javascript'>alert('Incorrect password!!');</script>";
      header("refresh: 0.01; url=login.html");
    }

    else
    {
     // echo "<script type='text/javascript'>alert('Logged in successfully!!');</script>";
      header("refresh: 0.01; url=user1st.html");
    }
?>

