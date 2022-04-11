<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD']=='POST') {
    require ('model/complain.php');
    $jsonBody = json_decode(file_get_contents('php://input'), true);
    $account = new Complain();
    $responseData = $account->EditStatusComplain($jsonBody);
    if($responseData['status']=='error'){
        http_response_code(500);
        echo json_encode(array("status"=>"error","msg"=>$responseData['msg']));
    }else if($responseData['status']=='fail'){
        http_response_code(400);
        echo json_encode(array("status"=>"fail","msg"=>$responseData['msg']));
    }else{
        http_response_code(200);
        echo json_encode(array("status"=>"success","msg"=>$responseData['msg']));
    } 
}else{
    http_response_code(404);
    echo json_encode(array("status"=>"fail","msg"=>"path or method not found"));
}

?>