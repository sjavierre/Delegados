<html>
    <head>
        <title>Candidatos</title>
    </head>
    <body>
        <table>
        <tr>
            <th>Candidato</th> 
            <th>Votos</th>
        </tr>
        <?php
            foreach($candidatos as $candidato){
                echo'<tr>';
                    echo'<td>'.$candidato['nombre'].'</td>';
                    echo'<td>'.$candidato[votos].'</td>';
                echo'</tr>';
            }
        ?>
        </table>
        <form class="from-candidato" action"<?php echo base_url()?>index.php/candidato/add>
             foreach($candidatos as $candidato) {
            echo'<input type="checkbox" name="candidatos">'.$candidato['nombre'].'<br>'
            <input type="submit" value="submit">
            }
        </form>
    </body>
</html>