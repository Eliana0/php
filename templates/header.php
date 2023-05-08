<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("Location:/login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>

    <nav class="navbar navbar-expand navbar-light" style="background-color: rgb(112, 112, 222);">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="/" aria-current="page">Sistema <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/secciones/empleados/index.php">Empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/secciones/puestos/index.php">Puestos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/secciones/usuarios/index.php">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cerrar.php">Cerrar sesión</a>
            </li>
        </ul>
    </nav>

  <main class="container">