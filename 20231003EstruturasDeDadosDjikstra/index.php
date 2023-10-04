<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset='utf-8'>
       <title>_/_</title>
   </head>
   <body>
        <h1>Selecione nas listas abaixo a origem e o destino desejado.</h1>
        <?php
            echo '<div style="display:none">';
                include_once 'DefiniçãoAeroportos.php';
            echo '</div>';
            echo '<label for="origem">ORIGEM</label>'
                 .'<br>'
                 .'<select id="origem" name="origem">';
            for ($i = 1; $i <= count($nomes); $i++){
                echo '<option value="'
                     .obterNomeInicial($i)
                     .'">'
                     .obterNomeInicial($i)
                     .'</option>';
            }
            echo '</label>';
            if(isset($_POST['origem']) && isset($_POST['destino'])){
            
            }
        ?>
   </body>
</html>

