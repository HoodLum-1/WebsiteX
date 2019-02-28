<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/11
 * Time: 10:57 AM
 */

if ($_POST) {
    session_start();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = md5($_POST['password']);

    if ($_SESSION['username'] && $_SESSION['password']){

        $con = mysqli_connect("localhost", "root", "") or die ("Problem with connection...");
        mysqli_select_db($con, "website");

        $query = mysqli_query($con,"SELECT * FROM users WHERE name='".$_SESSION['username']."'");
        $numrows  = mysqli_num_rows($query);

        if ($numrows != 0) {
            while ($row = mysqli_fetch_assoc($query)){
                $dbname = $row['name'];
                $dbpassword = $row['password'];

            }
            if ($_SESSION['username'] == $dbname) {
                if ($_SESSION['password'] == $dbpassword){
                    if (($_POST['remember']) == 'on'){
                        $expire = time()+864000;
                        setcookie('web', $_POST['username'], $expire);
                    }
                    header('location: ../../enter.php');
                }else{
                    echo "<script>alert('Your Password is incorrect')</script>";
                }
            }else{
                echo "<script>alert('Your Username is incorrect')</script>";
            }
        }else{
            echo "<script>alert('This user is not registered please register')</script>";
        }
    }else{
        echo "<script>alert('Please use valid login details')</script>";
    }
}else{
    echo "<script>alert('Access denied!')</script>";
    exit;
}

mysqli_close($con);
