<?php
    class Account{
        private $conn = null;
        function __construct() {
            require ('../config/database.php');
            $db = new Database();
            $this->conn = $db->getConnection();
        }
        function generateToken($username, $password) {
            $salt = $_ENV['SALT'];
            $token = sha1($username . $salt . $password);
            return $token;
        }
        
        function createAccount($inpData) {
            $account_id = uniqid();
            $token = $this->generateToken($inpData['username'],$inpData['password']);
            $query = "INSERT INTO `account` (`account_id`,`username`,`token`)VALUES (:account_id,:username,:token);";
            $query2 = "INSERT INTO `user` (`account_id`,`fname`,`lname`,`tel`,`room`,`email`,`status`)VALUES (:account_id,:fname,:lname,:tel,:room,:email,'มีผู้เช่า');";
            $query3 = "UPDATE `room_status` SET `status`=:'มีผู้เช่า' WHERE `room`=:room;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":account_id",$account_id,PDO::PARAM_STR);
                $stmt1->bindParam(":username",$inpData['username'],PDO::PARAM_STR);
                $stmt1->bindParam(":token",$token,PDO::PARAM_STR);
                $stmt1->execute();
                
                $stmt2 = $this->conn->prepare($query2);
                $stmt2->bindParam(":account_id",$account_id,PDO::PARAM_STR);
                $stmt2->bindParam(":fname",$inpData['fname'],PDO::PARAM_STR);
                $stmt2->bindParam(":lname",$inpData['lname'],PDO::PARAM_STR);
                $stmt2->bindParam(":tel",$inpData['tel'],PDO::PARAM_STR);
                $stmt2->bindParam(":room",$inpData['room'],PDO::PARAM_STR);
                $stmt2->bindParam(":email",$inpData['email'],PDO::PARAM_STR);
                $stmt2->execute();

                return array("status"=>"success","msg"=>"account created successfully","data"=>null);
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
            
        }
        function deleteAccount($account_id){
            $query = "SELECT * FROM `account` WHERE `account_id`=:account_id;";
            $query2 = "DELETE FROM `user` WHERE `account_id`=:account_id;";
            $query3 = "DELETE FROM `account` WHERE `account_id`=:account_id;";
        
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":account_id",$account_id,PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();
                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"account not found");
                }else{
                    $stmt2 = $this->conn->prepare($query2);
                    $stmt2->bindParam(":account_id",$account_id,PDO::PARAM_STR);
                    $stmt2->execute();

                    $stmt3 = $this->conn->prepare($query3);
                    $stmt3->bindParam(":account_id",$account_id,PDO::PARAM_STR);
                    $stmt3->execute();
                    
                    return array("status"=>"success","msg"=>"account deleted successfully");
                }
                    
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function editProfile($inpData){
            
            $query = "SELECT * FROM `account` WHERE `account_id`=:account_id;";
            // $query3 = "UPDATE `account` SET `username`=:username WHERE `account_id`=:account_id;";
            $query4 = "UPDATE `user` SET `fname`=:fname, `lname`=:lname, `tel`=:tel, `email`=:email WHERE `account_id`=:account_id;";
            
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":account_id",$inpData['account_id'],PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();

                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"user not found");
                }else{
                    
                    $stmt4 = $this->conn->prepare($query4);
                    
                    $stmt4->bindParam(":fname",$inpData['fname'],PDO::PARAM_STR);
                    $stmt4->bindParam(":lname",$inpData['lname'],PDO::PARAM_STR);
                    $stmt4->bindParam(":tel",$inpData['tel'],PDO::PARAM_STR);
                    $stmt4->bindParam(":email",$inpData['email'],PDO::PARAM_STR);
                    $stmt4->bindParam(":account_id",$inpData['account_id'],PDO::PARAM_STR);
                    $stmt4->execute();
                    
                    return array("status"=>"success","msg"=>"update profile successfully");
                }
               
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function editUsername($inpData){
            
            $tokenNew = $this->generateToken($inpData['usernameNew'],$inpData['password']);
            $tokenOld = $this->generateToken($inpData['username'],$inpData['password']);
            $query = "SELECT * FROM `account` WHERE `account_id`=:account_id AND `token`=:token;";
            $query2 = "UPDATE `account` SET `username`=:username, `token`=:token WHERE `account_id`=:account_id;";
            
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":account_id",$inpData['account_id'],PDO::PARAM_STR);
                $stmt1->bindParam(":token",$tokenOld,PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();
                
                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"user not found or password is incorrect");
                }else{
                    $stmt2 = $this->conn->prepare($query2);
                    
                    $stmt2->bindParam(":username",$inpData['usernameNew'],PDO::PARAM_STR);
                    $stmt2->bindParam(":account_id",$inpData['account_id'],PDO::PARAM_STR);
                    $stmt2->bindParam(":token",$tokenNew,PDO::PARAM_STR);
                    $stmt2->execute();
                
                
                    return array("status"=>"success","msg"=>"update username successfully","token"=>$tokenNew);
                
                }
                   
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function editPassword($inpData){
            $tokenNew = $this->generateToken($inpData['username'],$inpData['passwordNew']);
            $tokenOld = $this->generateToken($inpData['username'],$inpData['password']);
            $query = "SELECT * FROM `account` WHERE `account_id`=:account_id AND `token`=:token;";
            $query2 = "UPDATE `account` SET `token`=:token WHERE `account_id`=:account_id;";
            try{
                $stmt1 = $this->conn->prepare($query);
                
                $stmt1->bindParam(":account_id",$inpData['account_id'],PDO::PARAM_STR);
                $stmt1->bindParam(":token",$tokenOld,PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();
                if($rowcount == 0){
                    return array("status"=>"fail","msg"=>"password is incorrect");
                }else{
                    $stmt2 = $this->conn->prepare($query2);
                    
                    $stmt2->bindParam(":account_id",$inpData['account_id'],PDO::PARAM_STR);
                    $stmt2->bindParam(":token",$tokenNew,PDO::PARAM_STR);
                    $stmt2->execute();
                
                
                    return array("status"=>"success","msg"=>"update password successfully","token"=>$tokenNew,"data"=>null);
                }
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function GetListRoomProfile($account_id){
            $query = "SELECT * FROM `user` WHERE `account_id`=:account_id;";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":account_id",$account_id,PDO::PARAM_STR);
                $stmt1->execute();
                $data = array();
                while ($row=$stmt1->fetch()){
                    $el = array(
                        "fname" =>$row['fname'],
                        "lanme"=>$row['lname'],
                        "tel"=>$row['tel'],
                        "email"=>$row['email'],
                        "room"=>$row['room']
                    );
                    array_push($data,$el);
                }
                return array("status"=>"success","msg"=>"-","data"=>$data);
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }
        function GetListAllProfile(){
            $query = "SELECT * FROM `user` ORDER BY `room` ASC";
            try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->execute();
                $data = array();
                while ($row=$stmt1->fetch()){
                    $el = array(
                        "status"=>$row['status']
                    );
                    array_push($data,$el);
                }
                return array("status"=>"success","msg"=>"-","data"=>$data);
                
            }catch(PDOException $e){
                return array("status"=>"error","msg"=>$e->getMessage());
            }
        }   
    }
?>