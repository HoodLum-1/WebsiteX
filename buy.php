<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/12
 * Time: 12:46 AM
 */

include 'components/php/sesStart.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website X -- Buy</title>
    <meta name=" viewport" content="width=device-width, initial=scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet" media="screen">
</head>
<body id="buy">

<section class="container">
    <div class="content row">
<!--        --><?php //include "components/php/headerlogged.php"; ?>
<!--        --><?php //include 'components/php/session.php'; ?>
        <section class="main col col-lg-12">
<!--            --><?php //include "components/php/buysearch.php"; ?>
            <?php include "books.php"; ?>

        </section><!-- main -->
<!--        <section class="sidebar col col-lg-4">-->
<!--            <br>-->
<!--            --><?php //include "components/php/aside-buy.php"; ?>
<!--            --><?php //include "components/php/aside-sell.php"; ?>
<!---->
<!--        </section><!-- sidebar -->
    </div> <!-- content -->
<!--    --><?php //include "components/php/footer.php"; ?>
</section><!-- container -->

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
</body>
</html>


