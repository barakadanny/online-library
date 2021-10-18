<?php require('config.php'); ?>
<?php

    if(!defined('not_empty')){
        function not_empty($fields = []){
            if(count($fields) !=0){
                foreach($fields as $field){
                    if(empty($_POST[$field]) || trim($_POST[$field])==""){
                        return false;
                    }
                }
                return true;
            }
        }
    }

    if(!defined('is_already_in_use')){
        function is_already_in_use($field, $value, $table){
            global $con;

            $sql = "SELECT user_ID from $table WHERE $field = ?";
            $stmt = $con->prepare($sql);
            $stmt->execute([$value]);
            // $result=$stmt->get_result();  //get the mysqli result
            // $user =$result->fetch_assoc();   // fetch data
            $count = $stmt->rowCount();

            $stmt->closeCursor();

            return $count;

        }
    }




?>