
<?php
    include('db.php');
    $sql = "select * from person";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if($count > 0){
        while($row = mysqli_fetch_assoc($res)){
            $arr[] = $row;
        }
        echo json_encode(array('success' => true, 'data' => $arr ,'message' => 'Data fetch Successfully'));
    }else{
        echo json_encode(array('success' => false ,'message' => 'Data fetch failed'));
    }
?>

<!-- <?php
    class Read{
        private $conn;
        private $table = 'person';

        public $id; 
        public $name;
        public $phone_number;

        public function __construct($db){
            $this -> conn = $db;
        }

        public function read(){
            $query= 'SELECT * FROM '.$this->table;
            
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }
?> -->