<?php
class Modelo{

  private $groups;
  private $db;




  public function __construct(){
      $this->groups=array();
      $this->db=new PDO('mysql:host=localhost;dbname=gym',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT groups.id_grup, groups.nomgru, salon.nomsalo, cliente.nomcli, cliente.foto, groups.fech_entr, groups.fech_salid, groups.hora_entr, groups.hora_salid, groups.estado  FROM groups INNER JOIN salon ON groups.id_salon=salon.id_salon INNER JOIN cliente ON groups.id_clien=cliente.id_clien";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->groups[]=$tabla;
      }
      return $this->groups;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO groups (nomcate,estado)VALUES(?,?)";

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
