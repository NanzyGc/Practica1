<?php

/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 19/09/2014
 * Time: 18:38
 */

class Materia
{
    public $maestro;
    private $Id;
    private $Nombre;
    private $Avatar;
    private $Orden;
    private $Estatus;

    public function createMateria()
    {
        echo "createMateria <br>";
    }

    public function readGeneral()
    {
        echo "readGeneral <br>";
    }

    public function readEspecifico()
    {
        echo "readEspecifico <br>";

    }

    public function updateMateria()
    {
        echo "updateMateria <br>";
    }

    public function deleteMateria()
    {
        echo "deleteMateria <br>";

    }

    public function selecionarMaestro($id){
        echo "<div class=table-responsive>";
        echo "<form action=Materia2.php method=POST name=maestro id=idm target='_self'>";
        echo "<table class=\"table table-striped\">";
        echo "<tr><td>Maestro: </td><td><select name=idm>";
        $sql02 = "SELECT * FROM usuario WHERE Nivel = 2 ORDER BY ID ASC";
        $result02 = mysql_query($sql02) or die("Error $sql02");
        while ($field = mysql_fetch_array($result02)) {
            $idm = utf8_decode($field['Id']);
            $opcion = utf8_decode($field['Id']. " " . $field['Nombre'] . " " . $field['ApellidoPaterno'] . " " . $field['ApellidoMaterno']);
            if ($id != $idm)
                echo "<option value=$idm>$opcion</option>";
        }
        echo "</select></td></tr>";
        echo "<tr><td colspan=2 align=center><input type=submit id=submit value=Seleccionar></td></tr>";
        echo "</table> ";
        echo "</form>";
        echo "</div>";
    }


    public function asignarMateriaMaestro($id_maestro){
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped\">";
        echo "<form action=TestMateria.php method=POST id=materias>";
        echo "<tr><td colspan=2 align=center><strong>Asignar Materias</strong></td></tr>";
        echo "<tr><td>Materia: </td><td><select id=materia name=materia>";
        $sql01 = "SELECT * FROM materia WHERE estatus = 1 ORDER BY nombre ASC";
        $result01 = mysql_query($sql01)or die("Error $sql01");
        while($field = mysql_fetch_array($result01)) {
            $id_materia = $field['Idm'];
            $materia = utf8_decode($field['Nombre']);

            $sql03 = "SELECT * FROM maestro_materia WHERE id_maestro = $id_maestro AND id_materia = $id_materia";
            $result03 = mysql_query($sql03) or die("No se ejecuta consulta $sql03");
            $existe = mysql_num_rows($result03);
            if ($existe > 0) {
                echo "<option value=0>Asignada</option>";
            } else {
                echo "<option value=$id_materia>$materia</option>";

            }
        }
            echo "</select></td></tr>";
            echo "<input type=hidden id=accion name=accion value=1>";
            echo "<input type=hidden id=maestro name=maestro value=$id_maestro>";
            echo "<tr><td colspan=2 align=center><input type=submit value=Agregar></td></tr>";

            echo "</form>";
            echo "</table>";
            echo "</div>";
        }

    public function deleteMaestroMateria($maestro_id, $materia_id)
    {

        if ($materia_id > 0) {
            $delete01 = "DELETE FROM maestro_materia WHERE id_maestro = $maestro_id AND id_materia = $materia_id";
            $delete01 = mysql_query($delete01) or die("Error  $delete01");
        }
    }

    public function asignarMateria($id, $materia){


            $insert01 = " INSERT INTO maestro_materia (id_maestro, id_materia)
                                 VALUES($id,'$materia')";
            $execute01 = mysql_query($insert01) or die("Error  $insert01");

    }


}

