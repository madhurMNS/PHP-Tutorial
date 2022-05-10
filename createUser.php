<?php
    header('Access-Controle-Allow-Origin: *');
    header('Content-Type: application/json');

    include('db.php');


    $name_value = $_POST['name'];
    $phone_number_value = $_POST['phone_number'];
    $email = $_POST["email"];
    $city = $_POST["city"];

    if (strlen($name_value) == 0) {
        echoResponse(false, "Name Can't be empty");
    }

    if(strlen($phone_number_value) != 10){
        echoResponse(false, "Phone Number length should be 10");
    }

    if (strlen($email) == 0) {
        echoResponse(false, "Email Can't be empty");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echoResponse(false, "Please enter valid email");
    }

    if (strlen($city) == 0) {
        echoResponse(false, "City Can't be empty");
    }

    $sql = "insert into person(name, phone_number, email, city) VALUES ('$name_value', $phone_number_value, '$email', '$city')";
    $res = mysqli_query($con, $sql);

    if($res == true){
        echoResponse(true, "Data inserted successfully");
    }else{
        echoResponse(false, "Data insert failed ", mysqli_error($con));
    }

    function echoResponse($success, $msg) {
        $arr = array("success"=>$success, "message"=>$msg);
        echo json_encode($arr);
        exit;
    }
?>