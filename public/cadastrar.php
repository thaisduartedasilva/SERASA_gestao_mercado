<?php

include "..infra/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$validade = $_POST["validade"];

$sql = "INSERT INTO produto (nome, categoria, descricao, quantidade, validade) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "sssii", $nome, $categoria, $descricao, $quantidade, $validade);

mysqli_stmt_execute($stmt);

header("Location: ../index.php");

?>