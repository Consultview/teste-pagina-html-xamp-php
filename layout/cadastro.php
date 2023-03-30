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


      <!--<form method="post" action="processa_form.php">-->
      <div class="form-group">
        <label for="seletor">Status</label>
       
        <select class="form-control" id="status" name="status" style="height: 35px;">
          <option value="Ativo">Ativo</option>
          <option value="Inativo">Inativo</option>
        </select>
      
      </div>

      <button type="submit" value="salvar" class="btn btn-primary">Enviar</button>

    </form>
  </div>


  

	</form>






</body>
</html>







