<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
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

        <div class=container">

        </div>

    </div> <!-- /#top -->

</div>

<hr />
                <?php

                $received = urldecode($_GET['send']);//decodifica o valor passado pelo link
                $received = stripslashes($received);//limpa a string de  antes de "
                $received = unserialize($received);//transforma a string em array

                ?>

<div class="row">
    <div class="col-md-4"><strong>Name: </strong></div>
    <div class="col-md-8"><?php echo $received->Name; ?></div>
</div>
<div class="row">
    <div class="col-md-4"><strong>CPF: </strong></div>
    <div class="col-md-8"><?php echo $received->Cpf; ?></div>
</div>
<div class="row">
    <div class="col-md-4"><strong>Street: </strong></div>
    <div class="col-md-8"><?php echo $received->street; ?></div>
</div>
<div class="row">
    <div class="col-md-4"><strong>neighborhood: </strong></div>
    <div class="col-md-8"><?php echo $received->neighborhood; ?></div>
</div>
<div class="row">
    <div class="col-md-4"><strong>City: </strong></div>
    <div class="col-md-8"><?php echo $received->City; ?></div>
</div>
<div class="row">
    <div class="col-md-4"><strong>Profession: </strong></div>
    <div class="col-md-8"><?php echo $received->Profession; ?></div>
</div>
<div class="row">
    <div class="col-md-4"><strong>Street: </strong></div>
    <div class="col-md-8"><?php echo $received->street; ?></div>
</div>
<div class="row">
    <div class="col-md-4"><strong>Marital Status: </strong></div>
    <div class="col-md-8"><?php echo $received->MaritalStatus; ?></div>
</div>
<td class="actions">

   <a class="btn btn-warning btn-xs" href="index.php">Voltar</a>
</td>

<div id="bottom" class="row">

</div> <!-- /#bottom -->
</div>  <!-- /#main -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

