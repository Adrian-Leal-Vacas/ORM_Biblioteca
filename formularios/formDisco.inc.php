<section>
    <h2>Formulario de creación de discos</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="titulo">Título</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>
        <label for="grupo">Grupu/músico</label><br>
        <input type="text" id="grupo" name="grupo" required><br><br>
        <label for="ano">Año</label><br>
        <input type="date" id="ano" name="ano" required><br><br>
        <label for="discografica">Discográfica</label><br>
        <input type="text" id="discografica" name="discografica" required><br><br>
        <label for="duracion">Minutos que dura la pelicula (numero entero. Ej: 80)</label><br>
        <input type="number" id="duracion" name="duracion" required><br><br>
        <label for="iswc">Iswc</label><br>
        <input type="text" id="iswc" name="iswc" required><br><br>
        <label for="genero">Genero</label><br>
        <select name="genero" id="genero" required>
            <option value="pop">POP</option>
            <option value="rock">Rock</option>
            <option value="clasica">Clasica</option>
            <option value="otro">Otro</option>
        </select>
        <br><br>
        <input type="submit" value="Agregar" id="discoCreado" name="discoCreado">
    </form>
</section>