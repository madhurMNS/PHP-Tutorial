<?php
header('Access-Controle-Allow-Origin: *');
header('Content-Type: application/json');

    $id = $_POST['id'];
    include('db.php');
    $sql = "select * from person where id = ". $id;
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if($count > 0){
        // while($row = mysqli_fetch_assoc($res)){
        //     $arr[] = $row;
        // }
        echo json_encode(array('success' => true, 'data' => mysqli_fetch_assoc($res) ,'message' => 'Data fetch Successfully'));
    }else{
        
        echo json_encode(array('success' => false ,'message' => 'Data fetch failed'));
    }
?>