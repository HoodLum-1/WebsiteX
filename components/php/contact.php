<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/10
 * Time: 12:26 AM
 */
?>

    <div class="section">
        <div class="top-border left"></div>
        <div class="top-border right"></div>
        <h1>CONTACT US</h1>

        <section id="contact" ">
            <div class="col-sm-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="col-sm-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>
            <form class="col col-lg-12 col-lg-offset-0.5" method="post" action="">
                <div class="form-group" >
                    <input class="form-control" placeholder="Insert your Name" type="text" name="name">
                </div>

                <div class="form-group">
                    <input class="form-control" placeholder="Insert your Email" type="email" name="email">
                </div>

                <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="text" name="subject">
                </div>

                <div class="form-group">
                    <textarea class="form-control" rows="10" name="message">Comments</textarea>
                </div>

                <div class="form-group">
                    <input class="btn btn-success btn-block" type="submit" name="submit" value="Send email">
                </div>
            </form>
        </section>
 </div>

<?php

if (isset($_REQUEST['submit'])){

    $name =  $_REQUEST['name'];
    $email =  $_REQUEST['email'];
    $subject =  $_REQUEST['subject'];
    $body =  $_REQUEST['message'];
    $to = "websitex@yahoomail.com";
    $headers = "From: $email;";

    if ($name && $email && $subject && $body){

        mail($to,$subject,$body,$headers);
        echo "<script>alert('Email has been sent!.')</script>";
        header("Refresh:2; url=enter.php");
    }else{
        echo "Please fill up all the fields!";
    }
}
?>