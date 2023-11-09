<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>PHP</title>
</head>
<body style="background-color: #F5FFB9;">
    <p class="dateHour"><?php 
    date_default_timezone_set ("America/Sao_Paulo");
    echo date("d/m/y ") . date("G:i a"); 
    ?></p>
    <h1 class="siteName">Área do administrador</h1>

    <!--Login-->
    <form action="#" method="post" class="loginBox">
        <label class="labelStyle">Usuário</label>
        <input type="text" name="user" class="textBox" required>
        <br><br>
        <label class="labelStyle">Senha</label>
        <input type="password" name="password" class="textBox" required>
        <br><br>
        <input type="checkbox" name="remember" id="remembercheck" class="checkbox"><label for="remembercheck" class="checkRemember">Lembrar login</label><br><br>
        <input type="submit" value="Login" name="btnLogin" class="btnStyle">

        <!--Verificação de login-->
        <p class="errorLogin"><?php 
        include 'bdd.php';

        if(isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
            header('Location: area_produto.php');
            exit;
        }

        if(isset($_POST['user']) && isset($_POST['password'])) {
            session_start();
            $userlog = $_POST['user'];
            $passlog = $_POST['password'];

            $sql = "SELECT * FROM administradores WHERE user = '$userlog' AND pass = '$passlog'";
            $result = $connect->query($sql);

            if($result->num_rows === 1){
                $_SESSION['logado'] = true;

                if(isset($_POST['remember']) && $_POST['remember'] == 'on'){
                    setcookie('rememberUser', $userlog, time() + 30 * 60, '/');
                }

                header('Location: area_produto.php');
                exit;
            }
            else {
                echo "Login Inválido, Tente novamente.";
            }
        }
        if(isset($_COOKIE['rememberUser'])){
            $rememberUser = $_COOKIE['rememberUser'];
        }
        else {
            $rememberUser = '';
        }
?></p>
    </form>

    <p class="footer-text" title="Desenvolvimento de Software Multiplataforma - Fatec">Site criado por Pedro Ricardo da Silva Tavares do Segundo Ciclo de DSM</p>
</body>
</html>

<!--Deslogar e excluir cookies-->
<?php 
    session_start();
    if (isset($_POST['logout']) && $_POST['logout'] == 1) {
    session_destroy();

    if (isset($_COOKIE['rememberUser'])) {
        unset($_COOKIE['rememberUser']);
        setcookie('rememberUser', null, -1, '/');
    }
}
    ?>