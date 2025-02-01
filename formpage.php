<?php

echo("Attempting to load...");

$db_host = "c8m0261h0c7idk.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com";
$db_port = "5432";
$db_name = "dpe2kq3p3j0dv";
$db_username = "u4bum5vo1sv2r2";
$db_password = "pe20a594001c2be5002cbb2aa26bc527b13edc6673e3e1376cd4dc6753ff89238";


try {
    echo("Connecting to database...");
    $dsn = "pgsql:host=$db_host;port=5432;dbname=$db_name;";
    // make a database connection
    $pdo = new PDO($dsn, $db_username, $db_password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    echo("PDO established...");

    if ($pdo) {

        echo($_POST("fnInput") . " " . $_POST("lnInput") . " was added!");

    } else {
        echo "pdo fail...";
    }
} catch (PDOException $e) {
    echo("Dying...");
    die($e->getMessage());
} finally {
    if ($pdo) {
        $pdo = null;
    }
}

echo("Made it to end...");

?>

<html lang="english">
    <head>
        <title>Form Page</title>
    </head>
    <body>
        <h1>Form</h1>
        <form method="POST">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td>
                        <input id="fnInput" name="fnInput" type="text">
                    </td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td>
                        <input id="lnInput" name="lnInput" type="text">
                    </td>
                </tr>
            </table>
            <input id="newPersonSubmitBtn" type="submit" value="Add Person">
        </form>
    </body>
</html>
