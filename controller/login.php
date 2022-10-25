<?php
include('../model/connection.php');
$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
$sql = sprintf("SELECT * FROM admin
                WHERE Username = '%s'",
                $conn->real_escape_string($_POST["username"]));
    $result = $conn->query($sql);

    $user = $result->fetch_assoc();
    if ($user) {
        // echo $user["Password"] . '' . $_POST["Lpassword"];
        echo $user["Admin_ID"];
        if (($_POST["password"] == $user["Password"])) {
            session_start();
            session_regenerate_id();
            $_SESSION["admin_id"] = $user["Admin_ID"];            
            header("Location: ../index.php");
            exit;
        }
        // $hashPass = password_hash($_POST["Lpassword"], PASSWORD_DEFAULT);
        // if ($hashPass === $user["Password"]) {
        //     session_start();
        //     session_regenerate_id();
        //     $_SESSION["user_id"] = $user["User_ID"];            
        //     header("Location: ../index.php");
        //     exit;
        // }
        // else{
        //     echo $hashPass;
        // }
        
    }
    // header("Location: ../index.php");
    $is_invalid = true;
}
?>