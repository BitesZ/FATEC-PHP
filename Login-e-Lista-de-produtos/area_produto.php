<?php 
    //se caso não estiver logado vai sair da pág
    session_start();

    if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
        header('Location: index.php');
        exit;
    }
?>

<?php 
    include'bdd.php';

    //Funções para evitar redundancia de códigos:
    //Consultar nome baseado no ID
    function exibirNome($id_produto) {
        global $connect;

        $sql = "SELECT * FROM produtos WHERE id = $id_produto";
        $result = $connect->query($sql);
        
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            echo $row["nome"];
    }
}
    //Consultar Descrição baseado no ID
    function exibirDescricao($id_produto) {
        global $connect;

        $sql = "SELECT * FROM produtos WHERE id = $id_produto";
        $result = $connect->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            echo $row["descricao"];
        }
    }
    //Consultar preço baseado no ID
    function exibirPreco($id_produto) {
        global $connect;

        $sql = "SELECT * FROM produtos WHERE id = $id_produto";
        $result = $connect->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            echo "R$" . $row["preco"];
        }
    }
    //Consultar imagem baseado no ID
    function exibirImagem($id_produto){
        global $connect;

        $sql = "SELECT * FROM produtos WHERE id = $id_produto";
        $result = $connect->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            echo $row["imagem"];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleProd.css"/>
    <title>Area do Produto</title>
</head>
<body>
    <div class="container">
        <div class="product">
            <img class="imagem" src="<?php exibirImagem(1) ?>">
            <span class="nome"><?php exibirNome(1) ?></span><br>
            <span class="descricao"><?php exibirDescricao(1) ?></span><br>
            <span class="preco"><?php exibirPreco(1) ?></span>
        </div>
        <div class="product">
            <img class="imagem" src="<?php exibirImagem(2) ?>">
            <span class="nome"><?php exibirNome(2) ?></span><br>
            <span class="descricao"><?php exibirDescricao(2) ?></span><br>
            <span class="preco"><?php exibirPreco(2) ?></span>
        </div>
        <div class="product">
            <img class="imagem" src="<?php exibirImagem(3) ?>">
            <span class="nome"><?php exibirNome(3) ?></span><br>
            <span class="descricao"><?php exibirDescricao(3) ?></span><br>
            <span class="preco"><?php exibirPreco(3) ?></span>
        </div>
        <div class="product">
            <img class="imagem" src="<?php exibirImagem(4) ?>">
            <span class="nome"><?php exibirNome(4) ?></span><br>
            <span class="descricao"><?php exibirDescricao(4) ?></span><br>
            <span class="preco"><?php exibirPreco(4) ?></span>
        </div>
        <div class="product">
            <img class="imagem" src="<?php exibirImagem(5) ?>">
            <span class="nome"><?php exibirNome(5) ?></span><br>
            <span class="descricao"><?php exibirDescricao(5) ?></span><br>
            <span class="preco"><?php exibirPreco(5) ?></span>
        </div>
        <div class="product">
            <img class="imagem" src="<?php exibirImagem(6) ?>">
            <span class="nome"><?php exibirNome(6) ?></span><br>
            <span class="descricao"><?php exibirDescricao(6) ?></span><br>
            <span class="preco"><?php exibirPreco(6) ?></span>
        </div>
        <div class="product">
            <img class="imagem" src="<?php exibirImagem(7) ?>">
            <span class="nome"><?php exibirNome(7) ?></span><br>
            <span class="descricao"><?php exibirDescricao(7) ?></span><br>
            <span class="preco"><?php exibirPreco(7) ?></span>
        </div>
        <div class="product">
            <img class="imagem" src="<?php exibirImagem(8) ?>">
            <span class="nome"><?php exibirNome(8) ?></span><br>
            <span class="descricao"><?php exibirDescricao(8) ?></span><br>
            <span class="preco"><?php exibirPreco(8) ?></span>
        </div>
    </div>
    <form action="index.php" method="POST">
        <input type="hidden" name="logout" value="1">
        <input type="Submit" value="Sair">
    </form>
    
</body>
</html>