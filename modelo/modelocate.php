<?php
class Modelo{

  private $cate;
  private $db;




  public function __construct(){
      $this->cate=array();
      $this->db=new PDO('mysql:host=localhost;dbname=gym',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM cate";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->cate[]=$tabla;
      }
      return $this->cate;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO cate (nomcate,estado)VALUES(?,?)";

      $this->db->prepare($query)->execute(array($data->nomcate,$data->estado));

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
