<?php

include_once 'config.php';
include_once 'connect_db'

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Starter Template for Bootstrap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/app.css">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DistroADA</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="list.php">Lista</a></li>
                <li><a href="add.php">Añadir Distro</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <h1>Most Popular Distros</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>
                Nombre
            </th>
            <th>Os Type</th>
            <th>Version</th>
            <th>Web</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Debian</td>
            <td>Linux, BSD</td>
            <td>9</td>
            <td>https://www.debian.org</td>
            <td><span class="glyphicon glyphicon-pencil editar" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash borrar" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td>Fedora</td>
            <td>Linux</td>
            <td>26</td>
            <td>https://getfedora.org/es/</td>
            <td><span class="glyphicon glyphicon-pencil editar" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash borrar" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td>Ubuntu</td>
            <td>Linux</td>
            <td>17.10</td>
            <td>https://www.ubuntu.com/</td>
            <td><span class="glyphicon glyphicon-pencil editar" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash borrar" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td>Arch</td>
            <td>Linux</td>
            <td>2017.10</td>
            <td>https://www.archlinux.org/</td>
            <td><span class="glyphicon glyphicon-pencil editar" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash borrar" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td>FreeBSD</td>
            <td>BSD</td>
            <td>10.4</td>
            <td>https://www.freebsd.org/es/</td>
            <td><span class="glyphicon glyphicon-pencil editar" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash borrar" aria-hidden="true"></span></td>
        </tr>
        </tbody>
    </table>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
