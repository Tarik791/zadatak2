<?php

class Home extends Controller{
    public function index(){

        /*
        $Carobnjak = $this->load_model('Carobnjak');

        $carobnjak = "";
        $Carobnjak->carobnjak($carobnjak);

        echo "<br>";
        echo "<br>";

        $Macevalac = $this->load_model('Macevalac');

        $macevalac = "";
        $Macevalac->macevalac($macevalac);

        echo "<br>";
        echo "<br>";

        $Mac = $this->load_model('Oruzje');

        $mac = "";
        $Mac->mac($mac);

        */

        $Carobnjak = $this->load_model('Carobnjak');
        echo $Carobnjak->carobnjak . " sadrži " . $Carobnjak->carobnjak_health;


        echo "<br>";

        $carobnjak = "";
        $Carobnjak->carobnjak($carobnjak);

        echo "<br>";
        echo "<br>";

        $Macevalac = $this->load_model('Macevalac');
        echo $Macevalac->macevalac . " sadrži " . $Macevalac->macevalac_health;

        echo "<br>";

        $macevalac = "";
        $mac = "";
        $koplje = "";

        $Macevalac->macevalac($macevalac, $mac, $koplje);



        

        $data['page_title'] = "Home";
        $this->view("home", $data);
    }


}