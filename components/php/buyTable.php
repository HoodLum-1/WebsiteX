<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/02/20
 * Time: 2:07 PM
 */
?>


<!-- Book Table-->
<div class="row">
    <div class="page-header">
        <h3>Books</h3>
    </div><!-- End Header -->
    <section class="container-fluid">
<?php
        $con = mysqli_connect("localhost", "root", "") or die ("Problem with connection...");
        mysqli_select_db($con, "website");

        $result = mysqli_query($con, "SELECT * FROM book") or die("error executing query");

        echo " <table class=\"table\"  align=\"center\" border=\"2\">";
            echo "<tr>
                <th align=center bgcolor=\"#cd5c5c\">Title</th>
                <th align=center bgcolor=\"#add8e6\">Publisher</th>
                <th align=center bgcolor=\"#90ee90\">Edition</th>
                <th align=center bgcolor=\"#e0ffff\">ISBN #</th>
                <th align=center bgcolor=\"#778899\">Date Published</th>
                <th align=center bgcolor=\"#ffffe0\">Price</th>
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
        mysqli_close($con);

            ?>

    </section>
</div>
