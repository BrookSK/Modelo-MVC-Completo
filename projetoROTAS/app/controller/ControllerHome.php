<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct(){
        $this->setTitle("Página Inicial");
        $this->setDescription("Esse é o site MVC para as CAT's");
        $this->setKeywords("mvc completo, cats, policia");
        $this->setDir("home");
        $this->renderLayout();
    }
}