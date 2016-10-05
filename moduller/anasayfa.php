<?php
if(GUVENLIK == true) { die("Sadece index dosyasından giriniz.")}

class anasayfa.php
{
  global $tema;
  public $title = "Anasayfa";
  
  public function extra_css()
  {
    ?><link rel="stylesheet" href="<?=$tema->css_al("deneme_extra.css");?>"><?php
  }
  
  public function extra_js()
  {}
  
  public function icerik()
  {
    echo "Aanasayfaya hoş geldiniz.";
  }
}

?>
