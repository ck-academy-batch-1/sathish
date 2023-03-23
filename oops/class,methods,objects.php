<?php
class animals{
    public $animal1;
    public $animal2;
 function set_name($animal1,$animal2){
    $this->animal1=$animal1;
    $this->animal2=$animal2;
 }
 function get_name(){
    echo "carnivorous";
    echo "<br>";
    echo "herbivorous";
 }
}
$species=new animals();
$species->set_name("tiger","lion");
$species->get_name();
