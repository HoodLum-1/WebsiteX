<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/09
 * Time: 11:01 PM
 */

//if user has cookie
if (isset($_COOKIE['web'])){
    //loads user cookie session
    header("Refresh:0.5; url=enter.php");

//if user does not have
}else{
    echo "";
    }
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website X -- Home</title>
    <meta name=" viewport" content="width=device-width, initial=scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet" media="screen">
</head>

<body id="home">

<section class="container">
    <div class="content row">
        <?php include "components/php/header.php"; ?>
        <?php include "components/php/carousel.php"; ?>
        <section class="main col col-sm-8">
            <?php include "components/php/article-intro.php"; ?>
            <?php include "components/php/article-intro.php"; ?>
            <?php include "components/php/article-intro.php"; ?>
        </section><!-- main -->
        <section class="sidebar col col-lg-4">
            <?php include "components/php/aside-register.php"; ?>
            <?php include "components/php/aside-login.php"; ?>
        </section><!-- sidebar -->
    </div><!-- content -->
    <?php include "components/php/footer.php"; ?>
</section><!-- container -->
<?php //include "components/php/footer.php"; ?>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>