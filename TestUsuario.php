<?php
require ('ConexionBD.php');
 require ('Alumno.php');
require ('Head.php');


$usuario =new Usuario();

if(isset($_POST['submit'])){
    switch($_POST['submit']){
        case "Alta":
            echo "<br>Bot&oacute;n: ".$_POST['submit'];
            $usuario->createUsuario(".$_POST[nombre].",".$_POST[apellidop].",".$_POST[apellidom].",$_POST['nivel']);
            break;

        case "Borrar":
            echo "<br>Bot&oacute;n: ".$_POST['submit'];
            $usuario->deleteUsuario($_POST['idb']);
            break;

        case "Modificar":
            echo "<br>Bot&oacute;n: ".$_POST['submit'];
            $usuario->updateUsuario(".$_POST[nombre].",".$_POST[apellidop].",".$_POST[apellidom].",$_POST['idm']);
            break;

        case "Buscar":
            echo "<br>Bot&oacute;n: ".$_POST['submit'];
            $usuario->readUsuarioS($_POST['idbuscar']);
            break;
            }
}
$usuario->readUsuario();
/*
$usuario->createUsuario("Yesi","Tufiño","Flores",2);
$usuario->deleteUsuario(4);
$usuario->readUsuario();
$usuario->readUsuarioS(2);
$usuario->updateUsuario("Yessica","Huerta","Mtz",5); */

echo "<div>
 <center>
        <form name=alumno action=TestUsuario.php method=POST>
             <table>
                     <tr> <td>Nombre(s):</td> <td> <input type=text name=nombre> </input> </td></tr>
                     <tr> <td>Apellido Paterno):</td> <td> <input type=text name=apellidop> </input> </td></tr>
                     <tr> <td>Apellido Materno:</td> <td> <input type=text name=apellidom> </input> </td></tr>
                     <tr> <td><n></n>Nivel :</td>
                             <td> <select name=nivel >
                                         <option value=1> Administrador </option>
                                         <option value=2> Maestro </option>
                                         <option value=3> Alumno </option>
                             </select> </td></tr>
                     <tr> <td colspan=2> <input type=submit name=submit value=Alta> </input> </td></tr>
                     <tr> <td>ID: <input type=text name=idb> </input> </td> <td> <input type=submit name=submit value=Borrar> </input> </td></tr>
                     <tr> <td>ID: <input type=text name=idm> </input> </td> <td> <input type=submit name=submit value=Modificar> </input> </td></tr>
                     <tr> <td>Buscar: <input type=text name=idbuscar> </input> </td> <td> <input type=submit name=submit value=Buscar> </input> </td></tr>
             </table>
        </form>
        </center>
    </div>";

require ('Footer.php');
?>