<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2019/02/22
 * Time: 12:47 AM
 */


$con = mysqli_connect("localhost", "root", "") or die ("Problem with connection...");
mysqli_select_db($con, "website");

$result = mysqli_query($con, "SELECT * FROM books");

echo "";

while($row = mysqli_fetch_array($result)) {
    echo $row['title']." ".$row['author']." ".$row['edition']." ".$row['publisher']." ".$row['isbn']." ".$row['price'];
    echo "<br>";
}

mysqli_close($con);
