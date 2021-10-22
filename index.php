<?php
$msg = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $dia_semana = $_POST['d_semana'];
  require_once ("src/classes/".$dia_semana.".php");
  $obj_dia = new $dia_semana();
  $msg = $obj_dia->passaMensagem($dia_semana);
}


?>


<h1>Selecione dia da semana</h1>
<i>Dias Especiáis: Sexta, Sábado e Domingo</i><br><br>

<form action="index.php" method="post">
  <label>Dia da Semana:</label><br>
  <select name="d_semana">
      <option value="domingo">Domingo</option>
      <option value="segunda">Segunda</option>
      <option value="terca">Terça</option>
      <option value="quarta">Quarta</option>
      <option value="quinta">Quinta</option>
      <option value="sexta">Sexta</option>
      <option value="sabado">Sabado</option>
  </select>
  <input type="submit" value="Submit"><br><br>

  <label>Mensagem do dia:</label><br>
  <h2><?php echo $msg?></h2>
</form> 