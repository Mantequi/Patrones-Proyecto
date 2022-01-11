<?php
namespace Proyecto;

require_once 'PlatoEntrada.class.php';


class EntradaVegana extends PlatoEntrada
{
/**
     *
     * @param int $id_plato                         
     * @param string $nombre   
     * @param int $precio       
     */
    public function __construct($id_plato, $nombre, $precio)
    {
        parent::__construct($id_plato, $nombre, $precio);
    }

    
    public function verPlatoEntrada()
    {
      
        return array(
    
        'id_plato' =>  $this->id_plato,
        'nombre' => $this->nombre,
        'precio' => $this->precio,
        );
    }


}

?>

