<?php
    require_once "../../controllers/ClienteController.php";
    $ClienteController = new ClienteController();
    $resultData = $ClienteController->read();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <?php include "../includes/menu.php"; ?>
            <div class="col-9">
                <h3>Cadastro de clientes</h3>
                <a href="adicionar.php" class="btn btn-success">Adicionar</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultData as $dado){ ?>
                            <tr>
                                <th scope="row"><?= $dado->getId();?></th>
                                <td><?= $dado->getNome();?></td>
                                <td><?= $dado->getEmail();?></td>
                                <td><?= $dado->getCpf();?></td>
                                <td>
                                    <a href="excluir.php?id=<?= $dado->getId(); ?>"class="btn btn-sm btn-danger">Excluir</a>
                                </td>
                                
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>