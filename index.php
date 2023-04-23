<?php
//llamamos la clase con require_once de otro modo php se detiene y muestra por pantalla "fatal error" por que no encuentra la clase MvcController

require_once "controllers/controller.php";
require_once "models/model.php";
//intanciamos el controlador (crea un objeto MvcController)
$mvc = new MvcController();
//utiliza el metodo plantilla()
$mvc -> plantilla();

?>