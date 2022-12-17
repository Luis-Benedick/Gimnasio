<?php
class Modelo{

  private $gua;
  private $db;




  public function __construct(){
      $this->gua=array();
      $this->db=new PDO('mysql:host=localhost;dbname=gym',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM gua";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->gua[]=$tabla;
      }
      return $this->gua;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO gua (nomguia,decp,foto,fecha)VALUES(?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->nomguia,$data->decp,$data->foto,$data->fecha));

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
