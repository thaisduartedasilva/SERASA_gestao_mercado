<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$validade = $_POST["validade"];
$preco = $_POST["preco"];

$sql = "INSERT INTO produto (nome, categoria, descricao, quantidade, validade, preco) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "sssisi", $nome, $categoria, $descricao, $quantidade, $validade, $preco);

mysqli_stmt_execute($stmt);

header("Location: ../index.php");

?>