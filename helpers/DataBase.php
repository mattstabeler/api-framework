<?php
/**
 * Job Controller
 * 
 * @package api-framework
 * @author  Matt Stabeler <mstabeler@fta.co.uk>
 */
class DBConn
{
    private $dbconn;
    private $server;
    private $database;
    private $username;
    private $password;
    private $type;


    function __construct($server, $database, $username, $password, $type="MSSQL"){

        $this->server   = $server;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
        $this->type     = $type;

        $this->connect();
    }

    function connect(){
        // Connect to MSSQL
        $this->dbconn = null;
        $count = 1;
        while(!$this->dbconn && $count < 10){
            // echo "Connecting to " . $this->server . " attempt " . $count .  PHP_EOL;
            $this->dbconn = mssql_connect($this->server, $this->username,  $this->password);  
            $count +=1;
        }

        if (!$this->dbconn) {
            throw new Exception('Something went wrong while connecting to MSSQL: Errors: ' . mssql_get_last_message());
        }
        return $this->dbconn;

    }

    function get_dbconn(){
        return $dbconn;
    }

    function query($sql){
        // does a query
        $res = mssql_query($sql, $this->dbconn);

        $rows = Array();
        while($row = mssql_fetch_assoc($res)){
            $rows[] = $row;
        }

        return $rows;
    }

    function execute(){
        // exectutes a procedire

    }

    function update(){
        // returs num rows affected

    }
}