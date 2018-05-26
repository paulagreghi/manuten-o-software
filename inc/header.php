<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sistema Gerenciamento Interno de Bolsistas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">SGB</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">          
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Iniciação <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>iniciacao">Gerenciar Iniciações</a></li>
                            <li><a href="<?php echo BASEURL; ?>iniciacao/add.php">Nova Iniciação</a></li>
                        </ul>
                    </li>
                </ul> 
                <ul class="nav navbar-nav">          
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Discente <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>discente">Gerenciar Discentes</a></li>
                            <li><a href="<?php echo BASEURL; ?>discente/add.php">Cadastrar Discente</a></li>
                        </ul>
                    </li>
                </ul> 
                <ul class="nav navbar-nav">          
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Docente <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>docente">Gerenciar Docentes</a></li>
                            <li><a href="<?php echo BASEURL; ?>docente/add.php">Cadastrar Docente</a></li>
                        </ul>
                    </li>
                </ul>                  
                <ul class="nav navbar-nav">          
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departamento <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>departamento">Gerenciar Departamentos</a></li>
                            <li><a href="<?php echo BASEURL; ?>departamento/add.php">Cadastrar Departamento</a></li>
                        </ul>
                    </li>
                </ul> 
                <ul class="nav navbar-nav">          
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programa <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>programa">Gerenciar Programas</a></li>
                            <li><a href="<?php echo BASEURL; ?>programa/add.php">Cadastrar Programa</a></li>
                        </ul>
                    </li>
                </ul> 
                <ul class="nav navbar-nav">          
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fonte de Fomento <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>fonte">Gerenciar Fontes de Fomento</a></li>
                            <li><a href="<?php echo BASEURL; ?>fonte/add.php">Cadastrar Fonte de Fomento</a></li>
                        </ul>
                    </li>
                </ul>             
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>

<main class="container">