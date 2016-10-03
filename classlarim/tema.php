
<?php
class Tema
{
  protected $temaKlasor = "temalar/";
  protected $gecerliTema = SITE_TEMASI;
  protected $defaultTema = "default";
  protected $cssYol = "css/";
  protected $jsYol = "js/";
  
  function __construct()
  {
  }
  
  private function temaAl()
  {
    $temaYol = $temaKlasor.$gecerliTema;
    if(is_dir($temaYol))
    {
      return $gecerliTema;
    }
    else
    {
      return $defaultTema;
    }
  }
  
  private function css_al($cssDosyasi)
  {
    $cssYol2 = $temaKlasor.$this->temaAl().$cssYol;
    $cssYolFile = $temaKlasor.$this->temaAl().$cssYol.$cssDosyasi;
    if(is_dir($cssYol2))
    {
      if(file_exists($cssYolFile))
      {
        return $cssYolFile;
      }
      else
      {
        return die($cssYolFile."konumundaki dosyayi kontrol ediniz.")
      }
    }
    else
    {
      return die($this->TemaAl." temanızda css klasörü bulunmuyor. Lütfen di<inleri " )
    }
  }
}
?>
