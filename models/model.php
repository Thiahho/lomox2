<?php

class EnlacesPaginas{

    
    public function enlacesPaginasModel($enlacesModel){

        if( $enlacesModel == "inicio"||
            $enlacesModel == "login" ||
            $enlacesModel == "link3" ||
            $enlacesModel == "link4"){
                $module = "views/modulos/".$enlacesModel.".php";
        }else if($enlacesModel == "index"){
            $module = "views/modulos/inicio.php";
        }else{
            $module = "views/modulos/inicio.php";
        }
        return $module;
    }
}



?>