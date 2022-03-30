<?php
header("Access-Control-allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD']=='GET') {
    require "../config/database.php";
    $db = new Database();
    $conn = $db->getConnectionWithStatus();
    if($conn['conn']==null){
        echo json_encode(array("status"=>"fail","msg"=>$conn['msg']));
        
    }else{
        echo json_encode(array("status"=>"ok","msg"=>$conn['msg']));
    }
}else{
    echo json_encode(array("status"=>"fail","msg"=>"path or method not found"));
}

?>