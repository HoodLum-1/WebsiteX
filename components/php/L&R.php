<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/10
 * Time: 7:55 AM
 */
?>

<div class="container">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-login">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="#" class="active" id="login-form-link" ">Login</a>
                    </div>
                    <div class="col-xs-6">
                        <a href="#" id="register-form-link">Register</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
<!--                        <a href="enter.php">Logged on</a>-->

                        <!-- Login form-->

                        <form id="login-form" action="components/php/login.php" method="post" role="form" style="display: block;">
                            <div class="form-group">
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group text-center">
                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                <label for="remember"> Remember Me</label>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form><!--end login form-->

                        <!-- Register Form -->

<!--                        <form method="post" action="insert.php" id="register-form"  role="form" style="display: none;">-->
<!--                            name: <input type="text" name="name"><br>-->
<!--                            email: <label>-->
<!--                                <input type="text" name="email">-->
<!--                            </label><br>-->
<!--                            password: <input type="password" name="password"><br>-->
<!--                            confirm Password: <input type="password" name="cpassword"><br>-->
<!--                            <p>-->
<!---->
<!--                                <input type="submit" value="register"><br>-->
<!---->
<!--                        </form>-->

<!--                        ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

                        <form method="post" action="components/php/registerR.php" id="register-form" role="form" style="display: none;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>First Name</label>
                                        <input type="text" placeholder="Enter First Name Here..." class="form-control" name="name">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Enter Last Name Here..." class="form-control" name="lastname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea placeholder="Enter Address Here..." rows="3" class="form-control" name="address"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>City</label>
                                        <input type="text" placeholder="Enter City Name Here..." class="form-control" name="city">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Province</label>
                                        <input type="text" placeholder="Enter Province Here..." class="form-control" name="province">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Zip</label>
                                        <input type="text" placeholder="Enter Zip Code Here..." class="form-control" name="zip">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>University</label>
                                        <input type="text" placeholder="Enter University Here..." class="form-control" name="university">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Course</label>
                                        <input type="text" placeholder="Enter Course Name Here..." class="form-control" name="course">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Phone Number</label>
                                        <input type="text" placeholder="Enter Phone Number Here..." class="form-control" name="phone">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Email Address</label>
                                        <input type="text" placeholder="Enter Email Address Here..." class="form-control" name="email">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" id="rpassword"  class="form-control" placeholder="Password"">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Confirm Password</label>
                                        <input type="password" name="cpassword" id="crpassword"  class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-danger" value="Register Now">
                                        </div><!--end colomn-->
                                    </div><!--end row-->
                                </div><!--end form group-->
                            </div><!--end column sm 12-->
                        </form><!--End register form-->
                    </div><!--end sm md lg column-->
                </div><!--end row-->
            </div><!--end panel body-->
        </div><!--end panel-->
    </div><!--end column-->
</div><!--End Container-->
