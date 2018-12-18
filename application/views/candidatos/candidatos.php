<html>
    <head>
        <title>Candidatos</title>
    </head>
    <body>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    <table>
        <tr>
            <th>Candidato</th> 
            <th>Votos</th>
        </tr>
        <?php
            foreach($candidatos as $candidato){
                echo'<tr>';
                    echo'<td>'.$candidato['nombre'].'</td>';
                    echo'<td>'.$candidato['votos'].'</td>';
                echo'</tr>';
            }
        ?>
        </table>
        <form class="from-candidato" action="<?php echo base_url()?>index.php/candidato/add>">
            <?php  
                foreach($candidatos as $candidato) {
                echo'<input type="checkbox" name="candidatos">'.$candidato['nombre'].'<br>';
                echo'<input type="submit" value="submit">';
                }
            ?>
        </form>
        <div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?echo base_url()/candidatos/add?>">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Delegado</b></label>
      <input type="text" placeholder="Nombre Delegado" name="uname" required>
        
      <button type="submit">Agregar</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </body>
</html>