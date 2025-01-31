<?php

	echo("Test echo");
	//echo(phpinfo());

	$db_host = "c8m0261h0c7idk.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com";
	$db_port = "5432";
	$db_name = "dpe2kq3p3j0dv";
	$db_username = "u4bum5vo1sv2r2_delete";
	$db_password = "pe20a594001c2be5002cbb2aa26bc527b13edc6673e3e1376cd4dc6753ff89238";
	

	/*
	$db_conn = pg_connect($db_host, $db_name, $db_username, $db_password);
	echo($db_conn);
	if (!$db_conn) {
		echo("DB Connection Failed <br>");
		exit;
	} else {
		echo("DB Connection Successful");
	}
	*/

	try {
		$dsn = "pgsql:host=$db_host;port=5432;dbname=$db_name;";
		// make a database connection
		$pdo = new PDO($dsn, $db_username, $db_password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	
		if ($pdo) {
			echo "Connected to the $db database successfully!";
		}
	} catch (PDOException $e) {
		die($e->getMessage());
	} finally {
		if ($pdo) {
			$pdo = null;
		}
	}

?>