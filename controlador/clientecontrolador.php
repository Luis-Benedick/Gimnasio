<?php
require_once '../modelo/modelocliente.php';
class clientecontrolador{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $cliente=new Modelo();

        $dato=$cliente->mostrar("cliente", "1");
        require_once '../vista/cliente/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/cliente/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nomcli=$_POST['txtnomcl'];
               
				$alm->email=$_POST['txtema'];
				$alm->telef=$_POST['txttele'];
				$alm->clave=$_POST['txtcla'];
				$alm->cargo=$_POST['cbocarg'];
				$alm->gener=$_POST['cbogene'];
				
				$alm->fech_ini=$_POST['txtfechi'];
				
				$alm->estado=$_POST['cboesta'];
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: cliente.php");

          }

            //ELIMINAR
            function eliminar(){
                $id_clien=$_REQUEST['id_clien'];
                $condicion="id_clien=$id_clien";
                $cliente=new Modelo();
                $dato=$cliente->eliminar("cliente", $condicion);
                header("location:cliente.php");
            }

    }
