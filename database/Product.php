<?php 

class Product{
    public $db = null;
    // Dependency Injection
    public  function __construct(DBController $db){
        if(!isset($db->connection)){
            return null;
        }
        $this->db = $db;

    }

    // fetch data using getData() method
    // Lấy giá trị bảng mặc định là product
    public function getData($table = 'product'){
       $result = $this->db->connection->query("SELECT * FROM {$table}");
       $resultArray = array();
    //    Fetch data product one by one
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
       {
        $resultArray[] = $item;
       }
       return $resultArray;
    }


    // get id using item_id for cart

    public function getProduct($item_id = null, $table = 'product')
    {
        if(isset($item_id))
        {
            $result = $this->db->connection->query("SELECT * FROM {$table} WHERE item_id={$item_id}");
            $resultArray = array();
            //    Fetch data product one by one
               while($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
               {
                $resultArray[] = $item;
               }
               return $resultArray;
        }
    }



}


?>