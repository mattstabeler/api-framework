<?php


	require "helpers/DataBase.php";

	$dbserver = 'localhost';
	$dbusername = "";
	$dbpassword = "";
	$dbname = "";
	$dbtype = "MSSQL";



	if(file_exists("localconfig.php")){
		// e.g. DB details
		require_once("localconfig.php");
	}

	$dbconn = new DBConn($dbserver, $dbname, $dbusername, $dbpassword, $dbtype);

?>