<?php
//Conexão com o BDD no phpmyadmin
$hostname = "localhost";
$user = "root";
$password = "senha";

$connect = new mysqli($hostname, $user, $password);

if ($connect->connect_error) {
    die("Erro ao conectar com o Banco de Dados: " . $connect->connect_error);
}

//CRIAÇÃO DE BANCO DE DADOS
$dbName = "bdd";

$query = "CREATE DATABASE IF NOT EXISTS $dbName";
if($connect->query($query) === TRUE) {
}
else {
    echo "Erro ao criar banco de dados: " . $connect->error;
}

$connect = new mysqli($hostname, $user, $password, $dbName);
//Criação de Tabelas e Inserção de dados
//ADMINISTRADORES
//TABELA
$sql_create_admin_table = "CREATE TABLE IF NOT EXISTS administradores(user VARCHAR(50) PRIMARY KEY,
        pass VARCHAR(50) NOT NULL)";
//COLUNAS
$sql_insert_admin1 = "INSERT IGNORE INTO administradores (user, pass) VALUES ('admin1', 'senha123')";
$sql_insert_admin2 = "INSERT IGNORE INTO administradores (user, pass) VALUES ('admin2', 'senha321')";

//PRODUTOS
//TABELA
$sql_create_prod_table = "CREATE TABLE IF NOT EXISTS produtos (
    id INT(100) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    imagem VARCHAR(250))";
//COLUNAS
$sql_insert_produto1 = "INSERT IGNORE INTO produtos (id, nome, descricao, preco, imagem) VALUES ('1', 'Monitor Samsung', '1080p LED HDMI VGA 75hz 24FHD', 600.90, 'images/Monitor.png')";
$sql_insert_produto2 = "INSERT IGNORE INTO produtos (id, nome, descricao, preco, imagem) VALUES ('2', 'Mouse Redragon', '7200DPI 6 Botões RGB', 109.90, 'images/Mouse.jpg')";
$sql_insert_produto3 = "INSERT IGNORE INTO produtos (id, nome, descricao, preco, imagem) VALUES ('3', 'Teclado Redragon', 'Branco USB2.0 ABNT2 Full Size', 89.90, 'images/Teclado.jpg')";
$sql_insert_produto4 = "INSERT IGNORE INTO produtos (id, nome, descricao, preco, imagem) VALUES ('4', 'Mousepad Mancer', 'RGB Grande 800X300X3MM', 99.90, 'images/Mousepad.jpg')";
$sql_insert_produto5 = "INSERT IGNORE INTO produtos (id, nome, descricao, preco, imagem) VALUES ('5', 'Webcam Logitech', 'HD 720p com Microfone', 179.90, 'images/Webcam.jpg')";
$sql_insert_produto6 = "INSERT IGNORE INTO produtos (id, nome, descricao, preco, imagem) VALUES ('6', 'Headset Razer', 'Branco e preto Botões de Mute e Volume', 229.90, 'images/Headset.jpg')";
$sql_insert_produto7 = "INSERT IGNORE INTO produtos (id, nome, descricao, preco, imagem) VALUES ('7', 'Controle Xbox', 'Edição Stellar Shift sem fio', 529.00, 'images/Controle.png')";
$sql_insert_produto8 = "INSERT IGNORE INTO produtos (id, nome, descricao, preco, imagem) VALUES ('8', 'Mesa Digitalizadora Wacom', 'Niveis de pressao 2048 Cor Preta USB', 410.99, 'images/Mesa_Digitalizadora.jpg')";
//

//Conexão para criação e inserção das tabelas
//Criação das tabelas
if ($connect->query($sql_create_admin_table) === TRUE) {
} else {
    echo "Erro ao criar a tabela: " . $connect->error . "<br>";
}
if ($connect->query($sql_create_prod_table) === TRUE) {
} else {
    echo "Erro ao criar a tabela: " . $connect->error . "<br>";
}

//Inserção em ADMINS
if ($connect->query($sql_insert_admin1) === TRUE) {
} else {
    echo "Erro ao inserir dados do administrador 1: " . $connect->error . "<br>";
}
if ($connect->query($sql_insert_admin2) === TRUE) {
} else {
    echo "Erro ao inserir dados do administrador 2: " . $connect->error . "<br>";
}

//Inserção em Produtos
if ($connect->query($sql_insert_produto1) === TRUE) {
} else {
    echo "Erro ao inserir dados do produto: " . $connect->error . "<br>";
}
if ($connect->query($sql_insert_produto2) === TRUE) {
} else {
    echo "Erro ao inserir dados do produto: " . $connect->error . "<br>";
}
if ($connect->query($sql_insert_produto3) === TRUE) {
} else {
    echo "Erro ao inserir dados do produto: " . $connect->error . "<br>";
}
if ($connect->query($sql_insert_produto4) === TRUE) {
} else {
    echo "Erro ao inserir dados do produto: " . $connect->error . "<br>";
}
if ($connect->query($sql_insert_produto5) === TRUE) {
} else {
    echo "Erro ao inserir dados do produto: " . $connect->error . "<br>";
}
if ($connect->query($sql_insert_produto6) === TRUE) {
} else {
    echo "Erro ao inserir dados do produto: " . $connect->error . "<br>";
}
if ($connect->query($sql_insert_produto7) === TRUE) {
} else {
    echo "Erro ao inserir dados do produto: " . $connect->error . "<br>";
}
if ($connect->query($sql_insert_produto8) === TRUE) {
} else {
    echo "Erro ao inserir dados do produto: " . $connect->error . "<br>";
}
?>