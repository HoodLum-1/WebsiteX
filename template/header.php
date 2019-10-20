<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--  <head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website X -- Buy</title>
    <meta name=" viewport" content="width=device-width, initial=scale=1.0">

    <title><?php echo $title; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet" media="screen">
</head>
<body>

<section class="container">
    <div class="content row">
<!--    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
<!--<!--    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">-->
<!--    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">-->
<!--  </head>-->
<!---->
<!--  <body>-->

<div class="content row">
    <div class="col col-lg-12">
        <header class="clearfix">
            <section id="branding">
                <a href="enter.php"><img src="images/misc/ralogo_monogram.png" alt="Logo for Website x"></a>
<!--                <a href="enter.php"><h3>Midbooks</h3></a>-->
            </section><!-- branding -->

            <section class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li><a href="enter.php">Home</a></li>
                    <li><a href="buy.php">Books</a></li>
                    <li><a href="sell.php">Sell Books</a></li>
                    <li><a href="aboutlogged.php">About</a></li>
                    <li><a href="contactuslogged.php">Contact Us</a></li>
                    <li><a href="cart.php">Cart</a></li>
                </ul><!-- nav -->
            </section><!-- navbar -->
        </header><!-- header -->
    </div><!-- column -->
</div><!-- content -->

<!--    <nav class="navbar navbar-inverse navbar-fixed-top">-->
<!--      <div class="container">-->
<!--        <div class="navbar-header">-->
<!--          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
<!--            <span class="sr-only">Toggle navigation</span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--          </button>-->
<!--          <a class="navbar-brand" href="enter.php">MidBooks Bookstore</a>-->
<!--        </div>-->
<!---->
<!--        <!--/.navbar-collapse -->
<!--        <div id="navbar" class="navbar-collapse collapse">-->
<!--          <ul class="nav navbar-nav navbar-right">-->
<!--              <!-- link to publiser_list.php -->
<!--              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>-->
<!--              <!-- link to books.php -->
<!--              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>-->
<!--              <!-- link to contacts.php -->
<!--              <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>-->
<!--              <!-- link to shopping cart -->
<!--              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--      </div>-->
<!--    </nav>-->

    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
<!--    <div class="jumbotron">-->
<!--      <div class="container">-->
<!--        <h1>Welcome to online CSE bookstore</h1>-->
<!--        <p class="lead">This site has been made using PHP with MYSQL (procedure functions)!</p>-->
<!--        <p>The layout use Bootstrap to make it more responsive. It's just a simple web!</p>-->
<!--      </div>-->
<!--    </div>-->
    <?php } ?>

    <div class="container" id="main">