<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$validade = $_POST["validade"];
$preco = $_POST["preco"];

$sql = "UPDATE produto SET nome = ?, categoria = ?, descricao = ?, quantidade = ?, validade = ?, preco = ? WHERE id = ?";
$stmt = $conexao->prepare($sql);

$stmt->bind_param("sssisii", $nome, $categoria, $descricao, $quantidade, $validade, $preco, $id);

$stmt->execute();
header("Location: ../index.php");
exit;

?>