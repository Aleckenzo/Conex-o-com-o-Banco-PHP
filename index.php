<?php
    if (isset($_POST['submit']))
    {       
        include_once('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    
        $sql = mysqli_query($conn, "INSERT INTO dados (nome, email) VALUES ('$nome', '$email')");
    }
    // Fecha a conexão com o banco de dados
    $conn->close();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando conexão com o Banco</title>
</head>
<body>
    <header>
        <h1>Preencha os dados aqui</h1>
    </header>
    <section>
        <form action="index.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

            <input type="submit" value="Enviar" name="submit" id="submit">
        </form>
    </section>
</body>
</html>
