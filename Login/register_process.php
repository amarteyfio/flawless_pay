<?php
/**
 * 
 * 
 */

//Include controller
require("../Controller/user_controller.php");

//check if button is clicked
if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordc = $_POST['passwordc'];
    $gender = $_POST['gender'];

    //PASSWORD CHECK
    if($password != $passwordc){
        echo "
        <SCRIPT> alert('Passwords do not Match');
        window.location.replace('register.php');
        ";
    }

    //encrypt password
    $final_password = password_hash($password, PASSWORD_DEFAULT);

}
else{
    echo "something went wrong";
}
/**Ensure Email does not exist in database before inserting */
$user = sel_usermail_ctr($email); 
    
if(empty($user)){
    add_user_ctr($name,$email,$gender,$final_password,$number);
    $message = 'Account Created';
        echo "<SCRIPT> alert('$message')
        window.location.replace('login.php');
        </SCRIPT>";
}
else
{
    $message = 'An account with this email already exists';
        echo "<SCRIPT> alert('$message')
        window.location.replace('register.php');
        </SCRIPT>";

}

?>