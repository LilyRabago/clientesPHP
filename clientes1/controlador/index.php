<?php
require_once("modelo/index.php");

class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $cliente   = new Modelo();
        $dato      =   $cliente->mostrar("clientes","1");
        require_once("vista/index.php");
    }
    //nuevo
    static function nuevo(){        
        require_once("vista/nuevo.php");
            
    }
    //guardar
    static function guardar(){
        $nombre= $_REQUEST['nombre'];
        $rfc= $_REQUEST['rfc'];
        $domicilio= $_REQUEST['domicilio'];
        $data = "'".$nombre."','".$rfc."','".$domicilio;
        $cliente = new Modelo();
        $dato = $cliente->insertar("clientes",$data);
        header("location:".urlsite);
    }
   
    static function editar(){    
        require_once("vista/editar.php");
        $id = $_REQUEST['id'];
        $cliente = new Modelo();
        $dato = $cliente->mostrar("clientes","id=".$id);        
    }
    //actualizar
    static function actualizar(){
      $id = $_REQUEST['id'];
      $nombre = $_REQUEST['nombre'];
      $rfc = $_REQUEST['rfc'];
      $domicilio = $_REQUEST['domicilio'];
      $data = "'".$nombre."','".$rfc."','".$domicilio;
      $cliente = new Modelo();
      $dato = $cliente-> actualizar("clientes",$data, "id=".$id);
      header("location:".urlsite);
    }
    //eliminar
    static function eliminar(){     
      $id = $_REQUEST['id'];
      $condicion = "id=".$id;
      $cliente = new Modelo();
      $dato = $cliente->eliminar("clientes",$condicion);
      header("location:".urlsite);
      }

    }