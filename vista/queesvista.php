<?php


class queesvista{
    public $base;
    public $quees;
    public $nav;
    public $diccionario;
    
    public function __construct() {
        $this->base=  file_get_contents('../staticos/Templates/base.html');
        $this->quees=  file_get_contents('../staticos/Templates/quees.html');
        $this->nav=  file_get_contents('../staticos/Templates/nav.html'); 
        
        $this->actualizardiccionario();
        
    }
    public function actualizardiccionario(){
        $this->diccionario= array('base'=>$this->base,'quees'=>$this->quees,'nav'=>$this->nav);
    }
    
    
   public function refactory_contenido($datos) {
        
        $article_total="";
//        
//         
//       foreach ($datos as $valor){
////            
////           
////            
//            $aux=$this->article;
//            $aux=  str_ireplace('{titulo}', $valor['nombreforo'], $aux);                        
//            $aux=  str_ireplace('{imagen}', $valor['imagen'], $aux);
//            
//          $article_total .=$aux;
//           
//           
//       }
//       
//        
        
        //echo $article_total;
    
       // $this->base = str_ireplace("{contenido}", $article_total,$this->base );
          $this->base = str_ireplace("{contenido}", $this->quees,$this->base );
          $this->base = str_ireplace("{nav}", $this->nav,$this->base );
  

        echo $this->base;
        
        
        
        
    } 
    
}
?>