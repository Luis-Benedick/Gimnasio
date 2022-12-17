<?php
require_once '../modelo/modeloproducto.php';
class productocontrolador{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $producto=new Modelo();

        $dato=$producto->mostrar("producto", "1");
        require_once '../vista/producto/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/producto/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nomprod=$_POST['txtnompro'];
                $alm->id_cate=$_POST['cbocate'];
				$alm->descrp=$_POST['txtdes'];
				$alm->foto=$_POST['txtfoto'];
				$alm->preciop=$_POST['txtpre'];
				$alm->canti=$_POST['txtcan'];
				$alm->fechare=$_POST['txtfech'];
				$alm->estado=$_POST['cboesta'];
				
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: producto.php");

          }

            //ELIMINAR
            function eliminar(){
                $id_produc=$_REQUEST['id_produc'];
                $condicion="id_produc=$id_produc";
                $producto=new Modelo();
                $dato=$producto->eliminar("producto", $condicion);
                header("location:producto.php");
            }

    }
