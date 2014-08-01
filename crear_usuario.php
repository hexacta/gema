<!doctype html>
<html>
   <head>
      <title> Crear Usuario </title>
      <!-- Incluimos librerias como bootstrap.css -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
       <!-- Agregamos primero jQuery antes que angular es una buena practica -->
       <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
       
      <script src="http://code.angularjs.org/1.2.10/angular.min.js"></script>
      <script src="js/script.js"></script>


      <style type="text/css">
		.form-control { width: 20%;  }
	  </style>
     
   </head>
   
   <body  ng-app="myApp">
    <div  class="container">
      <h1>Crear Usuario</h1>
      <form id="uploadForm" ng-controller="agregarUsuarios" >
      	 <div class="form-group">
		   <label for="username">Nombre de usuario</label>
		   <input type="text" class="form-control" id="username" name="username"  ng-model="username" required/>
		 </div>
		 
		 <div class="form-group">
		   <label for="pass">Password</label>
		   <input type="text" class="form-control" id="pass" name="pass" ng-model="pass" required></input>
		 </div>
		 <div>{{aviso}}</div>  
         <input type="submit" name="submit"  ng-click="doSubmit()" value="Crear nuevo usuario" class="btn btn-primary"></input>      
      </form>
    </div>
   </body>
</html>
