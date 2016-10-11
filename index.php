<?php
/**
 * User: Leonardo
 * Date: 28/09/2016
 * Time: 10:00
 */
/*
define('CLASS_DIR', 'src/');
set_include_path((get_include_path().PATH_SEPARATOR.CLASS_DIR));
spl_autoload_register(function($class) {
    require_once(str_replace('\\','/',$class .'.php'));
});*/


require_once ("autoload.php");
require_once("cadCliente.php");

use PIN\Cliente\Types\PessoaFisicaType as PessoaFisica;
use PIN\Cliente\Types\PessoaJuridicaType as PessoaJuridica;

$ord = $_REQUEST['ord'];

if(isset($ord)) {
    krsort($clientes);
}

//require_once __DIR__ . "/src/PIN/Cliente/PessoaFisicaType.php";
//require_once __DIR__ . "/src/PIN/Cliente/PessoaJuridicaType.php";
/*
$cliente1 = new PessoaFisica(1,'Ana','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),'11111111111');
$cliente2 = new PessoaFisica(2,'Maria','Rua 1, 35', '(31) 9 8432-5893', null, rand(0,5),'22222222222');
$cliente3 = new PessoaFisica(3,'Paula','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),'33333333333');
$cliente4 = new PessoaFisica(4,'José','Rua 1, 35', '(31) 9 8432-5893', null, rand(0,5),'44444444444');
$cliente5 = new PessoaFisica(5,'Luiz','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),'55555555555');
$cliente6 = new PessoaJuridica(6, 'Lojas Prado', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente7 = new PessoaJuridica(7, 'Armarinho 1', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente8 = new PessoaJuridica(8, 'Café Preto', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente9 = new PessoaJuridica(9, 'Jóias Helena', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente10 = new PessoaJuridica(10, 'Chapéus Touro', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$clientes = [
    $cliente1, $cliente2, $cliente3, $cliente4, $cliente5,
    $cliente6, $cliente7, $cliente8, $cliente9, $cliente10
];


session_start();

$_SESSION['clientes'] = $clientes;

*/
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>POO - Cadastro de Clientes</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!--MODAL-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                <div>
                    <h4 class="text-info"><i class="fa fa-pencil fa-3x"></i>Dados do Cliente</h4>
                </div>
                <!--PAINEL HEADER-->
                <!-- <h4 class="modal-title" id="myModalLabel">modal titulo</h4>-->
            </div>
            <div id="conteudoModal" class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!--FIM DO MODAL-->

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Clientes</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Clientes</h1>
                    <br>

                    <table class="table table-hover tabla-responsive">
                        <thead>
                        <tr>
                            <td>ID <?php echo isset($ord) ? "<a href='/POO/'><i class='glyphicon glyphicon-triangle-bottom'></i></a>" : "<a href='?ord=cres'><i class='glyphicon glyphicon-triangle-top'></i></a>"; ?> </td>
                            <td>Nome</td>
                            <td>Pessoa Física</td>
                            <td>Classificação</td>
                            <td>Ação</td>
                        </tr>
                        </thead>
                        <?php
                        foreach($clientes as $cli):?>
                            <tr>
                                <td><?php echo $cli->getId(); ?></td>
                                <td><?php echo $cli->getNome(); ?></td>
                                <td><?php echo $cli instanceof PessoaFisica ? "<i class='glyphicon glyphicon-ok'></i>" : "<i class='glyphicon glyphicon-remove'></i>"; ?></td>
                                <td><?php for($i = 0; $i < $cli->getImportancia(); $i++) { echo '<i class="text-warning glyphicon glyphicon-star"></i>'; } ?></td>
                                <td><a id="btnVisualizar" href='<?php echo $cli->getId(); ?>' class='btn btn-primary' data-target="#modal" data-toggle="modal">Detalhes</a></td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(" #btnVisualizar ").click(function() {
                $(this).attr("href")
                var cod=$(this).attr('href');
                $('#conteudoModal').load('exibeCliente.php?cod='+ cod);
            });
        });
    </script>

</body>

</html>
