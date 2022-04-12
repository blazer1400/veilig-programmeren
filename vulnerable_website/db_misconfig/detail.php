<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 08-12-17
 * Time: 14:48
 */

include("db.php");
if(isset($_GET['id'])) {
    $query = "SELECT idarticle, title, content from article WHERE idarticle = '" . $_GET['id'] . "'";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        print $row[0] . " " . $row[1] . " " . $row[2];
    }
}
?>