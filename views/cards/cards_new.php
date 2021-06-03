
    <header class="container">
        <h2><?php echo $data ["titulo"]; ?></h2>
    </header>
    <main class="container">
        <div class="row">
            <form action="index.php?c=cards&a=save" method="post" id="form" class="col s6">

                CC: <input type="number" name="cedula" size="40" minlength="7" maxlength="15" required placeholder="Numero de Identificacion"> <input type="submit" />
                <input name="codigo" type="hidden" value=<?php echo $data ["cards"]?>>
            </form>
        </div>
        <p id="codigo"></p>
        <div class="tarjeton">
            <div  class="listado" id="listado">
            </div>
        </div>

    </main>
    <script>
        function NumeroAleatorio() {
            var num = Math.round(Math.random() * (<?php echo $data ["items"]?> - 1) + 1);
            // var num = Math.round(Math.random() * (27 - 1) + 1);
            return num;
        }
        function CrearIndentidad (codigo,cod,identy){
            codigo.innerHTML += cod+ "-"+ identy;
        }
        let identy = <?php echo $data ["cards"];?>;
        //let identy = 2;
    </script>
    <script src="js/materialize.js"></script>
    <script src="js/main.js"></script>
</body>
</html>