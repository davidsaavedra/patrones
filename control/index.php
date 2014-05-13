<?php

 require_once '../vista/indexvista.php'; 
 require_once '../modelo/indexmodelo.php';        
        
        
        
        Class indexcontrol{
    
        public   $vista;
        public   $modelo;
              
        
        
        
        public function __construct(){
            
            $this->vista = new indexvista();
            $this->modelo= new indexmodelo();
            
        }
        
        public function principal() {
            
            $consulta = $this->modelo->get_articulos();
            $this->vista->refactory_contenido($consulta);


}
        
        }
        
        
        
        
        $index = new indexcontrol();
        
        $index->principal();
?>
