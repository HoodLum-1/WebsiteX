<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/11
 * Time: 2:10 PM
 */

$date = date('F d, Y');
$time = date('g: i: s ');
//$name = "Malesela";

//Checks if a user has cookie enabled
if (!isset($_SESSION['username']) && isset($_COOKIE['web'])) {
    $_SESSION['username'] = $_COOKIE['web'];
}

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-user'></span>&nbsp;<b>". $_SESSION['username'] . "</b>'s session<br> "; //Change $name to $_SESSION['username']'


//displays date time and log out button
echo "<section class='content col-sm-12'>
        <p><span class='glyphicon glyphicon-calendar'></span>Date: \".$date.\"<br><span class='glyphicon glyphicon-time'>
          </span> Time: \".$time <a class=' btn btn-danger panel-login pull-right glyphicon glyphicon-log-out' href='components/php/logout.php'>&nbsp;Logout</a><hr></p>
        </section>";




