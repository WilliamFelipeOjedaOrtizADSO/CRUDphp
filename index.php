
<?php
    require_once(__DIR__ . "/libs/Database.php");
    require_once(__DIR__ . "/libs/modelo.php");

    include('class/Aprendiz.php');

    $database = new Database();
    $connection = $database->getConnection();
    $aprendiz = new Aprendiz($connection);


    if (
        isset($_POST['first_name']) &&
        isset($_POST['last_name']) &&
        isset($_POST['email']) &&
        isset($_POST['phone']) &&
        isset($_POST['dni'])) 
        
    {

    
        
}
else {
    echo"Hay datos vacios";
}
    
    // $aprendiz->store([
    //     'first_name' => "juan",
    //     'last_name' => "carreño",
    //     'email' => "example3@gmail.com",
    //     'phone' => "65498654",
    //     'dni' => 38527411
    // ]);

    // $aprendiz->update(3, [
    //     'first_name' => "juan",
    //     'address' => "Sena Giron",
    //     'user_account' => 2696521
    // ]);

    
?>