<?php require('config.php'); ?>
<?php

// this function isn't working yet
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

    // function to find an user by his/ her id
    if(!function_exists('find_user_by_id')){
        function find_user_by_id($id){
            global $con;

            $q= "SELECT * FROM user WHERE user_ID='$id'";
            //$result = mysqli_query($con, $q);
            $result = $con->query($q);
            //$count = mysqli_num_rows($result);
            $data=$result->fetch_object();
            return $data;
        }
    }
// funtion to verify if the user is connected
    if(!function_exists('is_logged_in')){
    function is_logged_in(){
        return isset($_SESSION['user_ID']) ||  isset($_SESSION['user_name']);
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