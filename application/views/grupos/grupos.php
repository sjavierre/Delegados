<html>
    <head>
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>Grupo</th>
                <th>Ganador</th>
            </tr>
            <?php
                foreach($grupos as $grupo){
                    echo'<tr>';
                        echo'<td>'.$grupo['grupo'].'</td>';
                        echo'<td>'.$grupo['ganador'].'</td>';
                        echo'<td><a hreft="'.base_url().'index.php/grupos/borrar'.$grupo['id'].'"Borrar</a></td>';
                    echo'</tr>';
                }
            ?>
        </table>
        <form class="from-group" action"<?php echo base_url()?>index.php/grupos/add">
        <label>Grup Nuevo</label>
        <input class"from-control" name="grupo" placeholder="Grupo">
        <input type="submit">
        </form>

    </body>

</html>