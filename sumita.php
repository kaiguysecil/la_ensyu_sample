<?php
 class Sumita{
    public $age;
    public $name;
    public $adress;
 }

 $sumita = new Sumita;
 $sumita->$age = 2000;
 $sumita->$name = "satoru";
 $sumita->$adress = "Saitama";

 echo $name."さんは".$adress."在住の".$age."才です。";
?>
