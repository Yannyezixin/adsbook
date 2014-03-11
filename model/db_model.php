<?php
	try{
        	$pdo = new PDO('mysql:host=localhost;dbname=adsbook','root','20130608q');
	  	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');

	}
	catch(PDOException $e){
	    $output = 'Unable to connect to the database server'.$e->getMessage();
	    echo $output;
	    exit();
	}


