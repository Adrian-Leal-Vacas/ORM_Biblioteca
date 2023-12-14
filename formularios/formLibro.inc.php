<section>
    <h2>Formulario de creación de libros</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="titulo">Título</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>
        <label for="autor">Autor</label><br>
        <input type="text" id="autor" name="autor" required><br><br>
        <label for="ano">Año</label><br>
        <input type="date" id="ano" name="ano" required><br><br>
        <label for="editorial">Editorial</label><br>
        <input type="text" id="editorial" name="editorial" required><br><br>
        <label for="numPag">Numero de páginas (numero entero. Ej: 80)</label><br>
        <input type="number" id="numPag" name="numPag" required><br><br>
        <label for="isbn">Isbn</label><br>
        <input type="text" id="isbn" name="isbn" required><br><br>
        <label for="genero">Genero</label><br>
        <select name="genero" id="genero" required>
            <option value="romantico">Romantico</option>
            <option value="terror">Terror</option>
            <option value="comedia">Comedia</option>
            <option value="otro">Otro</option>
        </select>
        <br><br>
        <input type="submit" value="Agregar" id="libroCreado" name="libroCreado">
    </form>
</section>