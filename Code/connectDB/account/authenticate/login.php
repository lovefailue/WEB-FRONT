<?php
header("Access-Control-allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD']=='POST') {
    require ('../model/authenticate.php');
    $jsonBody = json_decode(file_get_contents('php://input'), true);
    $account = new Authenticate();
    $responseData = $account->login($jsonBody);
    if($responseData['status']=='error'){
        http_response_code(500);
        echo json_encode(array("status"=>"error","msg"=>$responseData['msg']));
    }else{
        http_response_code(201);
        echo json_encode(array("status"=>"success","msg"=>$responseData['msg'],"data"=>$responseData['data']));
    }
}else{
    echo json_encode(array("status"=>"fail","msg"=>"path or method not found"));
}

?>