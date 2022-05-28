<?php

class Macevalac{

    public $macevalac = "Macevalac";
    public $macevalac_health = "100hp";
    public $mac = "mač";
    public $koplje = "koplje";

    public function macevalac($macevalac, $mac, $koplje){


        try {
            
            if(!$macevalac == "carolija"){

                echo "macevalac ne moze koristiti caroliju već samo {$this->mac} i {$this->koplje}";

            }

        } catch (Exception $e) {
            
            $e->getMessage("Macevalac ne moze koristi caroliju");
        }
    }


}



?>