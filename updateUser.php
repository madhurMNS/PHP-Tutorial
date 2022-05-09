<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
include('db.php');
    $data = json_decode(file_get_contents("php://input"), false);
    $id = $data -> id;
    $name = !isset($data -> name) ? null : $data -> name;
    $phone_number = !isset($data -> phone_number) ? null : $data -> phone_number;

    if(empty($name) && !empty($phone_number)){
        $sql = "UPDATE person SET phone_number = $phone_number WHERE id = $id";
        $res = mysqli_query($con, $sql);

        if($res == true){
            echo json_encode(
                array('success' => true, 'data' => getData($id, $con), 'message' => 'Data updated successfully'));
        }else{
            echo json_encode(
                array('success' => false, 'message' => 'Data update failed ', mysqli_error($con)));
        }
    }else if(empty($phone_number) && !empty($name)){
        $sql = "UPDATE person SET name = '$name' WHERE id = $id";
        $res = mysqli_query($con, $sql);

        if($res == true){
            echo json_encode(
                array('success' => true, 'data' => getData($id, $con), 'message' => 'Data updated successfully'));
        }else{
            echo json_encode(
                array('success' => false, 'message' => 'Data update failed ', mysqli_error($con)));
        }
    }else if(empty($name) && empty($phone_number)){
        http_response_code(404);
        echo json_encode(
            array('success' => false, 'message' => 'Enter a field'));
    }
    else if(!empty($name) && !empty($phone_number)){
        $sql = "UPDATE person SET name = '$name', phone_number = $phone_number WHERE id = $id";
        $res = mysqli_query($con, $sql);

        if($res == true){
            echo json_encode(
                array('success' => true, 'data' => getData($id, $con), 'message' => 'Data updated successfully'));
        }else{
            echo json_encode(
                array('success' => false, 'message' => 'Data update failed ', mysqli_error($con)));
        }
    }

    function getData($id, $con){
        $sql = "select * from person where id = ". $id;
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);
        if($count > 0){
            return mysqli_fetch_assoc($res);
        }
    }

?>