<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/09
 * Time: 11:01 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website X -- About</title>
    <meta name=" viewport" content="width=device-width, initial=scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet" media="screen">
</head>
<body id="about">

<section class="container">
    <div class="content row">
        <?php include "components/php/header.php"; ?>
        <section class="main col col-lg-8">
            <?php include "components/php/AboutWebsiteX.php"; ?>
        </section><!-- main -->
        <section class="sidebar col col-lg-4">
            <br>
            <?php include "components/php/aside-register.php"; ?>
            <?php include "components/php/aside-login.php"; ?>

        </section><!-- sidebar -->
    </div><!-- content -->
    <?php include "components/php/footer.php"; ?>
</section><!-- container -->

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
</body>
</html>