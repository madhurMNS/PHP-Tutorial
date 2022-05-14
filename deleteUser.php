<?php
	header('Access-Controle-Allow-Origin: *');
    header('Content-Type: application/json');

    include('db.php');

    $id = $_POST['id'];
    $isUserExist;

    $sql = "Select * from person where id = $id";
    $res = mysqli_query($con, $sql);
   	$count = mysqli_num_rows($res);
   	if ($count > 0) {
   		$isUserExist = true;
   	} else {
   	    $isUserExist = false;
    }

    if ($isUserExist) {
    	$sql = "Delete from person where id = $id";
    	$res = mysqli_query($con, $sql);

    	if ($res == true) {
    		echoResponse(true, "User Deleted successfully");
    	} else {
    		echoResponse(false, "User Deletion Failed");
    	}
    } else {
    	echoResponse(false, "User doesn't exist");
    }

    function echoResponse($success, $msg) {
        $arr = array("success"=>$success, "message"=>$msg);
        echo json_encode($arr);
        exit;
    }
?>