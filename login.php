<!doctype html>
<html>
   <head>
      <title> Login </title>
      <!-- Incluimos librerias como bootstrap.css -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
       <!-- Agregamos primero jQuery antes que angular es una buena practica -->
       <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
     
      <style type="text/css">
		.form-control { width: 20%;  }
	  </style>
	  
   </head>
   <body>
    <div  class="container">
      <h1>Login</h1>
		<form id="login" action="scripts/validar_usuario.php" method="post">
		
		 <div class="form-group">
		   <label for="user">Nombre</label>
		   <input type="text" class="form-control" id="user" name="user" required/>   
		 </div>
		 
		 <div class="form-group">
		   <label for="pass">Password</label>
		   <input class="form-control" id="pass" name="pass" type="password" required/>
		 </div>
		 
		<input type="submit" name="submit" class="btn btn-primary" />    
		</form>
			
		<div style="text-align:center; width: 225px; font-size:12px; margin-top:10px;">
			<a href="#">Recuperar contraseña</a> | <a href="crear_usuario.php">Crear usuario</a>
		</div>	
	</div>

 </body>
	