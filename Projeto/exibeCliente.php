<?php
/**
 * User: Leonardo
 * Date: 03/10/2016
 * Time: 23:29
 */

require_once __DIR__ . "/PessoaFisica.php";
require_once __DIR__ . "/PessoaJuridica.php";


session_start();

$clientes = array();

$clientes = $_SESSION['clientes'];
$id = $_GET['id'];

?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>POO - Exibe Cliente</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous"><link href="../css/bootstrap.min.css" rel="stylesheet">

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
    $cliente = $clientes[$id-1];
        ?>
        <div class="page-header">
            <h2><?php echo $cliente->getNome(); ?></h2>
        </div>
        <p>
            <?php
            echo $cliente instanceof PessoaFisica ? "<b>CPF: </b>".$cliente->getCPF() . "<br />" : "<b>CNPJ: </b>".$cliente->getCNPJ() . "<br />";
            echo "<b>Importância: </b>";
            for($i = 0; $i < $cliente->getImportancia(); $i++) {
                echo "".'<i class="text-warning glyphicon glyphicon-star"></i>';
            }
            echo "<br /><b>Endereço: </b>".$cliente->getEndereco() . "<br />";
            echo "<b>Telefone: </b>".$cliente->getTelefone() . "<br />";
            if ($cliente->getEnderecoCobranca() !== null) {
                echo "<b>Endereço de Cobrança: </b>";
                echo $cliente->getEnderecoCobranca();
            }
            ?>
        </p>
        <hr />
        <a href="/POO/" class="btn btn-primary">Voltar</a>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
</body>
</html>


