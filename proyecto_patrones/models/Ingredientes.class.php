<?php
namespace Proyecto;
require_once 'tipoIngrediente.php';
abstract class Ingredientes {

    /**
     *
     * @param int $stock         
     * @param String $nombre
     * @param tipoIngrediente $tipoIngrediente                  
     * @return Ingrediente
     */

     public $stock;
     public $nombre;
     public $tipoIngrediente;

     public function __construct($stock, $nombre, $tipoIngrediente)
     {
         $this->stock = $stock;
         $this->nombre = $nombre;
         $this->tipoIngrediente = $tipoIngrediente;
       
     }

}

?>