<!-- //<?php
    // class Person{
    //     public $id;
    //     public $name;
    //     public $phone_number;

    //     function __construct($id, $name, $ph_number){
    //         $this->id = $id;
    //         $this->name = $name;
    //         $this->phone_number = $ph_number;
    //     }

    //     public function getName(){
    //         return $this->name;
    //     }

    //     public function getId(){
    //         return $this->id;
    //     }
    
    //     public function getPh_number(){
    //         return $this->phone_number;
    //     }
    // }

    // // $person = new Person(1,"rajan");
    // // echo $person -> getName();
    // // echo '<br>';
    // // echo $person -> getId();

    // $arr = array(new Person(2, "rajan", "9930720049"), new Person(2, 'prashant','7506001297'), new Person(3, 'demo person','7506001297'));

    // echo json_encode(['status' => true, 'data' => $arr, 'message' => 'api hit successful']);
// ?> -->

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