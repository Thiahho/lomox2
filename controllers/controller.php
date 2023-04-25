<?php
class MvcController{
    
    #llamada a la plantilla
    public function plantilla(){
        //se utiliza include para llamar el codigo que tiene html
        include "views/template.php";
    }

    #intereaccion del usuario con el nav
    public function enlacesPaginasController(){
        
        if(isset($_GET["action"])){
            $enlacesController=$_GET["action"];
        }else{
            $enlacesController="index";
        }
        $objeto = new EnlacesPaginas();
        $respuesta = $objeto->enlacesPaginasModel($enlacesController);

        //$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
    }
}


?>