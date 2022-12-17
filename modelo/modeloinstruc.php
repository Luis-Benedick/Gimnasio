<?php
class Modelo{

  private $instruc;
  private $db;




  public function __construct(){
      $this->instruc=array();
      $this->db=new PDO('mysql:host=localhost;dbname=gym',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM instruc";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->instruc[]=$tabla;
      }
      return $this->instruc;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO instruc (nomintr,dnistr,email,teelf,edad,gener,foto,fech_ini,fech_fin, estado)VALUES(?,?,?,?,?,?,?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->nomintr,$data->dnistr,$data->email,$data->teelf,$data->edad,$data->gener,$data->foto,$data->fech_ini,$data->fech_fin, $data->estado));

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
