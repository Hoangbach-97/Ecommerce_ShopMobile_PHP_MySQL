<?php 

class DBController{

// DB Connection
protected $host = 'localhost';
protected $user = 'root';
protected $password = '';
protected $name = 'amazonshop';

public $connection = null;

public function __construct() {

    $this->connection =mysqli_connect($this->host,$this->user,$this->password, $this->name);
    if($this->connection->connect_error)
    {
        echo "Connection Failed: ".$this->connect_error;
    }
}

public function __destruct()
{
   $this->closingDB();
}


// closing Connection

protected function closingDB()
{
    if($this->connection != null)
    {
        $this->connection->close();
        $this->connection = null;
    }
}



}




?>