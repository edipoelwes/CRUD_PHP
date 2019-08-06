<?php
$sdn = "mysql:dbname=blog; host=localhost";
$dbuser = "root";
$dbpass = "";

try{
    $pdo = new PDO($sdn, $dbuser, $dbpass);

    //echo "Conexão estabelecida com sucesso.";

} catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>