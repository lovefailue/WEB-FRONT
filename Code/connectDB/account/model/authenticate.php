<?php
    class Authenticate{
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
        function login($inpData){
           $query = "SELECT * FROM `account` WHERE `username`=:username;";
           $tokenNew = $this->generateToken($inpData['username'],$inpData['password']);
           $query2 = "SELECT * FROM `user` WHERE `account_id`=:account_id;";
           try{
                $stmt1 = $this->conn->prepare($query);
                $stmt1->bindParam(":username",$inpData['username'],PDO::PARAM_STR);
                $stmt1->execute();
                $rowcount = $stmt1->rowCount();
                if($rowcount<1){
                    return array("status"=>"fail","msg"=>"user not found");
                }else{
                    $row=$stmt1->fetch();
                    if($row["token"]!=$tokenNew){
                        return array("status"=>"fail","msg"=>"password incorrect");
                    }else{
                        $stmt2 = $this->conn->prepare($query2);
                        $stmt2->bindParam(":account_id",$row["account_id"],PDO::PARAM_STR);
                        $stmt2->execute();
                        $row2=$stmt2->fetch();
                        return array("status"=>"success","msg"=>"login success","data"=>$row2);
                    }
                }
           }catch(Exception $e){
                return array("status"=>"error","msg"=>$e->getMessage());
           }
        }
       
    }

?>