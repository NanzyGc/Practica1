<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 19/09/2014
 * Time: 18:43
 */
require ('ConexionBD.php');
class Grupo
{

    private $id;
    private $Nombre;
    private $Avatar;
    private $Orden;
    private $Estatus;

    public function createGrupo()
    {
        echo "createGrupo";
    }

    public function readGeneral()
    {
        echo "<br> readGeneral";
    }

    public function readEspecifico()
    {
        echo "<br> readEspecifico";

    }

    public function updateGrupo()
    {
        echo "<br> updateGrupo";
    }

    public function deleteGrupo()
    {
        echo "<br> deleteGrupo";

    }



    public function asignarAlumnoGrupo($alumno_id,$grupo_id){
        $insert01 = " INSERT INTO alumnos_grupo (id_alumno, id_grupo)
                                  VALUES($alumno_id,$grupo_id)";
        $execute01 = mysql_query($insert01) or die("Error  $insert01");
    }
    public function desasignarAlumnoGrupo($alumno_id){
        $delete01 = " DELETE FROM alumnos_grupo WHERE id_alumno = $alumno_id";
        $execute01 = mysql_query($delete01) or die("Error  $delete01");
    }
    public function readGrupo(){
        echo "<tr><td align=center><select name=grupo>";
        $sql01 = "SELECT * FROM grupo WHERE estatus = 1 ORDER BY Nombre ASC";
        $result01 = mysql_query($sql01)or die("Error $sql01");
        while($field = mysql_fetch_array($result01)){
            $opcion = utf8_decode($field['Nombre']);
            echo "<option value=$field[Id]>".$opcion."</option>";
        }
        echo "</select></td></tr>";
    }
}
