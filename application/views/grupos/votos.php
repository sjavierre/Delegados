    <div class="row">
        <div class="col-lg-10">
            <div class="table-responsive"> 
                <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>email</th>
                        <th>Votos</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach($candidatos as $candidato){
                            echo'<tr>';
                                echo'<td>'.$candidato['nombre'].'</td>';
                                echo'<td>'.$candidato['email'].'</td>';
                                echo'<td>'.$candidato['votos'].'</td>';
                                echo '<td><a href="'.base_url().'grupos/quitaVoto/'.$grupo.'/'.$candidato['id'].'"><i class="fas fa-eraser"></i></a></td>';
                            echo'</tr>';
                        }
                    ?>
                </table>
            </div>
    </div>
    <div class="col-lg-2">
        <form method="post" class="form-group" action="<?php echo base_url()?>candidatos/add">
            <label>NUEVO CANDIDATO</label>
            <input class="form-control" name="nombre" placeholder="Nombre">
            <input class="form-control" name="email" placeholder="Email">
            <input type="hidden" name="grupo" value="<?php echo $grupo?>">
            <button style = "margin-top:1%" type="submit" class="btn btn-primary">Registrar</button>
        </form>
        <form method="post" class="form-group" action="<?php echo base_url()?>grupos/votar">
            <label>VOTAR</label>
            <?php 
                echo '<input type="hidden" name="candidatos" value="'.count($candidatos).'">';
                echo '<input type="hidden" name="grupo" value="'.$grupo.'">';
                $i = 0;
                foreach($candidatos as $candidato){
                    echo '<div class="form-check">';
                    echo '<input type="checkbox" class="form-check-input" name="candidato_'.$i.'" value="'.$candidato['id'].'"><label>'.$candidato['nombre'].'</label>';
                    echo '</div>';
                    $i++;
                }

            ?>
            <button style = "margin-top:1%" type="submit" class="btn btn-primary">Enviar voto</button>
        </form>
    </div>
        
