<?php
    class Cost{
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
        function AddCost($inpData){
            $cost_id = $this->uuidv4();
            $query = "INSERT INTO `billcost` (`cost_id`,`room`,`elc_cost`,`water_cost`,`room_cost`,`date_cost`,`elc_unit`,`total`,`status`) VALUES (:cost_id,:room,:elc_cost,:water_cost,:room_cost,NOW(),:elc_unit,:total,:status);";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":cost_id",$cost_id,PDO::PARAM_STR);
                $stmt1->bindParam(":room",$inpData['room'],PDO::PARAM_STR);
                $stmt1->bindParam(":elc_cost",$inpData['elc_cost'],PDO::PARAM_STR);
                $stmt1->bindParam(":water_cost",$inpData['water_cost'],PDO::PARAM_STR);
                $stmt1->bindParam(":room_cost",$inpData['room_cost'],PDO::PARAM_STR);
                $stmt1->bindParam(":elc_unit",$inpData['elc_unit'],PDO::PARAM_STR);
                $stmt1->bindParam(":total",$inpData['total'],PDO::PARAM_STR);
                $stmt1->bindParam(":status",$inpData['status'],PDO::PARAM_STR);
                $stmt1->execute();

                return array("status"=>"success","msg"=>"add billcost successfully");
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function GetListCost(){
            $query = "SELECT * FROM `billcost` ORDER BY `date_cost` DESC;";
            
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->execute();
                $data = array();
                
                while ($row=$stmt1->fetch()){
                    $el = array(
                        "cost_id"=>$row["cost_id"],
                        "date_cost" =>$row['date_cost'],
                        "room"=>$row['room'],
                        "status"=>$row['status']
                    );
                    array_push($data,$el);
                }
                return array("status"=>"success","msg"=>"-","data"=>$data);
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function deleteCost($cost_id){
            $query = "SELECT * FROM `billcost` WHERE `cost_id`=:cost_id;";
            $query2 = "DELETE FROM `billcost` WHERE `cost_id`=:cost_id;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":cost_id",$cost_id,PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();
                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"bill not found");
                }else{
                    $stmt2 = $this->conn->prepare($query2);
                    $stmt2->bindParam(":cost_id",$cost_id,PDO::PARAM_STR);
                    $stmt2->execute();
                    
                    return array("status"=>"success","msg"=>"billcost deleted successfully");
                }
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function EditStatusCost($inpData){
            $query = "SELECT * FROM `billcost` WHERE `cost_id`=:cost_id;";
            $query2 = "UPDATE `billcost` SET `status`=:status  WHERE `cost_id`=:cost_id;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":cost_id",$inpData['cost_id'],PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();
                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"billcost not found");
                }else{
                    $stmt2 = $this->conn->prepare($query2);
                    $stmt2->bindParam(":status",$inpData['status'],PDO::PARAM_STR);
                    $stmt2->bindParam(":cost_id",$inpData['cost_id'],PDO::PARAM_STR);
                    $stmt2->execute();
                    
                    return array("status"=>"success","msg"=>"billcost status updated successfully");
                }
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function GetListRoomCost ($room){
           $query = "SELECT * FROM `billcost` WHERE `room`=:room;";
           try{
               $stmt1 = $this->conn->prepare($query);
               $stmt1->bindParam(":room",$room,PDO::PARAM_STR);
               $stmt1->execute();
               $data = array();
                if($row=$stmt1->fetch()==null){
                    return array("status"=>"fail","msg"=>"-");
                }else{
                    while ($row=$stmt1->fetch()){
                        $el = array(
                                "cost_id"       =>$row["cost_id"],
                                "date_cost"     =>$row['date_cost'],
                                "room"          =>$row['room'],
                                "status"        =>$row['status']
                                
                        );
                        array_push($data,$el);
                    }
                    return array("status"=>"success","msg"=>"-","data"=>$data);
                }
               
           }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
           } 
        }
        function GetDetailCost($cost_id){
            $query = "SELECT * FROM `billcost` WHERE `cost_id`=:cost_id;";
            try{
               $stmt1 = $this->conn->prepare($query);
               $stmt1->bindParam(":cost_id",$cost_id,PDO::PARAM_STR);
               $stmt1->execute();
               $data = array();
               $row=$stmt1->fetch();
               if($row==null){
                   return array("status"=>"fail","msg"=>"-");
               }else{
                   while ($row=$stmt1->fetch()){
                        $el = array(
                            "cost_id"       =>$row["cost_id"],
                            "date_cost"     =>$row['date_cost'],
                            "room"          =>$row['room'],
                            "elc_cost"      =>$row['elc_cost'],
                            "water_cost"    =>$row['water_cost'],
                            "room_cost"     =>$row['room_cost'],
                            "elc_unit"      =>$row['elc_unit'],
                            "total"         =>$row['total'],
                            "status"        =>$row['status']
                            
                        );
                        array_push($data,$el);
                   }
                   return array("status"=>"success","msg"=>"-","data"=>$data);
               }
               
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
           }
        } 
    }
?>