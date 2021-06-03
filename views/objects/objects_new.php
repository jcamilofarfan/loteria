    <header class="container">
        <h2><?php echo $data ["titulo"]; ?> de Loteria</h2>
    </header>
    <main class="container">
        <form action="index.php?c=objects&a=save" method="post" id="new" name="new" enctype="multipart/form-data">
            Nombre <input type="text" id="objetos" name="objetos" required><br>
            Imagen <input required id="img" name="img" type="file" accept="image/png, .jpeg, .jpg,"/><br>
            <button id="save" name="save" type="submit" >Guardar</button>
        </form>
    </main>
    <footer>

    </footer>
    

</body>
</html>