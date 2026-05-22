<?php

session_start();

$host = "localhost";
$user = "root";
$pass = "root"; 
$db = "sistema_carlos_buttke";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão");
} else {
    echo ("<p> BD:ok</p>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario WHERE nome = '$usuario' AND senha = '$senha'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $_SESSION["usuario"] = $usuario;
        header("Location: home.php");
        exit();
    } else {
        echo "<p style='color:red;'>Usuário ou senha inválidos.</p>";
    }
}

?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>
</head>

<body>

    <h1>Login com php </h1>
    <form method="POST">

        <label for="usuario">Usuario :</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha : </label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">Entrar</button>
    </form>

<?php

    if(isset ($erro)) {
        echo $erro ;
    }

?>


</body>

</html>