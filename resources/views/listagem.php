<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Controle de estoque</title>
</head>

<body>
    <div class="container">
        <h1>Listagem de produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th></th>
            <?php foreach ($produtos as $p) : ?>
                <tr>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->valor ?></td>
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>
                    <td>
                        <a href="/produtos/mostra/<?=$p->id?>">
                           Visualizar
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>
