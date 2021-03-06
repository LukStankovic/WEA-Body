<?php 
class Bod{
    protected $oznaceni;
    protected $x;
    protected $y;
    
    public function __construct($oznaceni,$x,$y){
        $this->oznaceni=$oznaceni;
        $this->x=$x;
        $this->y=$y;
    }
    
    public function __tostring(){
        return("$this->oznaceni[$this->x; $this->y]");
    }
    
    public function vzdalenostOdNuly(){
        return sqrt( pow((0-$this->x),2) + pow((0-$this->y),2) );
    }
    
    public function vzdalenostOdBodu($druhy){
        return sqrt( pow(($druhy->x - $this->x),2) + pow(($druhy->y - $this->y),2) );
    }
    
    public function posun($px,$py){
        $this->x = $this->x + $px;
        $this->y = $this->y + $py;
        
        return $this;
    }
}
?>