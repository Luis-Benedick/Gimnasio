<?php
require_once '../controlador/saloncontrolador.php';
$objsalon=new saloncontrolador();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objsalon->mostrar();
    elseif ($op=="nuevo")
        $objsalon->nuevo();
    elseif ($op=="guardar")
        $objsalon->guardar();
    elseif ($op=="editar")
        $objsalon->editar();
    elseif($op=="update")
        $objsalon->update();
        elseif($op=="insertar")
            $objsalon->insertar();
        elseif($op=="recibir")
            $objsalon->recibir();
            elseif($op=="eliminar")
                $objsalon->eliminar();
?>
