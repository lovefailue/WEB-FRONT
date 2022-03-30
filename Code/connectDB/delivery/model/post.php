<?php 
    class Post{
        private $conn = null;
        function __construct() {
            require ('config/database.php');
            $db = new Database();
            $this->conn = $db->getConnection();
        }
        function CreatePost ($inpData){
            $query = "INSERT INTO `post` (`post_id`,`date`,`room`,`status`)VALUES (:post_id,NOW(),:room,'ยังไม่ได้รับ');";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":post_id",$inpData['post_id'],PDO::PARAM_STR);
                $stmt1->bindParam(":room",$inpData['room'],PDO::PARAM_STR);
                $stmt1->execute();
                
                return array("status"=>"success","msg"=>"Add post successfully.");
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function EditStatusPost($inpData){
            $query = "SELECT * FROM `post` WHERE `post_id`=:post_id;";
            $query2 = "UPDATE `post` SET `status`=:status WHERE `post_id`=:post_id;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":post_id",$inpData['post_id'],PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();
                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"post ID not found");
                }else{
                    $stmt2 = $this->conn->prepare($query2);
                    $stmt2->bindParam(":status",$inpData['status'],PDO::PARAM_STR);
                    $stmt2->bindParam(":post_id",$inpData['post_id'],PDO::PARAM_STR);
                    $stmt2->execute();

                    return array("status"=>"success","msg"=>"update status successfully");
                }
                
                return array("status"=>"success","msg"=>"Add post successfully.");
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function GetListPost ($room){
            $query = "SELECT * FROM `post` WHERE `room`=:room;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":room",$room,PDO::PARAM_STR);
                $stmt1->execute();
                $data = array();
                
                while ($row=$stmt1->fetch()){
                    $el = array(
                        "post_id" =>$row['post_id'],
                        "date"=>$row['date'],
                        "status"=>$row['status']
                    );
                    array_push($data,$el);
                }
                return array("status"=>"success","msg"=>"-","data"=>$data);
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function DeleteAccount($post_id){
            $query = "SELECT * FROM `post` WHERE `post_id`=:post_id;";
            $query2 = "DELETE FROM `post` WHERE `post_id`=:post_id;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":post_id",$post_id,PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();
                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"post ID not found");
                }else{
                    $stmt2 = $this->conn->prepare($query2);
                    $stmt2->bindParam(":post_id",$post_id,PDO::PARAM_STR);
                    $stmt2->execute();

                    return array("status"=>"success","msg"=>"post deleted successfully");
                }
                    
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
    }
?>