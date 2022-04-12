<?php

ini_set('allow_url_include', true);
//voeg allow_url_include variabele toe aan php.ini
ini_set('allow_url_fopen', true);

/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 05-12-17
 * Time: 13:16
 */

$link = mysqli_connect("localhost:3306", "pipo", "declown", "vulnerable_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


// ?file=included_file.php
// hack 1 file: ../../../../../etc/passwd

/*
$included_file= $_GET['file'];
 */

// hack 2 file: ../../../../../etc/passwd%00 met null-byte aan het eind werkt niet in php 7.1.2
$file_content = "";
$include_file = false;
if(isset($_GET['file'])) {
    //$included_file= $_GET['file'].".php";
    $file_to_include= $_GET['file'];
    // if (file_exists($_GET['file'])){
    $include_file = true;
    // }
}
?>


<?php include('../layout/header.php'); ?>

<h1>File Inclusion</h1>
<h3>Local File inclusion</h3>
<p>
    Je kunt de inhoud van een file embedden in deze pagina. Zet achter de url van deze pagina ?file= het pad naar het bestand dat je wil embedden.
    Meer informatie over local file inclusion... <a href="https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion">OWASP Local File Inclusion</a>
</p>
<h3>Remote File inclusion</h3>
<p>
    Je kunt de inhoud van een remote file embedden in deze pagina. Zet achter de url van deze pagina ?file= het pad naar het bestand dat je wil embedden.
    Als je een link kunt maken naar een externe website, dan heb je te maken met een security probleem in de configuratie van je webserver!
    Meer informatie over remote file inclusion... <a href="https://www.owasp.org/index.php/Testing_for_Remote_File_Inclusion">OWASP Remote File Inclusion</a>
</p>

<?php
if($include_file) {
    include($file_to_include);
}

?>

<?php include('../layout/footer.php'); ?>
