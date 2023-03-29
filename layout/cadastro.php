<!DOCTYPE html>
<html lang="pt-br">

<head>

<title>Cadastro</title>
</head>
    
<body>
  
 <?php
 
 include("./menu.php");
  
  ?>
<form action="../database/salvar.php" method="post">
  <div class="container">
    <form onSubmit={handleSubmit}>
    <h1>Cadastro</h1>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
		<input type="submit" value="Salvar">
	</form>

</body>
</html>







