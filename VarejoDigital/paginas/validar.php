

<?php

include('config.php');

Mysql::varejo_digital();


$sql = Mysql::varejo_digital()->prepare("SELECT * FROM `Usuario`");

$sql->execute();

while($exibir = $sql->fetch(PDO::FETCH_ASSOC)){

    echo $exibir['nome']."<br>";
    
}

?>

