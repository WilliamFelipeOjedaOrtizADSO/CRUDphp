<?php

require_once(__DIR__ ."/../../libs/Database.php");
require_once(__DIR__ ."/../../libs/Modelo.php");
include_once("../../clases/Instructor.php");


$datebase = new Database();
    $connection = $datebase->getConnection();
    $Instructor = new Instructor($connection);


    $lista = $Instructor->getAll();

    ?>

<table border="1">
    <thead>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>DNI</th>
        <th>Horario</th>
        <th>Salario</th>
        <th>Fecha de Nacimiento</th>
        <th>Acciones</th>
        

    </thead>
    <tbody>
        <?php
        for ($i=0; $i < count($lista); $i++) {
            ?>
        <tr>
            <td><?=$lista[$i]['id'] ?></td>
            <td><?=$lista[$i]['first_name'] ?></td>
            <td> <?=$lista[$i]['last_name'] ?></td>
            <td> <?=$lista[$i]['email'] ?></td>
            <td> <?=$lista[$i]['phone'] ?></td>
            <td> <?=$lista[$i]['dni'] ?></td>
            <td> <?=$lista[$i]['user_schedule'] ?></td>
            <td> <?=$lista[$i]['salary'] ?></td>
            <td> <?=$lista[$i]['birthdate'] ?></td>



            <td>
                <div>
                    <a href="editar.php?id=<?=$lista[$i]['id'] ?>">Editar</a>
                <form action="eliminar.php" method="post">
                    <input type="hidden" name="id" value="<?=$lista[$i]['id'] ?>"> 
                    <button type="submit">Eliminar</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>


<?php

    for ($i=0; $i < count($lista); $i++) { 
        echo "<pre>";
        print_r($lista[$i]);
        echo "<pre>";
    }
