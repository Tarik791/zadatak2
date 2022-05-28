<?php

class Carobnjak{

    public $carobnjak = "Carobnjak";
    public $carobnjak_health = "150hp";
    public $carolija = "carolija";

    public function carobnjak($carobnjak){


        try {
            
            if(!$carobnjak == "mac" && "koplje"){

                echo "Carobnjak ne moze koristiti mac i koplje već samo {$this->carolija}";

            }

        } catch (Exception $e) {
            
            $e->getMessage("Carobnjak koristi samo caroliju");
        }
    
    }




}



?>