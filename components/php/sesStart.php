<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2019/02/21
 * Time: 11:43 PM
 */

//
/*Starts the websites session on every page
 *Denies access to core web site page if user not logged in */

session_start();

if(!isset($_SESSION['username'])){
    echo "Access Denied";
    exit;
}
