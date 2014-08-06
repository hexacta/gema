<?php


class Evento {
	
	var $nombre;
	var $lugar;
	var $descripcion;
	var $fecha;
	
	function getEvento(){
		
		require_once 'scripts/mysql_connect.php';
		$result = $db->query("SELECT * FROM evento LIMIT 1");

		if ($result) { 
        while($obj = $result->fetch_object()){ 
        	$this->nombre = $obj->nombre;
        	$this->descripcion = $obj->descripcion;
        	$this->lugar = $obj->lugar;
        	$this->fecha = $obj->fecha;       	
        }
        
		}
		
	}
	
	function getDaysNextEvent(){
		
		
		$datetime1 = new DateTime(date("Y-m-d"));
		$datetime2 = new DateTime($this->fecha);
	 			
		$interval = $datetime1->diff($datetime2);
		
		echo $interval->format('%a');
	}
	
	function formatDate(){
		
			
			$fecha = new DateTime($this->fecha);
			$f = explode("-", $fecha->format("d-m-Y"));; 

			$day = date("w", mktime(0, 0, 0, $f[0], $f[1], 2014));
					
			echo $this->getDiaSemana($day) ." ". $f[0] . " de " . $this->getMes();
		
	}
	
	function getDiaSemana($day){
		
		switch ($day){
			 case 0:
		        $dds = "Domingo";
		        break;
		    case 1:
		        $dds = "Lunes";
		        break;
		    case 2:
		        $dds = "Martes";
		        break;
		    case 3:
		        $dds = "Miercoles";
		        break;
		    case 4:
		        $dds = "Jueves";
		        break;
		    case 5:
		        $dds = "Viernes";
		        break;
		    case 6:
		        $dds = "Sabado";
		        break;
		}
		
		return $dds;
	}
	
	function getMes(){
		
		switch ($f[1]){
			 case 01:
		        $mes = "Enero";
		        break;
		    case 02:
		        $mes = "Febrero";
		        break;
		    case 03:
		        $mes = "Marzo";
		        break;
		    case 04:
		        $mes = "Abril";
		        break;
		    case 05:
		        $mes = "Mayo";
		        break;
		    case 06:
		        $mes = "Junio";
		        break;
		    case 07:
		        $mes = "Julio";
		        break;
		    case 08:
		        $mes = "Agosto";
		        break;
		    case 09:
		        $mes = "Septiembre";
		        break;
		    case 10:
		        $mes = "Octubre";
		        break;
		    case 11:
		        $mes = "Noviembre";
		        break;
		    case 12:
		        $mes = "Diciembre";
		        break;
		}
		
		return $mes;
	}
		
}
	
?>