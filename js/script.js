// Llamamos al modulo
var myAppModule = angular.module('myApp', [])
// Creamos un controlador llamado loginCtrl
.controller('agregarUsuarios', function ($scope, $http) {
   
    
    //al momento que le den click al ng-click doSubmit() ejecutamos la funcion
    $scope.doSubmit = function() {

        $http({
                //usaremos el metodo POST para enviar los datos
                method: 'POST', 
                //seleccionamos a  que URL llegara la informacion
                url: 'scripts/upload_usuario.php',
                //codificamos el contenido
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                //esta es la informacion que vamos a mandar
                data: { 
                        'username': $scope.username, 
                        'pass': $scope.pass                       
                     },
            }).
            // si la peticion ajax se realizo con exito se ejecuta success
            success(function(data, status) {
 
                $scope.data = data;
               // if(status == 200){
                if(data == 1){
                    $scope.aviso = '¡Tu usuario ha sido creado con éxito!';
                } else {
                	$scope.aviso = 'El usuario ya existe';
                } 
 
            }).
            //si la peticion ajax NO fue exitosa se ejecuta error
            error(function(data, status) {
                $scope.data = data || "FALSE";
                $scope.status = status;  
                $scope.aviso = 'Ha pasado algo inesperado';
            });
    };

});

/* Con esta funcion escondemos el form de login y mostramos el saludo de bienvenida */
function toogleDiv(){
    $(".span5").slideUp('fast');
    $("loged").slideDown('slow').attr('ng-hide','false');
}