<?php

    class Complain {
        private $conn = null;
        function __construct() {
            require ('./config/database.php.');
            $db = new Database();
            $this->conn = $db->getConnection();
        }
        function uuidv4() {
            return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                // 32 bits for "time_low"
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
                // 16 bits for "time_mid"
                mt_rand( 0, 0xffff ),
                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 4
                mt_rand( 0, 0x0fff ) | 0x4000,
                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
                mt_rand( 0, 0x3fff ) | 0x8000,
                // 48 bits for "node"
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
	        );
        }
        
        function AddComplain($inpData){           
            $comp_id = $this->uuidv4();
            $query = "INSERT INTO `complain` (`complain_id`,`topic`,`description`,`account_id`,`name`,`tel`,`room`,`date`,`status`) VALUES (:complain_id,:topic,:desct,:account_id,:name,:tel,:room,NOW(),'ยังไม่ได้รับเรื่อง');";
            // $query2 = "INSERT INTO `complain_img` (`complain_id`, `image`) VALUES (:complain_id,:images);";

            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":complain_id",$comp_id,PDO::PARAM_STR);
                $stmt1->bindParam(":topic",$inpData['topic'],PDO::PARAM_STR);
                $stmt1->bindParam(":desct",$inpData['description'],PDO::PARAM_STR);
                $stmt1->bindParam(":account_id",$inpData['account_id'],PDO::PARAM_STR);
                $stmt1->bindParam(":name",$inpData['name'],PDO::PARAM_STR);
                $stmt1->bindParam(":tel",$inpData['tel'],PDO::PARAM_STR);
                $stmt1->bindParam(":room",$inpData['room'],PDO::PARAM_STR);
                $stmt1->execute();

                // for ($i=0; $i<count($inpData['images']); $i++){
                //     $stmt2 = $this->conn->prepare($query2);
                //     $stmt2->bindParam(":complain_id",$comp_id,PDO::PARAM_STR);
                //     $stmt2->bindParam(":images",$inpData['images'][$i],PDO::PARAM_STR);
                //     $stmt2->execute();    
                // };
                return array("status"=>"success","msg"=>"Add complain successfully.","data"=>null);

            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
            
        }
        function GetListComplain (){
            $query = "SELECT * FROM `complain` ORDER BY `date` DESC;";
            
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->execute();
                $data = array();
                
                while ($row=$stmt1->fetch()){
                    $el = array(
                        "date" =>$row['date'],
                        "topic"=>$row['topic'],
                        "status"=>$row['status']
                        
                    );
                    array_push($data,$el);
                }
                return array("status"=>"success","msg"=>"-","data"=>$data);
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function GetListRoomComplain ($inpData){
            $query = "SELECT * FROM `complain` WHERE `room`=:room;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":room",$inpData['room'],PDO::PARAM_STR);
                $stmt1->execute();
                $data = array();
                
                while ($row=$stmt1->fetch()){
                    $el = array(
                        "date" =>$row['date'],
                        "topic"=>$row['topic'],
                        "status"=>$row['status']
                        
                    );
                    array_push($data,$el);
                }
                return array("status"=>"success","msg"=>"-","data"=>$data);
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function EditStatusComplain ($inpData){
            $query = "SELECT * FROM `complain` WHERE `date`=:date;";
            $query2 = "UPDATE `complain` SET `status`=:status WHERE `date`=:date;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":date",$inpData['date'],PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();

                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"complain not found");
                }else{
                    $stmt2 = $this->conn->prepare($query2);
                    $stmt2->bindParam(":status",$inpData['status'],PDO::PARAM_STR);
                    $stmt2->bindParam(":date",$inpData['date'],PDO::PARAM_STR);
                    $stmt2->execute();

                    return array("status"=>"success","msg"=>"update status successfully");
                }
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
    }



?>