<?php
require_once '../modelo/modeloguia.php';
class guiacontrolador{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $gua=new Modelo();

        $dato=$gua->mostrar("gua", "1");
        require_once '../vista/guia/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/guia/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nomguia=$_POST['txtnomg'];
                $alm->decp=$_POST['txtdes'];
				$alm->foto=$_POST['txtfoto'];
				$alm->fecha=$_POST['txtfecha'];
				
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: guia.php");

          }

            //ELIMINAR
            function eliminar(){
                $codguia=$_REQUEST['codguia'];
                $condicion="codguia=$codguia";
                $gua=new Modelo();
                $dato=$gua->eliminar("gua", $condicion);
                header("location:guia.php");
            }

    }
