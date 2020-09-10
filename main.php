<?php
class bangundatar{
  var $luas;
  var $kel;
  function fluas($sisi1,$sisi2) :void{
   $this->luas =$sisi1*$sisi2;
  }
  function keliling($sisi1,$sisi2) :void{
   $this->kel =$sisi1+$sisi2;
  }
}
class persegipanjang extends bangundatar{
  var $panjang;
  var $lebar; 
}
class lingkaran extends bangundatar{
  var $jari2;
  //meng override function pada parent class
  function fluas($sisi1,$sisi2=''):void{
    //menginilisasi parameter dengan ' ' agar parameter sisi 2 mati
    $this->luas=3.14*$this->jari2*$this->jari2;
  }
  function keliling($sisi1='',$sisi2=''):void{
    $this->kel = 2*3.14*$this->jari2;
  }
}
$bidang1 = new persegipanjang();
$bidang1->panjang=20;
$bidang1->lebar=10;
$bidang1->fluas($bidang1->panjang,$bidang1->lebar);
$bidang1->keliling($bidang1->panjang,$bidang1->lebar);
echo "\nluas persegi panjang : ".$bidang1->luas;
echo "\nkeliling persegi panjang : ".$bidang1->kel;
$bidang2 = new lingkaran();
$bidang2->jari2=10;
$bidang2->fluas($bidang2->jari2=10);
$bidang2->keliling();
echo "\nluas lingkaran : ".$bidang2->luas;
echo "\nkeliling lingkaran : ".$bidang2->kel;
?>
