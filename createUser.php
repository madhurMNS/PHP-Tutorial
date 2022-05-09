<?php
    header('Access-Controle-Allow-Origin: *');
    header('Content-Type: application/json');

    $name_value = $_POST['name'];
    $phone_number_value = $_POST['phone_number'];

    if(strlen($phone_number_value) != 10){
        echo json_encode(
            array('success' => false, 'message' => 'Phone Number length should be 10'));
            exit;
    }

    include('db.php');
    
    $sql = "insert into person(name, phone_number) VALUES ('$name_value', $phone_number_value)";
    $res = mysqli_query($con, $sql);
    if($res == true){
        echo json_encode(
            array('success' => true, 'message' => 'Data inserted successfully'));
    }else{
        echo json_encode(
            array('success' => false, 'message' => 'Data insert failed ', mysqli_error($con)));
    }
    
?>