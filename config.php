<?php

  /**
   * Definições Iniciais:
   */
  date_default_timezone_set('America/Sao_Paulo');

  define('NAME', 'Um Nome');
  define('BASE_URL', 'http://localhost/mvc');

  /**
   * Conexão com a base de dados:
   */
  $dbconfig = array(
    'host'     => 'localhost', // Host (IP);
    'name'     => 'project',   // Nome do banco;
    'user'     => 'root',      // Nome do usuário;
    'password' => '',          // Senha do usuário;
    'options'  => array(
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    )
  );

  global $pdo;
  try {

    $pdo = new PDO(
      'mysql:host='. $dbconfig['host'] .';dbname='. $dbconfig['name'],
      $dbconfig['user'],
      $dbconfig['password'],
      $dbconfig['options']
    );

  } catch (PDOException $error) {
    echo 'Houve um erro durante a conexão com o banco de dados: <br />';
    echo $error->getMessage();
    exit;
  }

  /**
   * @param string $location - Corresponde à URL.
   */
  function location ($location) {
    $location = BASE_URL . $location;
    echo '<meta http-equiv="refresh" content="0; url='. $location .'" />';
    echo '<meta http-equiv="refresh" content="1; url='. $location .'" />';
    echo '<script> location.replace("'. $location .'"); </script>';
    echo '<script> setInterval(function () { location.replace("'. $location .'"); }, 10) </script>';
  }
?>
