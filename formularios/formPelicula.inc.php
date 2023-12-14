<section>
    <h2>Formulario de creación de películas</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="titulo">Título</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>
        <label for="director">Director</label><br>
        <input type="text" id="director" name="director" required><br><br>
        <label for="reparto">Reparto</label><br>
        <input type="text" id="reparto" name="reparto" required><br><br>
        <label for="ano">Año</label><br>
        <input type="date" id="ano" name="ano" required><br><br>
        <label for="distribuidora">Distribuidora</label><br>
        <input type="text" id="distribuidora" name="distribuidora" required><br><br>
        <label for="duracion">Minutos que dura la película (numero entero. Ej: 80)</label><br>
        <input type="number" id="duracion" name="duracion" required><br><br>
        <label for="isan">Isan</label><br>
        <input type="text" id="isan" name="isan" required><br><br>
        <label for="genero">Genero</label><br>
        <select name="genero" id="genero" required>
            <option value="romantico">Romantico</option>
            <option value="terror">Terror</option>
            <option value="comedia">Comedia</option>
            <option value="otro">Otro</option>
        </select>
        <br><br>
        <input type="submit" value="Agregar" id="peliculaCreado" name="peliculaCreado">
    </form>
</section>