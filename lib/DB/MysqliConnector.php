<?php

namespace Cliwork\DB;

Use Mysqli;

Class MysqliConnector{

    protected $_connection;
    protected $_servername = "localhost";
    protected $_username = "cliwork";
    protected $_password = "Pass1";

    public function __construct()
    {
        // Create connection
        $this->_connection = new Mysqli($this->_servername, $this->_username, $this->_password, "cliworkDB");

        // Check connection
        if ($this->_connection->connect_error) {
            throw new \Exception(sprintf("Connection failed: ", $this->_connection->connect_error));
        }
    }

    public function query($query_argument)
    {
        return $this->_connection->query($query_argument);
    }

}