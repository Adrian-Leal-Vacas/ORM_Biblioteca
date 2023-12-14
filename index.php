<?php
include_once "./ORM/ORM.inc.php";
include_once "./clases/Disco.php";
include_once "./clases/Libro.php";
include_once "./clases/Pelicula.php";
if (isset($_POST["tipoDato"])) {
    if (isset($_POST["tipo"]) && $_POST["tipo"] == "libro") {
        $libroOk = true;
        $peliculaOk = false;
        $discoOk = false;
    }
    if (isset($_POST["tipo"]) && $_POST["tipo"] == "pelicula") {
        $peliculaOk = true;
        $libroOk = false;
        $discoOk = false;
    }
    if (isset($_POST["tipo"]) && $_POST["tipo"] == "disco") {
        $discoOk = true;
        $libroOk = false;
        $peliculaOk = false;
    }
}
if (isset($_POST["discoCreado"])) {
    $newDisco = new Disco(
        null,
        $_POST['titulo'],
        $_POST['grupo'],
        $_POST['ano'],
        $_POST['discografica'],
        $_POST['duracion'],
        $_POST['iswc'],
        $_POST['genero']
    );
    $orm = new ORM();
    $orm->persist($newDisco);
    $orm->flush($newDisco);
}
if (isset($_POST["libroCreado"])) {
    $newLibro = new Libro(
        null,
        $_POST['titulo'],
        $_POST['autor'],
        $_POST['ano'],
        $_POST['editorial'],
        $_POST['numPag'],
        $_POST['isbn'],
        $_POST['genero']
    );
    $orm = new ORM();
    $orm->persist($newLibro);
    $orm->flush($newLibro);
}
if (isset($_POST["peliculaCreado"])) {
    $newPeli = new Pelicula(
        null,
        $_POST['titulo'],
        $_POST['director'],
        $_POST['reparto'],
        $_POST['ano'],
        $_POST['distribuidora'],
        $_POST['duracion'],
        $_POST['isan'],
        $_POST['genero']
    );
    $orm = new ORM();
    $orm->persist($newPeli);
    $orm->flush($newPeli);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>ORM Biblioteca</title>
</head>

<body>
    <!-- Incluyo la cabezera -->
    <?php include_once "./estructuraWeb/cabecera.inc.php"; ?>
    <!-- Incluyo el cuerpo principal o ver todos -->
    <?php
    if (isset($_GET["ruta"]) && ($_GET["ruta"] == "verTodo")) {
        include_once "./estructuraWeb/verTodo.inc.php";
    } else {
        if (isset($libroOk) && $libroOk) {
            include_once "./formularios/formLibro.inc.php";
        } else if (isset($peliculaOk) && $peliculaOk) {
            include_once "./formularios/formPelicula.inc.php";
        } else if (isset($discoOk) && $discoOk) {
            include_once "./formularios/formDisco.inc.php";
        } else {
            include_once "./estructuraWeb/cuerpo.inc.php";
        }
    }
    ?>
    <!-- Incluyo el pie de página -->
    <?php include_once "./estructuraWeb/pie.inc.php"; ?>
</body>

</html>