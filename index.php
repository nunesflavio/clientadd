<?php


function __autoload($class_name) {
    if ($class_name !== 'PersonInterface'){
        require_once $class_name .'.class.php';
    }else{
        require_once $class_name .'.php';

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Cliente</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="main" class="container-fluid">
    <div id="top" class="row">
        <h1>Ordenar</h1>
        <div class=container">
            <form action="index.php" method="get">
                <div class="col-md-6">
                    <div class="btn-group">

                        <input type="submit" value="asc"  name="asc" class="btn btn-success"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-group">
                        <input type="submit" value="desc" name="desc" class="btn btn-success"/>
                    </div>
                </div>
            </form>
    </div>

    </div>

</div>

    <hr />
    <div id="list" class="row">

        <div class="table-responsive col-md-12">

            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereco</th>
                    <th class="actions">Ações</th>
                </tr>
                </thead>
                <tbody>

                <?php

                $clients =array(
                    0 => new PessoaFisica("Jhon Lopes","332.221.234.90","Rua do marques,323","Viloa Foly","Campo LImpo","Engenheiro Fisico","Casado"),
                    1 => new PessoaJuridica("French Phom", "331.209.992.22","Avenida das Bandeiras, 311", "Valo dos Galos", "Sao Paulo", "Diretor geral","Casado"),
                    2 => new PessoaJuridica("Fernanda Pthonson", " 334.212.332.12","Avenida das bandeiras", "vila monge", "Franca","Diretora","solteira"),
                    3 => new PessoaJuridica("Jhenifer Porto", " 334.309.112.33","Avenida das bandeiras", "Parque bandas", "Franca","Diretora","solteira"),
                    4 => new PessoaFisica("Cartlos Yuijhi", " 331.998.876.22","Rua dos Goncalves, 434", "Vila Torhu", "Mogi Mirim","Torneiro","solteira"),
                    5 => new PessoaJuridica("Rafael Flosh","221.098.212.22","Rua boa esperanca, 321", "Parque Leopardo", "Amaro", "Industrial","Casado"),
                    6 => new PessoaFisica("Carmelita Carmerosa", "221.212.332.40", "Avenida dos 7","Botafogo","Vila Golzalo","Enfermeira","Casada"),
                    7 => new PessoaJuridica("Richard Pholco", "112.090.212.20","Rua dos Portos,323","Parque Ribeiro","Londrina","Analista Financeiro","Solteiro"),
                    8 => new PessoaFisica("Ashley Nunes","331.212.309.30","Rua das ilhas","Vila das Fontes","Amaro","Enfermeira","Solteira"),
                    9 => new PessoaFisica("Bianca Orto","332.090.332.20","Rua Yong","Vila Jopao","Boa vista","Professora","Solteira"),

                );
                ?>

                <?php
                if(isset($_GET['asc'])){
                   foreach ($clients as $key => $client) {

                        ?>

                        <tr>
                            <td><?php echo $key; ?> </td>
                            <td><?php echo $client->Name; ?></td>
                            <td><?php echo $client->Cpf; ?></td>
                            <td><?php echo $client->street; ?></td>
                            <?php $send = serialize($client);
                            $send = urlencode($send);
                            ?>
                            <td class="actions">
                                <a class="btn btn-success btn-xs" href="<?php echo 'viewClient.php?send='.$send ?>">Visualizar</a>

                            </td>
                        </tr>
                        <?php

                    }

                }elseif (isset($_GET['desc'])){
                    rsort($clients);

                    foreach ($clients as $key => $client) {

                        ?>

                        <tr>
                            <td><?php echo $key; ?> </td>
                            <td><?php echo $client->Name; ?></td>
                            <td><?php echo $client->Cpf; ?></td>
                            <td><?php echo $client->street; ?></td>
                            <?php $send = serialize($client);
                            $send = urlencode($send);
                            ?>
                            <td class="actions">
                                <a class="btn btn-success btn-xs" href="<?php echo 'viewClient.php?send='.$send ?>">Visualizar</a>

                            </td>
                        </tr>
                        <?php

                    }
                }else {
                    foreach ($clients as $key => $client) {

                        ?>

                        <tr>
                            <td><?php echo $key; ?> </td>
                            <td><?php echo $client->Name; ?></td>
                            <td><?php echo $client->Cpf; ?></td>
                            <td><?php echo $client->street; ?></td>
                            <?php $send = serialize($client);
                                $send = urlencode($send);
                            ?>
                            <td class="actions">
                                <a class="btn btn-success btn-xs" href="<?php echo 'viewClient.php?send='.$send ?>">Visualizar</a>

                            </td>
                        </tr>
                        <?php

                    }

                }

                ?>

                </tbody>
            </table>

        </div>
    </div>

    <div id="bottom" class="row">

    </div> <!-- /#bottom -->
</div>  <!-- /#main -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
