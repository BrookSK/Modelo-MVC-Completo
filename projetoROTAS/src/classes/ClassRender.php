<?php
namespace Src\Classes;

class ClassRender{

    #Propriedades
    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;

    public function getDir() {
        return $this->Dir;
    }

    public function setDir($value) {
        $this->Dir = $value;
    }

    public function getTitle() {
        return $this->Title;
    }

    public function setTitle($value) {
        $this->Title = $value;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function setDescription($value) {
        $this->Description = $value;
    }

    public function getKeywords() {
        return $this->Keywords;
    }

    public function setKeywords($value) {
        $this->Keywords = $value;
    }

    #Método responsável por renderizar todos os layouts
    public function renderLayout(){
        include_once(DIRREQ."app/view/Layout.php");
    }
    #Adiciona características espacíficas no head
    public function addHead(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Head.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Head.php");
        }
    }
    #Adiciona características espacíficas no header
    public function addHeader(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Header.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Header.php");
        }
    }
    #Adiciona características espacíficas no main
    public function addMain(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Main.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Main.php");
        }
    }
    #Adiciona características espacíficas no footer
    public function addFooter(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Footer.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Footer.php");
        }
    }
}