<?php

//ayar dosyamızı içeri alalım.
require_once('ayarlar.php');

//klasör yapılarımızın sabitleri
define("KLASOR_CLASSLARIM", "classlarim/");
define("KLASOR_MODULLER", "moduller/");
define("GUVENLIK", true);

//classlarimizi çekelim
require_once KLASOR_CLASSLARIM.Veritabani.php;
require_once KLASOR_CLASSLARIM.Guvenlik.php;
require_once KLASIR_CLASSLARIM.Fonksiyonlar.php;

//nesneleri oluştur.
$db = new Veritabani;
$gvn = new Guvenlik;
$fonk = new Fonksiyonlar;

//ayarlar

$ayarlar = $db->query($db->fetch('ayarlar));

//temel ayarlar.
define("SITE_ADI", $ayarlar->site_adi);
define("SITE_ADRESI", $ayarlar->site_adresi);
define("SITE_ACIKLAMA", $ayarlar->site_aciklama);
define("SITE_ANAHTAR_KELIMELERI", $ayarlar->site_anahtar_kelimeleri);
define("SITE_TEMASI", $ayarlar->site_temasi);
define("SITE_MAIL", $ayarlar->site_mail);

define("KLASOR_TEMA", "temalar/".SITE_TEMASI);
