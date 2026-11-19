<?php
require_once __DIR__ . '/../repositories/ClienteRepository.php';

if ($_POST) {
    $cliente = new Cliente(
        $_POST['nome'],
        $_POST['email'],
        $_POST['documento']
    );

    (new ClienteRepository())->criar($cliente);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo cliente</title>
</head>
<body>
    <h1>Novo cliente</h1>
    <nav>
        <a href="index.php">Voltar</a>
    </nav>

    <form action="" method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome" required><br>
        <input type="email" name="email" id="email" placeholder="E-mail" required><br>
        <input type="text" name="documento" id="documento" placeholder="CPF/CNPJ" required><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>