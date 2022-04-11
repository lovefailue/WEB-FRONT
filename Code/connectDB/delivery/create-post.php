<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD']=='POST') {
    require ('model/post.php');
    $jsonBody = json_decode(file_get_contents('php://input'), true);
    $post = new Post();
    $responseData = $post->CreatePost($jsonBody);
    if($responseData['status']=='error'){
        http_response_code(500);
        echo json_encode(array("status"=>"error","msg"=>$responseData['msg']));
    }else{
        http_response_code(200);
        echo json_encode(array("status"=>"success","msg"=>$responseData['msg']));
    }
}else{
    http_response_code(404);
    echo json_encode(array("status"=>"fail","msg"=>"path or method not found"));
}

?>