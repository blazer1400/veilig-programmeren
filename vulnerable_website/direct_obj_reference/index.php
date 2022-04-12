<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 07-12-17
 * Time: 15:13
 */
/* From W3Schools php 5 file upload
*/

include("../layout/header.php");
echo "<p>direct object reference</p>";
echo "<h1>File upload</h1>";
include("nav.php");
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:<br><br>
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php include("../layout/footer.php"); ?>
