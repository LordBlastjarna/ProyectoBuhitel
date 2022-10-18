<?php
class database
{
	
	private $con;

	function __construct(){
		$this->con = new PDO ('mysql:host = localhost;dbname=corpo206_buhitel','corpo206_gestorbuhi','ProyectoBuhitel2022');	
    }

	function obtenerReportes($personal){
		$sql = $this->con->prepare("SELECT reporte.Reporte_ID, reporte.Reporte_Nombre, 
        categoriareporte.CatReporte_Nombre FROM reporte INNER JOIN categoriareporte ON reporte.Reporte_Categoria 
        = categoriareporte.CatReporte_ID WHERE reporte.Reporte_Usuario = '".$personal."'");
		$sql->execute();
		$res = $sql->fetchall();
		return $res;
	}

	function obtenerReportesNoLeidos($personal){
		$sql = $this->con->prepare("SELECT reporte.Reporte_ID, reporte.Reporte_Inicio, reporte.Reporte_Nombre, 
        categoriareporte.CatReporte_Nombre FROM reporte INNER JOIN categoriareporte ON reporte.Reporte_Categoria 
        = categoriareporte.CatReporte_ID 
		WHERE BINARY reporte.Reporte_Usuario = '".$personal."'
		AND BINARY Reporte_Estatus = '2'");
		$sql->execute();
		$res = $sql->fetchall();
		return $res;
	}

    function obtenerReporteEspecifico($reporte_id){
		$sql = $this->con->prepare("SELECT reporte.Reporte_ID, reporte.Reporte_Nombre, 
        categoriareporte.CatReporte_Nombre, reporte.Reporte_Contenido, reporte.Reporte_usuario, 
		reporte.Reporte_Servicio, reporte.Reporte_Estatus FROM reporte INNER JOIN categoriareporte ON reporte.Reporte_Categoria 
        = categoriareporte.CatReporte_ID WHERE reporte.Reporte_ID = '".$reporte_id."'");
		$sql->execute();
		$res = $sql->fetchall();
		
		return $res;
	}

	function completarReporte($reporte_id,$hoy){
		$sql = $this->con->prepare("UPDATE reporte 
		SET Reporte_Estatus = '5', Reporte_Final = '".$hoy."' 
		WHERE Reporte_ID = '".$reporte_id."'");
		$sql->execute();
		$res = $sql->fetchall();
		
		return "0";
	}

	function marcarReporteVisto($reporte_id){
		$sql = $this->con->prepare("UPDATE reporte 
		SET Reporte_Estatus = '3' 
		WHERE Reporte_ID = '".$reporte_id."'");
		$sql->execute();
		$res = $sql->fetchall();
		
		return "0";
	}

	function iniciarReporte($reporte_id){
		$sql = $this->con->prepare("UPDATE reporte 
		SET Reporte_Estatus = '4' 
		WHERE Reporte_ID = '".$reporte_id."'");
		$sql->execute();
		$res = $sql->fetchall();
		
		return "0";
	}



}

?>