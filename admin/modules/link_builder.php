<?php

/*
 * Function to 'get' and 'configurate' the hyperlinkpanel
 */

//SQL: insert into mbLinks (MBID, MBLINK, MBDATE) VALUES (md5(random_bytes(256)), 'https://www.idleglance.com/', NOW())

class link_builder{

  protected array $links = [];
  public object $oLinks;

  protected $database_connection;
  public array $databaseCredentials = [
    'databasename'  => 'd0357350',
    'username'      => 'd0357350',
    'password'      => 'L7uzIAkfo183RYF30ZK2',
    'host'          => '13uhe.de'
  ];

  public function __construct(){
    $this->connectToDatabase($this->databaseCredentials);
  }

  public function getLinks(): bool{
    if ($this->connectToDatabase($this->databaseCredentials)) {
      $sQuery = 'select MBLINK from `mbLinks`;';
      if ($result = $this->database_connection->query($sQuery)) {
        while ($row = $result->fetch_row()) {
          var_dump($row);
        }
      }
      $this->database_connection->close();
    }
    return true;
  }

  protected function getDataBaseCredentials(): void{
    $sFile = "../../../admin/placeholder.yaml";
    $rHandle = fopen($sFile, "r");
    $aContent = fread($rHandle, filesize($sFile));

    var_dump($aContent);

    $aContent = explode("\n", $aContent);

    foreach ($aContent as $use => $value){
      $this->databaseCredentials[] = $value;
    }
  }

  protected function connectToDatabase($credentials): bool{
    $this->database_connection = new mysqli(
      $credentials['host'],
      $credentials['username'],
      $credentials['password'],
      $credentials['databasename']
    );

    $this->database_connection->set_charset('UTF-8');

    if ($this->database_connection->connect_error){
      die('failed '.$this->database_connection->connect_errno." ".$this->database_connection->connect_error);
    }
    return true;
  }
}