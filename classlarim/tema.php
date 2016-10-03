
<?php
class Tema
{
  protected $temaKlasor = "temalar/";
  protected $gecerliTema = SITE_TEMASI;
  protected $defaultTema = "default";
  
  function __construct()
  {
  }
  
  private function temaAl()
  {
    $temaYol = $temaKlasor.$gecerliTema;
    
  }
}
?>
