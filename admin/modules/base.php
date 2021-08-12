<?php

class base{


  protected function connectToDatabase($credentials){
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
