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
    $sql = "select * from produtos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
            echo $rows["categoria"];
        }
    } else {
        echo "Nenhum produto cadastrado!";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>produtos - Amigões Pet</title>
    <link rel="stylesheet" href="css\estilo.css">
    <script src="js\funcoes.js"></script>
</head>

<body>
    <!--Menu-->
   <?php
    include_once("menu.html");
   ?> 

    <header>
        <h2>Amigões de estimação</h2>
    </header>
    <hr>
    <div class="principal">

        <!--Categorias-->
        <section class="categorias">
            <h3>Categorias</h3>
            <ul>
                <li onclick="exibirTodos()">Todos (16)</li>
                <li onclick="exibirCategoria('gatofilhote')">Gatos filhotes (4)</li>
                <li onclick="exibirCategoria('gatoadulto')">Gatos adultos (4)</li>
                <li onclick="exibirCategoria('cachorrofihlote')">Cachorros filhotes (4)</li>
                <li onclick="exibirCategoria('cachorroadulto')">Cachorros adultos (4)</li>
            </ul>
        </section>

        <div class="secundario">
            <section class="produtos">
            <?php
                $sql = "select * from produtos";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {
            ?>

                <div class="estilop" id="<?php echo $row["categoria"]; ?>">
                    <img src="<?php echo $row["imagem"]; ?>" width="120px" onclick="destaque(this)">
                    <br>
                    <p class="descricao"><?php echo $row["descricao"]; ?></p>
                    <hr>
                    <p class="descricao"><strike><?php echo $row["preco"]; ?></strike></p><br>
                    <p class="preco"><?php echo $row["precofinal"]; ?></p><br>
                </div>
            </section>

            <?php
                    }
                } else {
                    echo "Nenhum produto cadastrado!"
                }
            ?>

           
        </div>
    </div>
    <footer id="rodape">
        <p id="formas_pagamento"><strong>Formas de pagamento</strong></p>
        <img src="imagens\formasdepagamento.png" alt="Formas de pagamento">
        <p>&copy; Amigão Pet</p>
    </footer>
</body>

</html>