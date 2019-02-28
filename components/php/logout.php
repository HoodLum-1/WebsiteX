<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/11
 * Time: 1:01 PM
 */

session_start();
$expire = time()-864000;
setcookie('web', $_SESSION['username'], $expire);
session_destroy();

echo "<script>alert('Logged Out!');</script>";
header("Refresh:0.5; url=../../index.php");

