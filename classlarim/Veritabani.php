<?php
require_once(../fonskiyonlar.php);

class Veritabani
{
  //değişkenlerimizi oluşturak.
  
  protected $server_ip = SERVER_IP;
  protected $mysql_user = MYSQL_USER;
  protected $mysql_pass = MYSQL_PASS;
  protected $mysql_db = MYSQL_DB;
  
  private $baglan;
  
  function __construct()
  {
    $this->mysqlBaglan();
  }
  
  /**
   * Mysql baglantısı
   * return query;
   */
  private function mysqlBaglan()
  {
    $this->baglan = mysql_connect($this->server_ip, $this->mysql_user, $this->mysql_pass) or die("Mysql sunucusuna bağlanılamadı.". mysql_error());
  
    //veritabanini ve karakter setini seçtirek.
    $this->veritabaniBaglan();
    $thisp->karakterSet();
  }
  
  /**
   *Veritabanını seçen fonksiyon.
   * return query
   */
  private function veritabaniBaglan()
  {
    mysql_select_db($this->mysql_db, $this->baglan) or die("Veritabanına bağlanılamadı.".mysql_error());
  }
  
  /**
   * Mysqldan çekilecek verinin karakter setini belirler.
   */
  private function karakterSet()
  {
    mysql_query('SET NAMES "utf8"');
    mysql_query('SET CHARACTER SET utf8');
    mysql_query('SET COLLATION_CONNECTION = "utf8_general_ci"'); 
  }
  
  //Query fonksiyonları.....
  public function query($string)
  {
    mysql_query($string);
  }
  
  public function fetch($string)
  {
    mysql_fetch_object($string);
  }
  
  public function fetchArray($string);
  {
    mysql_fetch_array($string);
  }
  
  /**
   * Veritabanına veri kaydetmek için kullanılır.
   * $db => string
   * $degerler => array
   * 
   * return string
   */
  public function insert($db, $degerler = array())
  {
    /**
     * $key = sutün adı.
     * $value = sutüne işlenecek veri.
     */
    $sütunlar = "";
    $degerler = "";
    foreach($degerler = $key => $value)
    {
      $sütunlar.=$key.',';
      $degeler.="'"$value."',";
    }
    
    $sütunlar = rtrim($sütunlar);
    $degerler = rtrim($degeler);
    $query = 'INSERT INTO'.$db.'('.$sütunlar.') VALUES ('.$degerler.')';
    return $query;
  }
  
}


?>
