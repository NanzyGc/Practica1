<?php
function Valida ()
{
    if (IsChk('miCheckbox'))
    {
//ok, hay al menos 1 elemento checkeado envía el form!
        return true;
    } else {
//ni siquiera uno chequeado no envía el form
        alert ('Chequeame un elemento!');
        return false;
    }
}
function IsChk(chkName)
{
    var found = false;
    var chk = document.getElementsByName(chkName+'[]');
    for (var i=0 ; i < chk.length ; i++)
{
    found = chk[i].checked ? true : found;
}
return found;
}
?>