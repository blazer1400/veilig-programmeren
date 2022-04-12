<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 08-12-17
 * Time: 14:21
 */

$link = mysqli_connect("localhost:3306", "pipo", "declown", "vulnerable_db");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>