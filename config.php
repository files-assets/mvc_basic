<?php

  /**
   * Definições Iniciais:
   */
  date_default_timezone_set('America/Sao_Paulo');
  header('charset=utf8');

  require 'environment.php';

  define('NAME', 'Um Nome');

  /**
   * Conexão com banco de dados:
   */
  $dbconfig = array();
  $options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
  );

  if (ENVIRONMENT === 'development') {

    define('BASE_URL', 'http://project');

    $dbconfig['host']     = 'localhost';
    $dbconfig['name']     = 'project';
    $dbconfig['user']     = 'root';
    $dbconfig['password'] = '';
  } else {

    define('BASE_URL', 'http://project');

    $dbconfig['host']     = 'localhost';
    $dbconfig['name']     = 'project';
    $dbconfig['user']     = 'root';
    $dbconfig['password'] = '';
  }

  global $pdo;
  try {

    $pdo = new PDO(
      'mysql:host='. $dbconfig['host'] .';dbname='. $dbconfig['name'],
      $dbconfig['user'],
      $dbconfig['password'],
      $options
    );

  } catch (PDOException $error) {
    echo 'Houve um erro durante a conexão com o banco de dados: <br />';
    echo $error->getMessage();
    exit;
  }


  /**
   * Funções de location, param_get e param_post:
   */
  function location ($location) {
    $location = BASE_URL . $location;
    echo '<meta http-equiv="refresh" content="0; url='. $location .'" />';
    echo '<meta http-equiv="refresh" content="1; url='. $location .'" />';
  }

  function param_get($name, $type = 'string') {
    if (!isset($_GET, $_GET[$name]) || gettype($_GET[$name]) !== $type || empty($_GET[$name])) {
      return false;
    }

    return $_GET[$name];
  }

  function param_post($name, $type = 'string') {
    if (!isset($_POST, $_POST[$name]) || gettype($_POST[$name]) !== $type || empty($_POST[$name])) {
      return false;
    }

    return $_POST[$name];
  }
?>
