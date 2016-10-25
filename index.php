<?php
$url = $_GET['sayfa'] ? $_GET['sayfa'] : 'anasayfa';
$dosyaYol = "moduller/".$url.".php";

global $tema;
require_once $tema->temaAl();

if(file_exists($dosyaYol))
{
  require_once $dosyaYol;
  $icerik = new $url;
}
else
{
  if($ayarlar->404 == true)
  {
    require_once('errors/404.htm')
  }
  else
  {
    require_once('moduller/anasayfa.php');
    $icerik = new Anasayfa;
  }
}

$tema->temaAl()."index.php";
?>
