
<?php
require ('ConexionBD.php');
$id=$_COOKIE['id'];
$acc=$_COOKIE['estatus'];
$tp=$_COOKIE['Nivel'];
if($id=='' or $acc=='' or $tp=='')
{
    header("location:Login.php");
    exit;
}
else
    if($tp!='2')
    {
        echo "Esta pantalla solo puede ser vista por el administrador";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
include ('headerUser.php');
include ('footer.php');

?>
<!-- contenido de la pagina -->


<div class="col">
    <?php

    $sql0 = "Select * From usuario where Id=$id";
    $consulta0 = mysql_query($sql0)or die("Error de consulta 0");
    $Nombre =mysql_result($consulta0,0,'Nombre');
    $APP =mysql_result($consulta0,0,'ApellidoPaterno');
    $APM =mysql_result($consulta0,0,'ApellidoMaterno');
    echo" <table align='center'><tr><td><center><h2><font color='teal'><b>Bienvenido (a):</b></font></h2></center>".
        "<center><h2><font color='teal'><b>$Nombre $APP $APM</b></font></h2></center></td></tr>";

   echo"<center><tr><td>";


                echo"</td></tr></center></table><br>";


                $sql1="select * from maestro_materia where id_maestro=$id";
                $consulta1=mysql_query($sql1) or die ("Error de consulta 1");
                echo"<div class='table-responsive'>";
                echo"<table class='table table-striped'>";
                echo"<tr><td colspan='5' align='center'><strong>Lista de Materias</strong></td></tr>";
                echo"<tr><th>Id</th><th>Nombre</th>";
                while($field = mysql_fetch_array($consulta1)){
                    $Id = $field['id_materia'];
                    $Nombrem = $field['id_materia'];
                    switch($Nombrem){
                        case 1:
                            $Nombrem = "Ingles";
                            break;
                        case 2:
                            $Nombrem = "Base de Datos";
                            break;

                    }
                    echo"<tr><td>$Id</td><td>$Nombrem</td></tr></tr>";
                }
                echo"</table>";
                echo"</div>";

                ?>
</div>
<div class="cl">&nbsp;</div>
<br>
</section>

</div>
<!-- end of main -->

</div>
</div>
<!-- end of contenido -->

<!-- end of shell -->
<div id="footer-push"></div>
<!-- wrapper -->
<!-- footer -->

</div>
<!-- end of footer -->
</body>
</html>