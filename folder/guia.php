<?php
require_once '../controlador/guiacontrolador.php';
$objguia=new guiacontrolador();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objguia->mostrar();
    elseif ($op=="nuevo")
        $objguia->nuevo();
    elseif ($op=="guardar")
        $objguia->guardar();
    elseif ($op=="editar")
        $objguia->editar();
    elseif($op=="update")
        $objguia->update();
        elseif($op=="insertar")
            $objguia->insertar();
        elseif($op=="recibir")
            $objguia->recibir();
            elseif($op=="eliminar")
                $objguia->eliminar();
?>
