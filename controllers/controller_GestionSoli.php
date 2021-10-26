<?php 
    require_once('../../models/model_GestionSoli.php');
    $soliEquip = new GestionSoli();
	// Listado de Solicitudes
    $u = $soliEquip->getDatos();



    // Alta  de Solicitudes
	if(isset($_POST["id"])){
        $id = $_POST['id'];
        $categoria = $_POST['categoria'];
        $preStock = $_POST['preStock'];
        $cantMinima = $_POST['cantidadMinima'];

	    $result =  $tipoEquipamiento->insertarDatos($id, $categoria, $preStock, $cantMinima);
	    header("Location: view_ABM_tipoEquipamiento.php?m=1");
	}
    	
	if (isset($_POST['editar'])) {
        if(!isset($_POST["id"]) or !is_numeric($_POST["id"])){
            die("error 404");
        }
        
        if(sizeof($datos)==0){
            die("error 404");
        }
        
    }

    if(isset($_POST["actualizar"])){

        $id = $_POST['id'];
        $categoria = $_POST['categoria'];
        $preStock = $_POST['preStock'];
        $cantMinima = $_POST['cantidadMinima'];            

        $result = $tipoEquipamiento->actualizarDatos($id, $categoria, $preStock, $cantMinima);
        header("Location: view_ABM_tipoEquipamiento.php?m=2");
    }
	
    



?>