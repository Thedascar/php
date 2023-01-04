<?php
// dando um input com html e php... juntos..
$nome = 'cam " /> <script>alert("teste");</script>';
?>
<?php
// aqui neste ponto usamos addslashes pra adicionar barras e não deixar
// o html ser executado.. se chama barras escapadas
?>
<input type="text" name="<?php echo addslashes($nome); ?>" />
<?php
//troca os carateres por números e letras que o html nao entendo
// substitui por códigos...
?>
<input type="text" name="<?php echo htmlentities($nome); ?>" />