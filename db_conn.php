<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=green_earth;charset=utf8','root','chen0718');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>