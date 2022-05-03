<?php
header("Access-Control-allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD']=='GET') {
    require ('model/cost.php');
    // $jsonBody = json_decode(file_get_contents('php://input'), true);
    $account = new Cost();
    $responseData = $account->GetInfoReceiptCost($_GET['receipt_id']);
    if($responseData['status']=='error'){
        http_response_code(500);
        echo json_encode(array("status"=>"error","msg"=>$responseData['msg']));
    }else if($responseData['status']=='fail'){
        http_response_code(400);
        echo json_encode(array("status"=>"fail","msg"=>$responseData['msg']));
    }else{
        http_response_code(200);
        echo json_encode(array("status"=>"success","msg"=>$responseData['msg'],"data"=>$responseData["data"]));
    } 
}else{
    http_response_code(404);
    echo json_encode(array("status"=>"fail","msg"=>"path or method not found"));
}

?>