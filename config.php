<?php
    $servername = "Localhost";
    $username = "root";
    $password = "";
    $dbname = "clientes";
    
    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica a conexão
/*     if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    else {
        echo "Conexão efetuada com sucesso";
    }   */

?>
