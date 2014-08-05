<?PHP

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] != '')) {
	header ("Location: login.php");
}

?>
<!doctype html>
<html>
   <head>
      <title> Crear Evento </title>
      <!-- Incluimos librerias como bootstrap.css -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
       <!-- Agregamos primero jQuery antes que angular es una buena practica -->
       <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
       
      <script src="http://code.angularjs.org/1.2.10/angular.min.js"></script>
      <script src="script.js"></script>


      <style type="text/css">
		.form-control { width: 20%;  }
	  </style>
	  
      <script>
		  $(function() {
		    $( "#datepicker" ).datepicker();
		  });

		  $(document).ready(function(){ 
			  $(".telNumber").keydown(function(event) {
			     if(event.shiftKey)
			     {
			          event.preventDefault();
			     }
			   
			     if (event.keyCode == 46 || event.keyCode == 8)    {
			     }
			     else {
			          if (event.keyCode < 95) {
			            if (event.keyCode < 48 || event.keyCode > 57) {
			                  event.preventDefault();
			            }
			          } 
			          else {
			                if (event.keyCode < 96 || event.keyCode > 105) {
			                    event.preventDefault();
			                }
			          }
			        }
			     });

			  $('#email').focusout(function(){
			        if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
			            alert('El correo electrónico introducido no es correcto.');
			            return false;
			        }		    
			    });
			  });

	
		</script>
   </head>
   
   <body>
   
    <div  class="container">
      <h1>Crear evento</h1>
      <form id="uploadForm" method="post" action="scripts/upload_evento.php" enctype="multipart/form-data">
      	 <div class="form-group">
		   <label for="nombre">Nombre del evento</label>
		   <input type="text" class="form-control" id="nombre" name="nombre" required/>
		 </div>
		 
		 <div class="form-group">
		   <label for="descripcion">Descripción</label>
		   <textarea type="text" class="form-control" id="descripcion" name="descripcion" ></textarea>
		 </div>
	 
		 <div class="form-group">
		   <label for="lugar">Lugar</label>
		   <input type="text" class="form-control" id="lugar" name="lugar" required/>
		 </div>

		<div class="form-group">
			<label for="fecha">Fecha</label>
		  	<input type="text" class="form-control" id="datepicker" name="fecha" required />
		</div>
		 <div style="margin-bottom:10px;"><?php if(isset($_GET['event']) && $_GET['event'] == 'ok') { echo "¡Evento creado con éxito!"; } ?></div>   
         <input type="submit"  name="submit"class="btn btn-primary"></input>      
      </form>
      
    </div>
   </body>
</html>
