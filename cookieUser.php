<?php
$id=$_GET['Id'];
if($id=='')
{
    $msg="NO iniciaste sesion";
    header("location:Login.php?msg=$msg");
    exit;
}
else
{

    setCookie(id,$id);
    setCookie(usuario);
    setCookie(estatus,1);
    setCookie(Nivel,2);
    header ("location:menuUsuario.php?msg=$msg");
    exit;
}
?>