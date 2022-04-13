<?php
require_once './User.php';
require_once './Connection.php';
require_once './mail.php';

function main(){ 
    $conn = OpenCon();
    $user = new User($_POST['fe_name'], $_POST['fe_phone'], $_POST['fe_email'],date('Y-m-d H:i:s'));
    $sql = "INSERT INTO `feedbacks`( `name`, `phone`, `email`,`created_at`) VALUES ('".$user->getName()."','".$user->getPhone()."','".$user->getEmail()."','".$user->getCreated_at()."')";
    $result = $conn->query($sql);
    $conn->close();
    sendMail($user);
    return true;
}

main();

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

