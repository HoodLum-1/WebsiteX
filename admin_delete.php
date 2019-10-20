<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2019/10/19
 * Time: 1:48 AM
 */


	$book_isbn = $_GET['bookisbn'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM books WHERE book_isbn = '$book_isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
        echo "delete data unsuccessfully " . mysqli_error($conn);
        exit;
    }
	header("Location: admin_book.php");
