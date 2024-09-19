<?php

require_once(__DIR__ ."/../../libs/Database.php");
require_once(__DIR__ ."/../../libs/Modelo.php");
include_once("../../clases/Instructor.php");

$datebase = new Database();
    $connection = $datebase->getConnection();
    $Instructor = new Instructor($connection);


$id = $_REQUEST['id'];

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

 $salario = isset($_POST['salary']) ?
 ($_POST['salary'] != "" ? $_POST['salary'] : false) :
 false;

 $horario = isset($_POST['user_schedule']) ?
 ($_POST['user_schedule'] != "" ? $_POST['user_schedule'] : false) :
 false;

 $fecha = isset($_POST['birthdate']) ?
 ($_POST['birthdate'] != "" ? $_POST['birthdate'] : false) :
 false;


 $aprendiz->update($id,[
    "first_name" => $nombre, 
    "last_name" => $apellido, 
    "email" => $correo, 
    "phone" => $telefono,
    "dni"=> $dni,
    "user_schedule"=> $horario,
    "salary"=> $salario,
    "birthdate" =>$fecha
    ]);

    header("location: listar.php");