<?php
require ('ConexionBD.php');
require ('Materia.php');
require ('Head.php');

$materia = new Materia();

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
}else{
    $id = 0;
}
if(isset($_REQUEST['materia'])){
    $id_materia = $_REQUEST['materia'];
}else{
    $id_materia = 0;
}
if(isset($_REQUEST['accion'])){
    $accion = $_REQUEST['accion'];
}else{
    $accion = 0;
}

switch($accion){
    case 0:
        $materia->selecionarMaestro($id);
        break;
    case 1:
        $materia->asignarMateria($id,$id_materia);
        $materia->selecionarMaestro($id);
        break;
    case 2:
        $materia->deleteMaestroMateria($id,$id_materia);
        $materia->selecionarMaestro($id);
        break;

}











?>