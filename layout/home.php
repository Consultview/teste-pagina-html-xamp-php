<!DOCTYPE html>
<html lang="pt-br">
<head>
      
    <title>Home</title>

</head>
   
<body>

 <?php
 include("./menu.php");
 ?>

  <!--Container para lista de dados    -->
  <div class="container">
  <h2>Lista de dados</h2>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
<?php
include('../database/consulta.php');
?>
</tbody>
</table>
</div>
<!-----------------------------------------------------------------

</body>
</html>