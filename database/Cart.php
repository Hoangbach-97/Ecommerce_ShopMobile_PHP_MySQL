<?php 
// ob_flush();
// ob_start();
class Cart{

    public $db = null;


    public function __construct(DBController $db)
    {
        if(!isset($db->connection)) return null;
        // this ở đây là class Cart
        $this->db = $db;
    }

    // Insert into cart table
    public function insertCart($params = null, $table="cart")
    {
        if($this->db->connection !=null)
        {
            if($params != null)
            {   
                // GET TABLE COLUMNS

                // Hàm implode trả về 1 chuỗi từ mảng cho trước: param thứ nhất là element ngăn cách các phần tử trong chuỗi

                // array_key($a): Trả về 1 array chứa keys của mảng $a: 
                // Ví dụ: ta có mảng: $arr = array("item1"=>1, "item2"=>2); Nếu array_key($arr) = [item1, item2]
                $columns = implode(',', array_keys($params));
                            // print_r($columns);
                // array_values($a): Trả về 1 array chứa values của mảng $a
                $values = implode(',', array_values($params));
                            // print_r($values);

                // SQL QUERY
                $query = sprintf('INSERT INTO %s(%s) VALUES(%s)', $table, $columns, $values);
                // Execute Query: Cart->
                $result = $this->db->connection->query($query);
            }
        }
    }



    // get user_id and item_id =>insert into cart table

    public function addToCart( $itemId, $userId){

        if(isset($userId) && isset($itemId)){

            $params = array(
                
                "user_id"=>$userId,
                "item_id"=>$itemId,
            );

            // Cart calls insertCart function
            $result =$this->insertCart($params);
            if($result){
                // Reload this page
                header("Location:".$SERVER['PHP_SELF']); //Return current location
            }
        }

    }


    public function delete($item_id = null, $table = 'cart')
    {
        if($item_id != null)
        {
            $result = $this->db->connection->query("DELETE FROM {$table} WHERE item_id = {$item_id}");
            if($result)
            {
                // ob_flush();
                header("Location:".$_SERVER["PHP_SELF"]);
            }
            return $result;
        }
    }


        // caculation

        public function calPrice($item){
            $sum  = 0;
            if(isset($item))
            {
                foreach($item as $i){
                    $sum += $i[0];
                }
                return $sum;
    
            }
        }

        // get cart item_id from cart

        public function getCartItemId($cartArr= null, $key="item_id")
        {
            if($cartArr != null)
            {
                // Vì $key nằm ngoài callback nên sẽ bị underfined nên cần thêm use ($key)
                $carId = array_map(function($values) use ($key) {
                    return $values[$key];
                }, $cartArr);
                return $carId;
            }
        }


    //  Save wishlist

    public function saveWishlist($item_id, $saveTable = "wishlist", $fromTable = "cart")
    {
        if($item_id != null)
        {
            // Concat 2 query với nhau để thực hiện chuỗi query liên tục khi thực hiện 1 action
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id ={$item_id};";
            $query .= " DELETE FROM {$fromTable} WHERE item_id={$item_id};";
            // echo $query; check result query check bugs
            $result = $this->db->connection->multi_query($query);
            if ($result){
                header("Location:".$_SERVER["PHP_SELF"]);
            }
            return $result;
        }
    }
}



?>