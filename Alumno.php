<?php

require ('ConexionBD.php');
class Usuario
{

    private $Id;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Telefono;
    private $Calle;
    private $NumeroExterior;
    private $NumeroInterior;
    private $ColoniaMunicipio;
    private $Estado;
    private $CP;
    private $Correo;
    private $Usuario;
    private $Contrasena;
    private $Nivel;
    private $Estatus;

    public function createUsuario($nombre, $ap_pat, $ap_mat, $nivel)
    {
        echo "Create Usuario";
        $insert01 = "INSERT INTO usuario(Nombre,ApellidoPaterno,ApellidoMaterno,Nivel,status)
        VALUES ('$nombre','$ap_pat','$ap_mat',$nivel,1)";

        $execute01 = mysql_query($insert01) or die ("Error $insert01");
    }


    public function readUsuario()
    {
        echo "readUsuario";
        $sql01 = "select * from usuario where status=1 order by ApellidoPaterno ASC";
        $result01 = mysql_query($sql01) or die ("Error1 $sql01");
        echo " <div id='contact'>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<table class='table table-striped'>";
        echo "<tr class=info'>";
        echo "<tr> <td colspan=4> <strong> Lista de Usuarios </strong></td></tr>";
        echo "<tr> <td> Id </td> <td> Nombre </td> <td> Apellido P </td> <td> Apellido M </td> <td> Nivel </td>";
        while ($field = mysql_fetch_array($result01)) {
            $this->Id = $field['Id'];
            $this->Nombre = $field['Nombre'];
            $this->ApellidoPaterno = utf8_decode($field['ApellidoPaterno']);
            $this->ApellidoMaterno = utf8_decode($field['ApellidoMaterno']);
            $this->Nivel = $field['Nivel'];
            switch ($this->Nivel) {
                case 1:
                    $type = 'Administrador';
                    break;
                case 2:
                    $type = 'Maestro';
                    break;
                case 3:
                    $type = 'Alumno';
                    break;
            }
            echo "<tr class='success'><td>" . $this->Id . "</td>";
            echo "<td>" . $this->Nombre . "</td>";
            echo "<td>" . $this->ApellidoPaterno . "</td>";
            echo "<td>" . $this->ApellidoMaterno . "</td>";
            echo "<td>" . $type . "</td></tr>";

        }
        echo "</table> </div> </div> </div>";
    }

    public function readUsuarioS($id)
    {
        echo "readUsuarioS";
        $sql02 = "select * from usuario where status=1 and Id=$id order by ApellidoPaterno ASC";
        $result = mysql_query($sql02) or die ("Error2 $sql02");
        echo " <div id='contact'>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<table class='table table-striped'>";
        echo "<tr class=info'>";
        echo "<tr> <td colspan=4> <strong> Lista de Usuarios </strong></td></tr>";
        echo "<tr> <td> Id </td> <td> Nombre </td> <td> Apellido P </td> <td> Apellido M </td> <td> Nivel </td>";
        while ($field1 = mysql_fetch_array($result)) {
            $this->Id = $field1['Id'];
            $this->Nombre=$field1['Nombre'];
            $this->ApellidoPaterno = utf8_decode($field1['ApellidoPaterno']);
            $this->ApellidoMaterno=utf8_decode($field1['ApellidoMaterno']);
            $this->Nivel = $field1['Nivel'];
            switch ($this->Nivel){
                case 1:
                    $type='Administrador';
                    break;
                case 2:
                    $type='Maestro';
                    break;
                case 3:
                    $type='Alumno';
                    break;
            }
            echo "<tr class='success'><td>".$this->Id."</td>";
            echo "<td>".$this->Nombre."</td>";
            echo "<td>".$this->ApellidoPaterno."</td>";
            echo "<td>".$this->ApellidoMaterno."</td>";
            echo "<td>".$type."</td></tr>";

        }
        echo"</table> </div> </div> </div>";
    }




    public function updateUsuario($nombre,$ap_pat,$ap_mat,$id){
        echo "updateUsuario";
        $update01="UPDATE usuario SET Nombre='$nombre', ApellidoPaterno='$ap_pat', ApellidoMaterno='$ap_mat' WHERE id=$id";
        $execute01=mysql_query($update01) or die ("Error $update01");
    }

    public function deleteUsuario($id){
        echo "deleteUsuario";
      $delete01="DELETE FROM usuario WHERE id=$id";
        $execute01=mysql_query($delete01) or die ("Error $delete01");
    }
} 