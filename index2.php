<?php
/**
 * User: Leonardo
 * Date: 28/09/2016
 * Time: 10:25
 */

require_once __DIR__ . "/Cliente.php";
$cliente1 = new Cliente();
$cliente1->id = 1;
$cliente1->nome = "Ana";
$cliente1->cpf = 11111111111;
$cliente1->endereco = "Rua 1, 35";
$cliente1->telefone = "(31) 9 8432-3872";
$cliente2 = new Cliente();
$cliente2->id = 2;
$cliente2->nome = "José";
$cliente2->cpf = 22222222222;
$cliente2->endereco = "Rua 1, 35";
$cliente2->telefone = "(31) 9 8432-3872";
$cliente3 = new Cliente();
$cliente3->id = 3;
$cliente3->nome = "Paulo";
$cliente3->cpf = 33333333333;
$cliente3->endereco = "Rua 1, 35";
$cliente3->telefone = "(31) 9 8432-3872";
$cliente4 = new Cliente();
$cliente4->id = 4;
$cliente4->nome = "Amanda";
$cliente4->cpf = 44444444444;
$cliente4->endereco = "Rua 1, 35";
$cliente4->telefone = "(31) 9 8432-3872";
$cliente5 = new Cliente();
$cliente5->id = 5;
$cliente5->nome = "Júlia";
$cliente5->cpf = 55555555555;
$cliente5->endereco = "Rua 1, 35";
$cliente5->telefone = "(31) 9 8432-3872";
$cliente6 = new Cliente();
$cliente6->id = 6;
$cliente6->nome = "Priscila";
$cliente6->cpf = 66666666666;
$cliente6->endereco = "Rua 1, 35";
$cliente6->telefone = "(31) 9 8432-3872";
$cliente7 = new Cliente();
$cliente7->id = 7;
$cliente7->nome = "Flávia";
$cliente7->cpf = 77777777777;
$cliente7->endereco = "Rua 1, 35";
$cliente7->telefone = "(31) 9 8432-3872";
$cliente8 = new Cliente();
$cliente8->id = 8;
$cliente8->nome = "Antônio";
$cliente8->cpf = 88888888888;
$cliente8->endereco = "Rua 1, 35";
$cliente8->telefone = "(31) 9 8432-3872";
$cliente9 = new Cliente();
$cliente9->id = 9;
$cliente9->nome = "Pedro";
$cliente9->cpf = 99999999999;
$cliente9->endereco = "Rua 1, 35";
$cliente9->telefone = "(31) 9 8432-3872";
$cliente10 = new Cliente();
$cliente10->id = 10;
$cliente10->nome = "Luiz";
$cliente10->cpf = 12345678912;
$cliente10->endereco = "Rua 1, 35";
$cliente10->telefone = "(31) 9 8432-3872";
$clientes = [
    $cliente1, $cliente2, $cliente3, $cliente4, $cliente5,
    $cliente6, $cliente7, $cliente8, $cliente9, $cliente10
];
$ord = filter_input(INPUT_GET, 'ord');
if($ord === 'desc') {
    krsort($clientes);
}
$id = filter_input(INPUT_GET, 'id');
if(null !== $id && array_key_exists($id-1,$clientes)) {
    $cliente = $clientes[$id-1];
} else {
    $cliente = null;
}
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>POO - School of Net</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous"><link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <?php
    if($cliente):
        ?>
        <div class="page-header">
            <h2><?php echo $cliente->nome; ?></h2>
        </div>
        <p>
            <?php
            echo $cliente->cpf . "<br />";
            echo $cliente->endereco . "<br />";
            echo $cliente->telefone . "<br />";
            ?>
        </p>
        <hr />
        <a href="/" class="btn btn-primary">Voltar</a>
        <?php
    else:
        ?>
        <table class="table table-hover tabla-responsive">
            <thead>
            <tr>
                <td>ID <?php echo isset($ord) ? "<a href='/'><i class='glyphicon glyphicon-triangle-bottom'></i></a>" : "<a href='/?ord=desc'><i class='glyphicon glyphicon-triangle-top'></i></a>"; ?> </td>
                <td>Nome</td>
                <td>Ação</td>
            </tr>
            </thead>
            <?php
            foreach($clientes as $cli) {
                echo "<tr><td>{$cli->id}</td><td>{$cli->nome}</td><td><a href='/?id={$cli->id}' class='btn btn-primary'>Detalhes</a></td>";
            }
            ?>
        </table>
        <?php
    endif;
    ?>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
</body>
</html>
