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
   * 
   * $db => string
   * $degerler => array
   * 
   * return string
   */
  public function insert($db, $degerler = array())
  {
    /**
     * $key = sütun adı.
     * $value = sütune işlenecek veri.
     */
    $sütunlar = "";
    $degerler = "";
    foreach($degerler as $key => $value)
    {
      $sütunlar.=$key.',';
      $degeler.="'"$value."',";
    }
    
    $sütunlar = rtrim($sütunlar);
    $degerler = rtrim($degeler);
    $query = 'INSERT INTO'.$db.'('.$sütunlar.') VALUES ('.$degerler.')';
    return $query;
  }
  
  /**
   * Veritabanında olan bir veriyi güncellemek için update fonksiyonunu kullanırız.
   * 
   * $db => string
   * $degerler => array
   * $where => array
   * $limit = int
   * 
   * return string
   */
  public function update($db, $degerler = array(), $where = array(), (int) $limit = NULL)
  {
    /**
     * $key = sütun adı.
     * $value = sütune işlenecek veri.
     */
     $update_degerleri = "";
     foreach($degerler as $key => $value)
     {
        $update_degerleri.= "$key='$value',";
     }
     
     $update_degerleri = rtrim($update_degerleri, ",");
    
     if(isset($where))
     {
       //birden fazla where varsa burası çalışır.
       if(count($where) > 1)
       {
         foreach($where as $key => $value)
         {
            $where_degerleri.= "$key='$value' AND";
         }
         $where_degerleri = rtrim($where_degerleri, "AND");
       }
       else
       {
         foreach($where as $key => $value)
         {
            $where_degerleri.= "$key='$value'";
         }
       }
     }
     $query = "UPDATE".$db."SET".$update_degerleri."WHERE".$where_degerleri;
     if(count($where) > 0)
     {
       $query.="WHERE".$where_Degerleri;
     }
     if(isset($limit))
     {
       $query.="LIMIT ".$limit;
     }
     
     return $query;
  }
  
}


?>
