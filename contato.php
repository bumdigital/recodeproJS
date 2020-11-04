<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "amigaopet";

    // Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if (!$conn) {
        die("A conexão ao DB falhou: " . mysqli_connect_error());
    }

    if (isset($_POST["none"]) && isset($_POST["msg"])){
        $none = $_POST["none"];
        $msg = $_POST["msg"];

        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql); 
    }
    ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>contato - Amigão Pet</title>
    <link rel="stylesheet" href="css\estilo.css" class="menu">
</head>

<body>
    <!--Menu-->
   <?php
    include_once("menu.html");
   ?>  

    <h2>Contato</h2>
    <hr>

    <div class="contatos">
        <div class="email">
            <img src="imagens\email.jpg" width="90px">
            contato@amigaopet.com.br
        </div>

        <div class="whatsapp">
            <img src="imagens\whatsapp.jpg" width="80px">
            (11) 9999-9999
        </div>
    </div>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>


    <form method="post" action="">
        Nome:<br>
        <input type="text" name="nome" style="width:500px"><br>
        Mensagem:<br>
        <input type="text" name="msg" style="width:500px"><br>
        <input type="submit" name="submit" value="Enviar"><br>
    </form>

    <?php
        $sql = "select * from comentarios";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
            }
        } else {
            echo "Nenhum pcomentário ainda!"
        }
    ?>

    <footer id="rodape">
        <p id="formas_pagamento"><strong>Formas de pagamento</strong></p>
        <img src="imagens\formasdepagamento.png" alt="Formas de pagamento">
        <p>&copy; Amigão Pet</p>
    </footer>
</body>

</html>