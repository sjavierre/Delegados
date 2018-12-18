    <div class="row">
        <div class="col-lg-10">
            <div class="table-responsive"> 
                <table class="table">
                    <tr>
                        <th>Grupo</th>
                        <th>Descripción</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                        foreach($grupos as $grupo){
                            echo'<tr>';
                                echo'<td>'.$grupo['nombre'].'</td>';
                                echo'<td>'.$grupo['descripcion'].'</td>';
                                echo'<td><a href="'.base_url().'grupos/borrar/'.$grupo['id'].'"><i class="fas fa-trash"></i></a></td>';
                                echo'<td>
                                    <a href="'.base_url().'grupos/votos/'.$grupo['id'].'"><i class="fas fa-search"></i></a></td>';
                            echo'</tr>';
                        }
                    ?>
                </table>
            </div>
    </div>
    <div class="col-lg-2">
        <form method="post" class="form-group" action="<?php echo base_url()?>grupos/add">
            <label>Grupo Nuevo</label>
            <input class="form-control" name="nombre" placeholder="Grupo"><br>
            <input type="textarea" class="form-control" name="descripcion" placeholder="Descripcion">
            <button style = "margin-top:1%" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
        
