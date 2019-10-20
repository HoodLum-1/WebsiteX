<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2019/10/19
 * Time: 1:18 AM
 */

	if(!isset($_SESSION['admin']) && $_SESSION['admin'] != true){
        header("Location: index.php");
    }
