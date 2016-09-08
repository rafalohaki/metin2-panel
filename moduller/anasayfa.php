<?php
if(GUVENLIK == true) { die("Sadece index dosyasından giriniz.")}

class anasayfa.php
{
  public $title = "Anasayfa";
  
  public function css()
  {}
  
  public function js()
  {}
  
  public function icerik()
  {
    echo "Aanasayfaya hoş geldiniz.";
  }
}

?>
