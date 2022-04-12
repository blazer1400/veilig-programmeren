<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 04-12-17
 * Time: 16:10
 */

?>
<?php include('../layout/header.php'); ?>
    <h1>MySQL Injection</h1>
    <form action="db.php" method="post">
        <label for="voornaam">Naam: </label>
        <input type="text" id="voornaam" name="voornaam"><br>
        <label for="wachtwoord">Wachtwoord: </label>
        <input type="text" id="wachtwoord" name="wachtwoord"><br>
        <input type="submit">
    </form>


<?php include('../layout/footer.php'); ?>