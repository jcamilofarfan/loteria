<?php ?>
<div class="container">
        <h2><?php echo $data ["titulo"]; ?></h2>
        <a href="index.php?c=cards&a=new">Agregar</a>
    </div>
    <section class="container">

        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Numero de carton</th>
                    <th>Identificador</th>
                    <th>Dueño</th>
                    <th>Imprimir</th>
                </tr>
            </thead>
            <tbody id="tablebody">
            </tbody>
        </table>
    </section>
    <script>
        let tablebody = document.getElementById("tablebody");
        let cardsArray = [];
        let cardArray = [];
        let number;
        let arraycard;
        let identificacion;
        let numdelet =0;
        <?php foreach($data ["Cards"] as $dato){?>
            number = <?php echo $dato["id"];?>;
            cardArray.push(number);
            arraycard = [<?php echo $dato["array"];?>];
            cardArray.push(arraycard);
            console.log(cardArray);
            identificacion = <?php echo $dato["cedula"];?>;
            cardArray.push(identificacion);
            cardsArray.push(cardArray);
            cardArray = [];

        <?php } ?>
        for (let i = 0; i < cardsArray.length; i++) {

            let numdelet = 0
            for (let e = 0; e < 25; e++) {
                //listar.innerHTML += `<tr><td>{elemento}.png" alt="abreojo" width="100" height="100"></spam>`;
                number = cardsArray[i][1].shift();
                numdelet+= number
                //cardsArray[i][1][e];
            }
            tablebody.innerHTML += `<tr><td>${cardsArray[i][0]}</td>
                                        <td>${numdelet}-${cardsArray[i][0]}</td>
                                        <td>${cardsArray[i][2]}</td>
                                        <td><form action="index.php?c=cards&a=read" method="post"><input name="code" type="hidden" value="${cardsArray[i][0]}"><input type="submit" value="Imprimir"/></form></td>
                                        </tr>`;
            //tablebody.innerHTML += ``;
            //console.log(cardsArray[i][1]);
            //console.log(cardsArray[i][2]);
        }
        //console.log(numdelet);
    </script>
</body>
</html>