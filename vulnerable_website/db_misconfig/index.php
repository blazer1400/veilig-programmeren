<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 08-12-17
 * Time: 14:10
 */



include("db.php");
if(isset($_POST['form_submit'])) {
    //voeg article toe
    $query = "INSERT INTO article (title, content) VALUES ('".$_POST['title']."', '".$_POST['content']."')";
    print $query;
    $result = mysqli_query($link, $query);
}

$query = "SELECT idarticle, title, content from article";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    print "<a href='detail.php?id=".$row[0]."'>".$row[1]."</a> ".$row[2]."<br>";
};
?>

<form action="#" method="post">
    Title: <input type="text" name="title"><br>
    Content: <textarea name="content" rows="10"></textarea>
    <input type="submit" name="form_submit">
</form>


