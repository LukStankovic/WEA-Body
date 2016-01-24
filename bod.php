<?php 
class Bod{
    private $x;
    private $y;
    
    public function __construct($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    
    public function vzdalenostOdNuly(){
        return sqrt( pow((0-$this->x),2) + pow((0-$this->y),2) );
    }
}
?>