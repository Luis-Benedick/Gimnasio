<?php
require_once '../modelo/modelocate.php';
class catecontrolador{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $cate=new Modelo();

        $dato=$cate->mostrar("cate", "1");
        require_once '../vista/cate/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/cate/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nomcate=$_POST['txtnomcate'];
                $alm->estado=$_POST['cboesta'];
				
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: cate.php");

          }

            //ELIMINAR
            function eliminar(){
                $id_cate=$_REQUEST['id_cate'];
                $condicion="id_cate=$id_cate";
                $cate=new Modelo();
                $dato=$cate->eliminar("cate", $condicion);
                header("location:cate.php");
            }

    }
