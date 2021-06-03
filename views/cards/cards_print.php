<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data ["titulo"]; ?></title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/main.css" media="print" />
</head>
<body>
    <div class="container">
        <a href="index.php?c=cards">Volver</a>
        <h2><?php echo $data ["titulo"]; ?></h2>
    </div>
    <section class="container">

        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Numero de carton</th>
                    <th>Identificador</th>
                    <th>Dueño</th>
                </tr>
            </thead>
            <tbody id="tablebody">
            </tbody>
        </table>
        <p id="codigo"></p>
            <div class="tarjeton">
            <div  class="listado" id="listado"></div>
        </div>
    </section>
    <script>
        let tablebody = document.getElementById("tablebody");
        let listar = document.getElementById("listado");
        let cardsArray = [];
        let cardArray = [];
        let number;
        let arraycard;
        let identificacion;
        let numdelet =0;
        let itemsCarton
        <?php foreach($data ["Cards"] as $dato){?>
            number = <?php echo $dato["id"];?>;
            cardArray.push(number);
            arraycard = [<?php echo $dato["array"];?>];
            cardArray.push(arraycard);
            identificacion = <?php echo $dato["cedula"];?>;
            cardArray.push(identificacion);
            cardsArray.push(cardArray);
            cardArray = [];
        <?php } ?>
        for (let i = 0; i < cardsArray.length; i++) {
            itemsCarton = cardsArray[i][1];
            itemsCarton.forEach(function(elemento, indice, itemsCarton) {
                listar.innerHTML += `<spam class="items"><img class="" src="img/${elemento}.png" alt="abreojo" width="100" height="100"></spam>`;
            })
            let numdelet = 0
            for (let e = 0; e < 25; e++) {
                number = cardsArray[i][1].shift();
                numdelet+= number
                //cardsArray[i][1][e];
            }
            tablebody.innerHTML += `<tr><td>${cardsArray[i][0]}</td>
                                        <td>${numdelet}-${cardsArray[i][0]}</td>
                                        <td>${cardsArray[i][2]}</td>
                                        </tr>`;
            //tablebody.innerHTML += ``;
            //console.log(cardsArray[i][1]);
            //console.log(cardsArray[i][2]);
        }
        //console.log(numdelet);
    </script>
</body>
</html>