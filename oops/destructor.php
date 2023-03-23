<?php
class bikes{
    function __construct($bajaj,$honda){
        $this->bajaj=$bajaj;
        $this->honda=$honda;
    }
    function __destruct(){
        echo "the name of bike is ".$this->bajaj;
        echo "<br>";
        echo "the name of bike is ".$this->honda;
    }
}
 $call=new bikes("pulsar","shine");
?>