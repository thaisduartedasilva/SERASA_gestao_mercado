<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Estoque</title>
</head>

<body>
    <header>
        <h1>Gestão de Estoque</h1>
    </header>
    <main>
        <h2>Produtos Cadastrados no Estoque</h2>
        <table>
            <tr>
                <th>ID<th>
                <th>Nome<th>
                <th>Categoria<th>
                <th>Descrição<th>
                <th>Quantidade em estoque<th>
                <th>Validade<th>
            </tr>
            <?php while($produtos = mysqli_fetch_assoc($produto)){ ?>
                <tr>
                    <td><?php echo $produtos["id"] ?></td>
                    <td><?php echo $produtos["nome"] ?></td>
                    <td><?php echo $produtos["categoria"] ?></td>
                    <td><?php echo $produtos["descricao"] ?></td>
                    <td><?php echo $produtos["quantidade"] ?></td>
                    <td><?php echo $produtos["validade"] ?></td>
                    <td>
                        <a href="public/editar.php?id=<?php echo $produtos["id"] ?>">Editar</a>
                        <a href="public/excluir.php?id=<?php echo $produtos["id"] ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <h2>Cadastrar um Novo Produto no Estoque:</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" name="nome">
            <br>
            <label for="categoria">Categoria: </label>
            <input type="text" name="categoria">
            <br>
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao">
            <br>
            <label for="quantidade">Quantidade em estoque: </label>
            <input type="number" name="quantidade">
            <br>
            <label for="validade">Validade: </label>
            <input type="number" name="validade">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
    </main>
    
</body>
</html>