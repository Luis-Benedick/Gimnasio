<?php
require_once '../modelo/modelosalon.php';
class saloncontrolador{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $salon=new Modelo();

        $dato=$salon->mostrar("salon", "1");
        require_once '../vista/salon/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/salon/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nomsalo=$_POST['txtnomsalo'];
                
				
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: salon.php");

          }

            //ELIMINAR
            function eliminar(){
                $id_salon=$_REQUEST['id_salon'];
                $condicion="id_salon=$id_salon";
                $salon=new Modelo();
                $dato=$salon->eliminar("salon", $condicion);
                header("location:salon.php");
            }

    }
