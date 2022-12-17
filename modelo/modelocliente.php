<?php
class Modelo{

  private $cliente;
  private $db;




  public function __construct(){
      $this->cliente=array();
      $this->db=new PDO('mysql:host=localhost;dbname=gym',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM cliente";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->cliente[]=$tabla;
      }
      return $this->cliente;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO cliente (nomcli,email,telef,clave,edad,fech_ini,fech_fin,estado)VALUES(?,?,?,?,?,?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->nomcli,$data->email,$data->telef,$data->clave,$data->fech_ini,$data->estado));

    }catch (Exception $e) {

      die($e->getMessage());
    }
    }
  public function actualizar($tabla,$data,$condicion){
      $consulta="UPDATE $tabla SET $data WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
  public function eliminar($tabla,$condicion){
      $consulta="DELETE FROM $tabla WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
}

 ?>
