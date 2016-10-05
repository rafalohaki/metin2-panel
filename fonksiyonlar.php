<?php

//ayar dosyamızı içeri alalım.
require_once('ayarlar.php');

//klasör yapılarımızın sabitleri
define("KLASOR_CLASSLARIM", "classlarim/");
define("KLASOR_MODULLER", "moduller/");
define("GUVENLIK", true);

//classlarimizi çekelim
require_once KLASOR_CLASSLARIM."Veritabani.php";
require_once KLASOR_CLASSLARIM."Guvenlik.php";
require_once KLASOR_CLASSLARIM."Fonksiyonlar.php";
require_once KLASOR_CLASSLARIM."tema.php";

//nesneleri oluştur.
$db = new Veritabani;
$gvn = new Guvenlik;
$fonk = new Fonksiyonlar;
$tema = new Tema;

//ayarlar

$ayarlar = $db->query($db->fetch('ayarlar'));

//temel ayarlar.
define("SITE_ADI", $ayarlar->site_adi);
define("SITE_ADRESI", $ayarlar->site_adresi);
define("SITE_ACIKLAMA", $ayarlar->site_aciklama);
define("SITE_ANAHTAR_KELIMELERI", $ayarlar->site_anahtar_kelimeleri);
define("SITE_TEMASI", $ayarlar->site_temasi);
define("SITE_MAIL", $ayarlar->site_mail);
define("SITE_DIL", $ayarlar->site_dil);

define("KLASOR_TEMA", "temalar/".SITE_TEMASI);
