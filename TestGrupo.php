<?php
require ('ConexionBD.php');
require ('Grupo.php');
require ('Head.php');
require ('Alumno1.php');


    $alumno = new Alumno();
    $grupo = new Grupo();


    if (isset($_GET['accion'])){
        switch($_GET['accion']){
            case 1:
                echo "
                        Alumno asignado exit&oacute;samente.
                    </div>";
                break;
            case 2:
                $grupo->desasignarAlumnoGrupo($_GET['alumno_id']);
                echo "
                        Alumno desasignado exit&oacute;samente.
                    </div>";
                break;
        }
    }

    echo  "<div class=row>";
        echo "<div class=col-md-4></div>";
        echo "<div class=col-md-4>";
            echo "<div class=table-responsive>";
            echo "<table class=\"table table-striped\">";
                echo "<form action=asignar-alumnos.php method=POST>";
                $alumno->readAlumno();
                $grupo->readGrupo();
                echo "<tr><td align=center><input type=submit name=opcion value=Agregar></td></tr>";
                echo "</form>";
            echo "</table>";
            echo "</div>";
        echo "</div>";
        echo "<div class=col-md-4></div>";
    echo "</div>";

    require ('footer.php');
?>