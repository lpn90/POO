<?php
/**
 * User: Leonardo
 * Date: 28/09/2016
 * Time: 10:00
 */
require_once __DIR__ . "/Cliente.php";

$clientes = array( );

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


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <script language="JavaScript">
        function Exibir($id) {
            //recebe a string com elementos separados, vindos do PHP
            $string_array =  <?=json_encode($clientes)?>
            //transforma esta string em um array próprio do Javascript
            //$array_produtos = $string_array.split("|");
            $obj = new Object();
            $obj.id = 1;
            $obj.nome = "Teste";
            $obj.cpf = "0123";
            $obj.endereco = "Teste";
            $obj.telefone = "Teste";
            $obj = $string_array[$id-1];
            alert( "ID: " + $obj.id + "\nNome: " + $obj.nome +
                    "\nCPF: " + $obj.cpf + "\nEndereço: " + $obj.endereco +
                    "\nTelefone: " + $obj.telefone);
        }


    </script>

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
                            <td>ID</td>
                            <td>Nome</td>
                            <td>Ação</td>
                        </tr>
                        </thead>
                        <?php
                        foreach($clientes as $cli) {
                        echo "<tr><td>{$cli->id}</td><td>{$cli->nome}</td><td><button onclick='Exibir({$cli->id})' class='btn btn-primary'>Detalhes</button></td>";
                        }
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
                                <td>Ação</td>
                            </tr>
                            </thead>
                            <?php
                            foreach($clientes as $cli) {
                                echo "<tr><td>{$cli->id}</td><td>{$cli->nome}</td><td><button onclick='Exibir({$cli->id})' class='btn btn-primary'>Detalhes</button></td>";
                            }
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
                                <td>ID <?php echo isset($ord) ? "<a href='/'><i class='glyphicon glyphicon-triangle-bottom'></i></a>" : "<i class='glyphicon glyphicon-triangle-bottom'></i>"; ?> </td>
                                <td>Nome</td>
                                <td>Ação</td>
                            </tr>
                            </thead>
                            <?php
                            foreach($clientes as $cli) {
                                echo "<tr><td>{$cli->id}</td><td>{$cli->nome}</td><td><button onclick='Exibir({$cli->id})' class='btn btn-primary'>Detalhes</button></td>";
                            }
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
