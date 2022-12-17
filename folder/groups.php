<?php
require_once '../controlador/groupscontrolador.php';
$objgrou=new groupscontrolador();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objgrou->mostrar();
    elseif ($op=="nuevo")
        $objgrou->nuevo();
    elseif ($op=="guardar")
        $objgrou->guardar();
    elseif ($op=="editar")
        $objgrou->editar();
    elseif($op=="update")
        $objgrou->update();
        elseif($op=="insertar")
            $objgrou->insertar();
        elseif($op=="recibir")
            $objgrou->recibir();
            elseif($op=="eliminar")
                $objgrou->eliminar();
?>
