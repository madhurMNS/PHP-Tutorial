<?php

header('Access-Controle-Allow-Origin: *');
header('Content-Type: application/json');

    include('db.php');
    $data = json_decode(file_get_contents("php://input"), false);

    $id = $data -> id;
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
    
    // echo json_encode(array('success'=>true,'color'=>$data -> id, 'message'=> 'data fetch successful'));
?>

