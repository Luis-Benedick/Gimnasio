<?php
class Modelo{

  private $producto;
  private $db;
  
  public function __construct(){
      $this->producto=array();
      $this->db=new PDO('mysql:host=localhost;dbname=gym',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT producto.id_produc, producto.nomprod, cate.nomcate, producto.descrp, producto.preciop, producto.canti, producto.fechare, producto.estado  FROM producto INNER JOIN cate ON producto.id_cate=cate.id_cate";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->producto[]=$tabla;
      }
      return $this->producto;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO producto (nomprod,id_cate,descrp,foto,preciop,canti,fechare,estado)VALUES(?,?,?,?,?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->nomprod,$data->id_cate,$data->descrp,$data->foto,$data->preciop,$data->canti,$data->fechare,$data->estado));

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
