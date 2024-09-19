<?php

require_once(__DIR__ ."/../../libs/Database.php");
require_once(__DIR__ ."/../../libs/Modelo.php");
include_once("../../clases/Instructor.php");

$datebase = new Database();
    $connection = $datebase->getConnection();
    $Instructor = new Instructor($connection);


$id = $_REQUEST["id"];
$usuario = $Instructor->getById($id);

?>

<form action="actualizar.php" method="post">

<input type="hidden" name="id" value="<?= $usuario['id'] ?>" require>


<div>
<label for="">Nombre</label>
<input type="text" name="first_name" value="<?= $usuario['first_name'] ?>" require>
</div>
<div>
<label for="">Apellido</label>
<input type="text" name="last_name" value="<?= $usuario['last_name'] ?>" require>
</div>
<div>
<label for="">Fecha de Nacimiento</label>
<input type="date" name="birthdate" value="<?= $usuario['birthdate'] ?>" require>
</div>
<div>
<label for="">Correo</label>
<input type="text" name="email" value="<?= $usuario['email'] ?>" require>
</div>
<div>
<label for="">Telefono</label>
<input type="text" name="phone" value="<?= $usuario['phone'] ?>" require>
</div>
<div>
<label for="">DNI</label>
<input type="text" name="dni" value="<?= $usuario['dni'] ?>" readonly require>
</div>
<div>
<label for="">Ficha</label>
<input type="text" name="user_schedule" value="<?= $usuario['user_schedule'] ?>"require>
</div>
<div>
<label for="">%</label>
<input type="text" name="salary" value="<?= $usuario['salary'] ?>" require>
</div>

<div>
<button type="submit">Enviar</button>
</div>

</form>