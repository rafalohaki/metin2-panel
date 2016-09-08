<?php

//ayar dosyamızı içeri alalım.
require_once('ayarlar.php');

//klasör yapılarımızın sabitleri
define("KLASOR_CLASSLARIM", "classlarim/");
define("KLASOR_MODULLER", "moduller/");
define("KLASOR_TEMA", "temalar/varsayilan");

//classlarimizi çekelim
require_once KLASOR_CLASSLARIM.Veritabani.php;
require_once KLASOR_CLASSLARIM.Guvenlik.php;
require_once KLASIR_CLASSLARIM.Fonksiyonlar.php;

//nesneleri oluştur.
$db = new Veritabani;
$gvn = new Guvenlik;
$fonk = new Fonksiyonlar;
