    <div class="container">
        <h2><?php echo $data ["titulo"]; ?></h2>
        <!-- <a href="index.php?c=objects&a=new">Agregar</a> -->
    </div>
    <section class="container">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($data ["Objects"] as $dato){
                    echo "<tr>";
                    echo "<td>".$dato["id"]."</td>";
                    // str_replace('-', ' ', $dato["objetos"]);
                    $datoNombre = str_replace('-', ' ', $dato["objetos"]);
                    $datoNombre = str_replace(
                        array('G.N', 'g.n', 'C', 'c'),
                        array('Ñ', 'ñ', 'Ç', 'ç'),
                        $datoNombre
                        );
                    // $datoNombre = str_replace('ñ','Ñ', $datoNombre);
                    $datoNombre = ucwords($datoNombre);
                    echo "<td>".$datoNombre."</td>";
                    echo '<td><img class="circle responsive-img" src="img/'.$dato["id"].'.png" alt="'.$dato["objetos"].'" width="150px" height="150px"</td>';
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </section>
</body>
</html>