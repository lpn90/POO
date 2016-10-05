<?php
/**
 * User: Leonardo
 * Date: 28/09/2016
 * Time: 10:00
 */
require_once __DIR__ . "/Projeto/PessoaFisica.php";
require_once __DIR__ . "/Projeto/PessoaJuridica.php";

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
                    <li>
                        <a class="page-scroll" href="#ascendente">Ascendente</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#descendente">Descendente</a>
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
                            <td>ID <?php echo isset($ord) ? "<a href='/'><i class='glyphicon glyphicon-triangle-bottom'></i></a>" : "<a href='/?ord=desc'><i class='glyphicon glyphicon-triangle-top'></i></a>"; ?> </td>
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
                                <td><a href='Projeto/exibeCliente.php?id=<?php echo $cli->getId(); ?>' class='btn btn-primary'>Detalhes</a></td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </table>


                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="ascendente" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Ascendente</h1>

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
                            <?php
                            foreach($clientes as $cli):?>
                                <tr>
                                    <td><?php echo $cli->getId(); ?></td>
                                    <td><?php echo $cli->getNome(); ?></td>
                                    <td><?php echo $cli instanceof PessoaFisica ? "<i class='glyphicon glyphicon-ok'></i>" : "<i class='glyphicon glyphicon-remove'></i>"; ?></td>
                                    <td><?php for($i = 0; $i < $cli->getImportancia(); $i++) { echo '<i class="text-warning glyphicon glyphicon-star"></i>'; } ?></td>
                                    <td><button onclick='' class='btn btn-primary'>Detalhes</button></td>
                                </tr>
                                <?php
                            endforeach;
                            ?>
                        </table>

                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="descendente" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Descendente</h1>

                    <?php
                    krsort($clientes);
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
                            <?php
                            foreach($clientes as $cli):?>
                                <tr>
                                    <td><?php echo $cli->getId(); ?></td>
                                    <td><?php echo $cli->getNome(); ?></td>
                                    <td><?php echo $cli instanceof PessoaFisica ? "<i class='glyphicon glyphicon-ok'></i>" : "<i class='glyphicon glyphicon-remove'></i>"; ?></td>
                                    <td><?php for($i = 0; $i < $cli->getImportancia(); $i++) { echo '<i class="text-warning glyphicon glyphicon-star"></i>'; } ?></td>
                                    <td><button onclick='' class='btn btn-primary'>Detalhes</button></td>
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

</body>

</html>
