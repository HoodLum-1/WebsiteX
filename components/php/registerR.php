<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/11
 * Time: 12:27 PM
 */

//Register form request variables
$fname = $_REQUEST['name'];
$lname = $_REQUEST['lastname'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$province = $_REQUEST['province'];
$zip = $_REQUEST['zip'];
$university = $_REQUEST['university'];
$course = $_REQUEST['course'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];

//checks if users entered mandatory the fields
if ($fname && $email && $password && $cpassword){
    //validates user email
    if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
        //checks password length
        if (strlen($password) > 3){
            //checks if passwords match
            if ($password == $cpassword){
                //connects to database
                $con = mysqli_connect("localhost", "root", "") or die (mysqli_error($con));
                mysqli_select_db($con, "websiteO");

                //database variables to check is user registered already
                $username = mysqli_query($con, "SELECT name FROM users WHERE name = '$fname'");
                $count = mysqli_num_rows($username);
                $userlname = mysqli_query($con,"SELECT lName FROM users WHERE lName = '$lname'");
                $checklname = mysqli_num_rows($userlname);
                $remail = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'");
                $checkemail = mysqli_num_rows($remail);

                //md5 encryption for password
                $passwordmd5 = md5($password);

                //inserts the data into database
                mysqli_query($con, "INSERT INTO users(name,lName,email,cellNum,city,province,address,zipCode,university,course,password)
                VALUES('$fname','$lname','$email','$phone','$city','$province','$address','$zip','$university','$course','$passwordmd5')");
                echo "You have successfully registered! Redirecting to <a href='../../register.php'>Home page";
                header("Refresh:2; url=../../enter.php");
            }else{
                echo "<script>alert('Your Passwords do not match!')</script>";
            }
        }else{
            echo "<script>alert('Your password is too short! minimum of 4 and maximum of 15 characters allowed')</script>";
        }
    }else{
        echo "<script>alert('Please type a valid email!')</script>";
    }
}else{
    echo "<script>alert('You have to complete the form')</script>";
    header("Refresh:0 url=../../register.php");
}

mysqli_close($con);

