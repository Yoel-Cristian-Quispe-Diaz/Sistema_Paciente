<?php
/*controladores*/
require_once "controlador/plantillaControlador.php";
require_once "controlador/pacienteControlador.php";
require_once "controlador/usuarioControlador.php";
require_once "modelo/pacienteModelo.php";
require_once "modelo/usuarioModelo.php";

$plantilla=new controladorPlantilla();
$plantilla->ctrPlantilla();

