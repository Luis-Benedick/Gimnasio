<?php
require_once '../modelo/modelogroups.php';
class groupscontrolador{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $groups=new Modelo();

        $dato=$groups->mostrar("groups", "1");
        require_once '../vista/groups/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/groups/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nomgru=$_POST['txtnomgr'];
                $alm->id_salon=$_POST['cbosalon'];
				$alm->id_clien=$_POST['cboclien'];
				$alm->fech_entr=$_POST['txtfech'];
				$alm->fech_salid=$_POST['txtsali'];
				$alm->hora_entr=$_POST['txthoen'];
				$alm->hora_salid=$_POST['txtsali'];
				$alm->estado=$_POST['cboesta'];
				
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: groups.php");

          }

            //ELIMINAR
            function eliminar(){
                $id_grup=$_REQUEST['id_grup'];
                $condicion="id_grup=$id_grup";
                $groups=new Modelo();
                $dato=$groups->eliminar("groups", $condicion);
                header("location:groups.php");
            }

    }
