<?php
require_once '../controlador/productocontrolador.php';
$objprod=new productocontrolador();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objprod->mostrar();
    elseif ($op=="nuevo")
        $objprod->nuevo();
    elseif ($op=="guardar")
        $objprod->guardar();
    elseif ($op=="editar")
        $objprod->editar();
    elseif($op=="update")
        $objprod->update();
        elseif($op=="insertar")
            $objprod->insertar();
        elseif($op=="recibir")
            $objprod->recibir();
            elseif($op=="eliminar")
                $objprod->eliminar();
?>
