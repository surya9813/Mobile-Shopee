<?php

class DBController
{
    // Database Connection Properties
    protected $host = "localhost:3308";
    protected $user = "root";
    protected $password = ''; // Corrected the extra space
    protected $database = "shopee";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->database);

        // Check connection
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}
