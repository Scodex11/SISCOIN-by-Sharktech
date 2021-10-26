<?php 
    require_once('../../models/model_proveedores.php');
    session_start();


    $proveedores = new Proveedores();
	// Listado de Proveeodres y Teléfono
    $u = $proveedores->getDatosTel();
// Listado proveedor
    $datosProv = $proveedores->getDatos();



    // Alta proveedor
	if(isset($_POST["RUT"])){
        $RUT = $_POST['RUT'];
        $razon_social = $_POST['razon_social'];

	    $result =  $proveedores->insertarDatos($RUT, $razon_social);
	    header("Location: view_ABM_Proveedor.php?m=1");
	}
    	
    



	if (isset($_POST['editar'])) {
        if(!isset($_POST["RUT"]) or !is_numeric($_POST["RUT"])){
            die("error 404");
        }
        
        if(sizeof($datos)==0){
            die("error 404");
        }
        
    }

    if(isset($_POST["actualizar"])){

        $RUT = $_POST['RUT'];
        $razon_social = $_POST['razon_social'];           

        $result = $proveedores->actualizarDatos($RUT, $razon_social);
        header("Location: view_ABM_Proveedor.php?m=2");
    }
	
    



?>