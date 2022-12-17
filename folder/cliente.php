<?php
require_once '../controlador/clientecontrolador.php';
$objcliente=new clientecontrolador();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objcliente->mostrar();
    elseif ($op=="nuevo")
        $objcliente->nuevo();
    elseif ($op=="guardar")
        $objcliente->guardar();
    elseif ($op=="editar")
        $objcliente->editar();
    elseif($op=="update")
        $objcliente->update();
        elseif($op=="insertar")
            $objcliente->insertar();
        elseif($op=="recibir")
            $objcliente->recibir();
            elseif($op=="eliminar")
                $objcliente->eliminar();
?>
