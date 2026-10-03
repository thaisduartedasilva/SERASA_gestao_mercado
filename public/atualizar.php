<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$validade = $_POST["validade"];

$sql = "UPDATE produto SET nome = ?, categoria = ?, descricao = ?, quantidade = ?, validade = ? WHERE id = ?";
$stmt = $conexao->prepare($sql);

$stmt->bind_param("sssisi", $nome, $categoria, $descricao, $quantidade, $validade, $id);

$stmt->execute();
header("Location: ../index.php");
exit;

?>