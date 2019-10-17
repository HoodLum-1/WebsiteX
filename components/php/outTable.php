<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2019/02/22
 * Time: 12:47 AM
 */


$con = mysqli_connect("localhost", "root", "") or die ("Problem with connection...");
mysqli_select_db($con, "website");

$result = mysqli_query($con, "SELECT * FROM book") or die("error executing query");

echo " <table class=\"table\"  align=\"center\" border=\"2\">";
            echo "<tr>
                <th align=center bgcolor=\"#cd5c5c\">Title</th>
                <th align=center bgcolor=\"#add8e6\">Publisher</th>
                <th align=center bgcolor=\"#90ee90\">Edition</th>
                <th align=center bgcolor=\"#e0ffff\">ISBN #</th>
                <th align=center bgcolor=\"#e0ffff\">Date Published</th>
                <th align=center bgcolor=\"#778899\">Price</th>
                </tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>";
    echo $row['title'];
    echo "</td><td>";
    echo $row['publisher'];
    echo "</td><td>";
    echo $row['edition'];
    echo "</td><td>";
    echo $row["isbn"];
    echo "</td><td>";
    echo $row["date_published"];
    echo "</td><td>";
    echo $row["price"];
    echo "</td></tr>";
    echo "<br>";
}
echo "</table>";

/**
 * My logic
 */

//while ($row = mysqli_fetch_array($result)) {
////        echo $row['title'] . " " . $row['author'] . " " . $row['edition'] . " " . $row['publisher'] . " " . $row['isbn'] . " " . $row['price'];
//
//    echo $row['id'] ." " . $row['date_published'] ." " . $row['edition'] ." " . $row["isbn"] ." " . $row["price"] ." " . $row["publisher"] ." " . $row["title"];
//    echo "<br>";
//}

mysqli_close($con);



