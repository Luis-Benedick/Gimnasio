<?php
require_once '../modelo/modeloinstruc.php';
class intructcontrolador{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $instruc=new Modelo();

        $dato=$instruc->mostrar("instruc", "1");
        require_once '../vista/instruc/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/instruc/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nomintr=$_POST['txtinst'];
                $alm->dnistr=$_POST['txtdnist'];
				$alm->email=$_POST['txtema'];
				$alm->teelf=$_POST['txttelef'];
				$alm->edad=$_POST['txteda'];
				$alm->gener=$_POST['cboge'];
				$alm->foto=$_POST['txtfoto'];
				$alm->fech_ini=$_POST['txtfeci'];
				$alm->fech_fin=$_POST['txtfecfi'];
				$alm->estado=$_POST['cboesta'];
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: instruc.php");

          }

            //ELIMINAR
            function eliminar(){
                $id_intr=$_REQUEST['id_intr'];
                $condicion="id_intr=$id_intr";
                $instruc=new Modelo();
                $dato=$instruc->eliminar("instruc", $condicion);
                header("location:instruc.php");
            }

    }
