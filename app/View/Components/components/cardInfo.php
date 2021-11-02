<?php

namespace App\View\Components\components;

use Illuminate\View\Component;

class cardInfo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $nombre,$contenido;
    public function __construct($nombre,$contenido)
    {
        $this->nombre = $nombre;
        $this->contenido = $contenido;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */

    public function render()
    {
        $nombre = $this->nombre;
        $contenido = $this->contenido;
        return view('components.components.card-info',["nombre"=>$nombre, "contenido"=>$contenido]);
    }
}
