<?php

require_once(__DIR__ ."/../../libs/Database.php");
require_once(__DIR__ ."/../../libs/Modelo.php");
include_once("../../clases/Instructor.php");

$nombre = isset($_POST['first_name']) ?
 ($_POST['first_name'] != "" ? $_POST['first_name'] : false) :
 false;

 $apellido = isset($_POST['last_name']) ?
 ($_POST['last_name'] != "" ? $_POST['last_name'] : false) :
 false;

 $correo = isset($_POST['email']) ?
 ($_POST['email'] != "" ? $_POST['email'] : false) :
 false;

 $telefono = isset($_POST['phone']) ?
 ($_POST['phone'] != "" ? $_POST['phone'] : false) :
 false;

 $dni = isset($_POST['dni']) ?
 ($_POST['dni'] != "" ? $_POST['dni'] : false) :
 false;
if (
$nombre &&
$apellido &&
$correo &&
$telefono &&
$dni
) {
    $datebase = new Database();
    $connection = $datebase->getConnection();
    $Instructor = new Instructor($connection);
    $valor = $Instructor->store([
        "first_name" => $nombre, 
        "last_name" => $apellido, 
        "email" => $correo, 
        "phone" => $telefono,
        "dni"=> $dni,
        "user_schedule"=> $_POST["user_schedule"] ? $_POST["user_schedule"] : "",
        "salary"=> $_POST["salary"] ? $_POST["salary"] : ""
        ]);

        if ($valor != null) {
            header('location:/adso/2696521/controladores/Instructor/listar.php');
        }

}else {
    echo 'Faltan campos obligatorios';
}

var_dump($nombre);