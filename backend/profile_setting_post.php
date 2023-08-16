<?php 
session_start();
require_once('../config/db.php');

if (isset($_POST['update_name_email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id = $_SESSION['login_id'];

    $update_name_email_query = "UPDATE pro_users SET name='$name', email='$email' WHERE id=$id";
    $query_update_email_query_run = mysqli_query($db_con, $update_name_email_query);

    if($query_update_email_query_run){
        $_SESSION['login_name'] = $name;
        $_SESSION['login_email'] = $email;

        $_SESSION['updated_msg'] = "Name & Email Successfully Updated!";
        header('Location:profile_settings.php');
    }else{
        $_SESSION['updated_error_msg'] = "Name & Email Not Updated!";
        header('Location:profile_settings.php');
    }
    
}



// Password Change function

if (isset($_POST['password_update'])) {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $user_id = $_SESSION['login_id'];

    if(!$password){
        $_SESSION['pass_error'] = "Password field required.";
        header('Location:profile_settings.php');
    }elseif(!$confirm_password){
        $_SESSION['confirm_pass_error'] = "Confirm Password required.";
        header('Location:profile_settings.php');
    }elseif($password != $confirm_password){
        $_SESSION['match_pass_error'] = "Password & Confirm Password not match.";
        header('Location:profile_settings.php');
    }else{
        $enc_password = md5($password);
        $update_password = "UPDATE pro_users SET password='$enc_password' WHERE id=$user_id";
        $update_query_run = mysqli_query($db_con, $update_password);
        header('Location:../login.php');
    }
}