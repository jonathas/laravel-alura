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
        <h1>Detalhes do produto <?= $p->nome ?></h1>
        <ul>
            <li>
                <b>Valor:</b> R$ <?= $p->valor ?>
            </li>
            <li>
                <b>Descrição:</b> <?= $p->descricao ?>
            </li>
            <li>
                <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
            </li>
        </ul>
    </div>
</body>

</html>
