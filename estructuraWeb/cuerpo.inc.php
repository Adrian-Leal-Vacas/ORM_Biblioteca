<section>
    <h3>Elige que quieres crear</h3>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="tipo">Quiero: </label>
        <select name="tipo" id="tipo">
            <option value="libro">Libro</option>
            <option value="pelicula">Pelicula</option>
            <option value="disco">Disco</option>
        </select>
        <input type="submit" value="Seleccionar" id="tipoDato" name="tipoDato">
    </form>
</section>