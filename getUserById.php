<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    include('db.php');

    $id = $_GET['id'];

    $sql = "select * from person where id = ". $id;
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $arr[] = $row;
        }
        echoResponse(true, $arr, "Data fetched successfully");
    } else {
        echoResponse(false,"","Data fetch failed");
    }

    function echoResponse($success,$data ,$msg) {
        if ($success == true) {
            $arr = array("success"=>$success, "data"=>$data,  "message"=>$msg);
        } else {
            $arr = array("success"=>$success, "message"=>$msg);
        }
        echo json_encode($arr);
        exit;
    }
?>