<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 04-12-17
 * Time: 16:21
 */

//Database Connection
$host = "127.0.0.1";
$user = "pipo";
$pass = "declown";
$db = "vulnerable_db";
$charset = "utf8mb4";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $dbh = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    error_log("PDO Exeption: ". $e->getMessage());
    die("PDO says no.");
}

//Definieer query op basis van userinput (onveilig)
//$query = "SELECT * FROM userplainpasswords WHERE name = '".$_POST["voornaam"]."' and password = '".$_POST["wachtwoord"]."'";

$sth = $dbh->prepare('SELECT name, password FROM userplainpasswords WHERE name = :voornaam AND password = :password');
$sth->bindParam("voornaam", $_POST['voornaam'], PDO::PARAM_STR, 45 );
$sth->bindParam("password", $_POST['wachtwoord'], PDO::PARAM_STR, 500 );
$sth->execute();
$result = $sth->fetch();


include("../layout/header.php");
?>

<h1>MySQL Injection</h1>
<ul><li><a href="index.php">MySQL Injection home</a></li></ul>

<?php
//Optioneel de query weergeven:
//echo "<p>Query: ".$query."</p>";

//Geef resultaten uit database weer
//while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
//    print "<h3>Welkom ".$row[1]
    //.$row[0]." ".$row[2]
//    ."</h3><br>";
//};

if ($result) {
    echo "Welkom ".$result['name'];
}

include("../layout/footer.php");