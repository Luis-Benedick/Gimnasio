<?php
require_once '../controlador/intructcontrolador.php';
$objinstr=new intructcontrolador();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objinstr->mostrar();
    elseif ($op=="nuevo")
        $objinstr->nuevo();
    elseif ($op=="guardar")
        $objinstr->guardar();
    elseif ($op=="editar")
        $objinstr->editar();
    elseif($op=="update")
        $objinstr->update();
        elseif($op=="insertar")
            $objinstr->insertar();
        elseif($op=="recibir")
            $objinstr->recibir();
            elseif($op=="eliminar")
                $objinstr->eliminar();
?>
