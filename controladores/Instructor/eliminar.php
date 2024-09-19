<?php

require_once(__DIR__ ."/../../libs/Database.php");
require_once(__DIR__ ."/../../libs/Modelo.php");
include_once("../../clases/Instructor.php");

$datebase = new Database();
    $connection = $datebase->getConnection();
    $Instructor = new Instructor($connection);

    $id = $_REQUEST['id'];


    $Instructor->delete($id);

    header("location: listar.php");