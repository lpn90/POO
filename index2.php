<?php
/**
 * User: Leonardo
 * Date: 30/09/2016
 * Time: 20:21
 */

require_once __DIR__ . "/PessoaFisica.php";
require_once __DIR__ . "/PessoaJuridica.php";
$cliente1 = new PessoaFisica(1,'Ana','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),11111111111);
$cliente2 = new PessoaFisica(2,'Maria','Rua 1, 35', '(31) 9 8432-5893', null, rand(0,5),22222222222);
$cliente3 = new PessoaFisica(3,'Paula','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),33333333333);
$cliente4 = new PessoaFisica(4,'José','Rua 1, 35', '(31) 9 8432-5893', null, rand(0,5),44444444444);
$cliente5 = new PessoaFisica(5,'Luiz','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),55555555555);
$cliente6 = new PessoaJuridica(6, 'Lojas Prado', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente7 = new PessoaJuridica(7, 'Armarinho 1', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente8 = new PessoaJuridica(8, 'Café Preto', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente9 = new PessoaJuridica(9, 'Jóias Helena', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente10 = new PessoaJuridica(10, 'Chapéus Touro', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
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
            <h2><?php echo $cliente->getNome(); ?></h2>
        </div>
        <p>
            <?php
            echo $cliente instanceof PessoaFisica ? $cliente->getCPF() . "<br />" : $cliente->getCNPJ() . "<br />";
            echo $cliente->getEndereco() . "<br />";
            echo $cliente->getTelefone() . "<br />";
            if ($cliente->getEnderecoCobranca() !== null) {
                echo "Endereço de Cobrança:<br />";
                echo $cliente->getEnderecoCobranca();
            }
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
                <td>Pessoa Física</td>
                <td>Classificação</td>
                <td>Ação</td>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($clientes as $cli):?>
                <tr>
                    <td><?php echo $cli->getId(); ?></td>
                    <td><?php echo $cli->getNome(); ?></td>
                    <td><?php echo $cli instanceof PessoaFisica ? "<i class='glyphicon glyphicon-ok'></i>" : "<i class='glyphicon glyphicon-remove'></i>"; ?></td>
                    <td><?php for($i = 0; $i < $cli->getImportancia(); $i++) { echo '<i class="text-warning glyphicon glyphicon-star"></i>'; } ?></td>
                    <td><a href='/?id=<?php echo $cli->getId(); ?>' class='btn btn-primary'>Detalhes</a></td>
                </tr>
                <?php
            endforeach;
            ?>
            </tbody>
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