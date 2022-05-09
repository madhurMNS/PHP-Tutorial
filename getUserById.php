<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    $id = $_GET['id'];


    include('db.php');
    $sql = "select * from person where id = ". $id;
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

    // echo json_encode(array('success'=>true,'color'=>$color, 'message'=> 'data fetch successful'));
?>