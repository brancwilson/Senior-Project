<?php

echo("Attempting to load...");

$db_host = "c8m0261h0c7idk.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com";
$db_port = "5432";
$db_name = "dpe2kq3p3j0dv";
$db_username = "u4bum5vo1sv2r2";
$db_password = "pe20a594001c2be5002cbb2aa26bc527b13edc6673e3e1376cd4dc6753ff89238";


try {
    $dsn = "pgsql:host=$db_host;port=5432;dbname=$db_name;";
    // make a database connection
    $pdo = new PDO($dsn, $db_username, $db_password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    

    if ($pdo) {
        echo "Connected to the $db_name database successfully!<br><br>";

        $query = "INSERT INTO Persons VALUES ('$_POST[fnInput]','$_POST[lnInput]')";
        $result = pg_query($pdo, $query); 

        if (!$result) {
            echo("Failed");
        }
        
        echo("<h1>DONE</h1>");

    } else {
        echo "pdo fail...";
    }
} catch (PDOException $e) {
    die($e->getMessage());
} finally {
    if ($pdo) {
        $pdo = null;
    }
}
?>
