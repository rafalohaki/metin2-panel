<?php
$url = $_GET['sayfa'] ? $_GET['sayfa'] : 'anasayfa'
$dosyaYol = "moduller/".$url.".php"

if(file_exists($dosyaYol))
{
  require_once $dosyaYol;
  $icerik = new $url;
  $icerik->icerik();
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
    $icerik->icerik();
  }
}
?>

<html>
<head>
  <title>Metin2 Title</title>
</head>
<body>
  <head>
    <div id="logo">
      logo gelecek
    </div>
    <div id="ust_menu">
      Menü gelecek
    </div>
  </head>
</body>

</html>
