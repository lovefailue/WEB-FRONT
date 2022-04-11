<?php 
    class Annouce {
        private $conn = null;
        function __construct() {
            require ('./config/database.php');
            $db = new Database();
            $this->conn = $db->getConnection();
        }
        function AddAnnouce($inpData) {
            $annouce_id = uniqid();
            $query = "INSERT INTO `annouce` (`announce_id`,`date`,`topic`,`description`)VALUES (:announce_id,NOW(),:topic,:description);";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":announce_id",$annouce_id,PDO::PARAM_STR);
                $stmt1->bindParam(":topic",$inpData['topic'],PDO::PARAM_STR);
                $stmt1->bindParam(":description",$inpData['description'],PDO::PARAM_STR);
                $stmt1->execute();

                return array("status"=>"success","msg"=>"add annouce successfully");
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function GetListAnnouce(){
            $query = "SELECT * FROM `annouce` ORDER BY `date` DESC;";

            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->execute();
                $data = array();
                 while ($row=$stmt1->fetch()){
                    $el = array(
                        "announce_id" => $row["announce_id"],
                        "date" => $row['date'],
                        "topic"=>$row['topic'],
                        "description"=>$row['description']
                    );
                    array_push($data,$el);
                }
                return array("status"=>"success","msg"=>"-","data"=>$data);
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function DeleteAnnouce ($announce_id){
            $query = "SELECT * FROM `annouce` WHERE `announce_id`=:announce_id;";
            $query2 = "DELETE FROM `annouce` WHERE `announce_id`=:announce_id;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":announce_id",$announce_id,PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();
                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"annouce not found");
                }else{
                    $stmt2 = $this->conn->prepare($query2);
                    $stmt2->bindParam(":announce_id",$announce_id,PDO::PARAM_STR);
                    $stmt2->execute();
                    return array("status"=>"success","msg"=>"annouce deleted successfully");
                }
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function GetListTopicAnnouce ($announce_id){
            $query = "SELECT * FROM `annouce` WHERE `announce_id`=:announce_id;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":announce_id",$announce_id,PDO::PARAM_STR);
                $stmt1->execute();
                $data = array();
                 while ($row=$stmt1->fetch()){
                    $el = array(
                        "date" => $row['date'],
                        "topic"=>$row['topic'],
                        "description"=>$row['description']
                    );
                    array_push($data,$el);
                }
                return array("status"=>"success","msg"=>"-","data"=>$data);
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }

        function EditAnnounce($inpData) {
            $sql = "UPDATE `annouce` SET `topic`=:topic, `description`=:description WHERE `announce_id`=:announce_id;";
            try{
                $stmt1 = $this->conn->prepare($sql);
                $stmt1->bindParam(":topic",$inpData['topic'],PDO::PARAM_STR);
                $stmt1->bindParam(":description",$inpData['description'],PDO::PARAM_STR);
                $stmt1->bindParam(":announce_id",$inpData['announce_id'],PDO::PARAM_STR);
                
                $stmt1->execute();

                return array("status"=>"success","msg"=>"edit announce successfully");
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
    }
?>