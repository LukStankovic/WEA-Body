<?php 
class Bod3D extends Bod{
    protected $z;
    
    public function __construct($oznaceni,$x,$y,$z){
        parent::__construct($oznaceni,$x,$y);
        $this->z=$z;
    }
    public function __tostring(){
        return "$this->oznaceni[$this->x; $this->y; $this->z]";
    }
}
?>