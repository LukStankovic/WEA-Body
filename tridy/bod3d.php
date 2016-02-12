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
    
    public function vzdalenostOdNuly(){
        return sqrt( pow((0-$this->x),2) + pow((0-$this->y),2) + pow((0-$this->z),2) );
    }
    
    public function vzdalenostOdBodu($druhy){
        return sqrt( pow(($druhy->x - $this->x),2) + pow(($druhy->y - $this->y),2) + pow(($druhy->z - $this->z),2) );
    }
    

}
?>