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

    if(!function_exists('is_already_in_use')){
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
// function to display errors
if(!function_exists('set_flash')){
    function set_flash($message, $type= 'info'){
        $_SESSION['notification']['message']=$message;
        $_SESSION['notification']['type']= $type;
    }
}

// function to maintain user data input when an error occur
if(!function_exists('save_input_data')){
    function save_input_data(){
        foreach($_POST as $key => $value){
            if(strpos($key, 'password')===false){
                $_SESSION['input'][$key]= $value;
            }
        }
    }
}

// function to get the input from the session and display it to the user
if(!function_exists('get_input')){
    function get_input($key){
        if(!empty($_SESSION['input'][$key])){
            return $_SESSION['input'][$key];
        }else{
            return null;
        }
    }
}

// function to delete all the sessions
if(!function_exists('clear_input_data')){
    function clear_input_data(){
        if(isset($_SESSION['input'])){
            $_SESSION['input']=[];
        }
    }
}

?>