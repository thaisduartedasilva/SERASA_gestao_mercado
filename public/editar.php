<?php

include "..infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM produto WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);
$produtos = mysqli_fetch_assoc($resultado);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
</head>

<body>
    <header>
        <h1>Editar Produto</h1>
    </header>
    <main>
        <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $produtos["id"] ?>">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" value="<?php echo $produtos["nome"] ?>">
            <br>
            <label for="categoria">Categoria: </label>
            <input type="text" name="categoria" value="<?php echo $produtos["categoria"] ?>">
            <br>
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" value="<?php echo $produtos["descricao"] ?>">
            <br>
            <label for="quantidade">Quantidade no Estoque: </label>
            <input type="text" name="quantidade" value="<?php echo $produtos["quantidade"] ?>">
            <br>
            <label for="validade">Validade: </label>
            <input type="text" name="validade" value="<?php echo $produtos["validade"] ?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </main>
    
</body>
</html>