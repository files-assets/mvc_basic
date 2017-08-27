<?php
  class core
  {

    public function run ()
    {

      # Definições iniciais:
      $url    = '/';
      $params = array();

      if (isset($_GET['url'])) {
        $url = explode('/', $_GET['url']);
      }

      if (!empty($url) && $url !== '/') {

        $currentController = $url[0] .'Controller';

        if (isset($url[1]) && !empty($url[1])) {
          $currentAction = $url[1];
        } else {
          $currentAction = 'index';
        }

        array_shift($url);
        array_shift($url);

        if (count($url) > 0) {
          $params = $url;
        }

      } else {
        $currentController = 'indexController';
        $currentAction = 'index';
      }

      if (!file_exists('controllers/'. $currentController .'.php') || !method_exists($currentController, $currentAction)) {
        $currentController = 'error404Controller';
        $currentAction = 'index';
      }

      $controller = new $currentController();
      call_user_func_array(array($controller, $currentAction), $params);
    }
  }
?>
