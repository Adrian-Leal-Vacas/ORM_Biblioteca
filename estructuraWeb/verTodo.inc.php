<?php
    include_once "./ORM/ORM.inc.php";
    $orm = new ORM();
    $allDiscos = $orm->findAll('Disco');
    $allLibros = $orm->findAll('Libro');
    $allPeli = $orm->findAll('Pelicula');
    if (isset($_POST["busEspe"])) {
        $busqueda = $orm->find($_POST["tipo"],$_POST["id"]);
    }
?>
<section>
    <h1>Busqueda en especifico</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]. "?ruta=verTodo" ?>" method="post">
        <br><label for="tipo">Quiero: </label>
        <select name="tipo" id="tipo">
            <option value="Libro">Libro</option>
            <option value="Pelicula">Pelicula</option>
            <option value="Disco">Disco</option>
        </select>
        <label for="id">Con el id: </label>
        <input type="number" id="id" name="id">
        <input type="submit" value="Seleccionar" id="busEspe" name="busEspe"><br><br>
    </form>
    
    <?php if (isset($busqueda)) {
        echo $busqueda; } ?>
    <h1><br> Todas las Busquedas</h1>
    <h2><br>Todos los libros</h2>
    <?php 
    /* echo var_dump($allLibros)  */
    foreach ($allLibros as $key => $val) {
        ?> <p> <?php echo $val; ?> </p> <?php
    }
    ?>
    <h2><br> Todas las películas</h2>
    <?php
     /* echo var_dump($allPeli)  */
    foreach ($allPeli as $key => $val) {
        ?> <p> <?php echo $val; ?> </p> <?php
    } 
    ?>
    <h2><br> Todos los discos</h2>
    <?php
     /* echo var_dump($allDiscos) */
    foreach ($allDiscos as $key => $val) {
        ?> <p> <?php echo $val; ?> </p> <?php
    }  
    ?>
</section>