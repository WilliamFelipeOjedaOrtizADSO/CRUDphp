<?php

require_once(__DIR__ ."/../../libs/Database.php");
require_once(__DIR__ ."/../../libs/Modelo.php");
include_once("../../clases/Aprendiz.php");

$datebase = new Database();
    $connection = $datebase->getConnection();
    $aprendiz = new Aprendiz($connection);


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

 $promedio = isset($_POST['average']) ?
 ($_POST['average'] != "" ? $_POST['average'] : false) :
 false;

 $cuenta = isset($_POST['user_account']) ?
 ($_POST['user_account'] != "" ? $_POST['user_account'] : false) :
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
    "user_account"=> $cuenta,
    "average"=> $promedio,
    "birthdate" =>$fecha
    ]);

    header("location: listar.php");