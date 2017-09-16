<?php
  class controller
  {
    public function loadView ($name, $data = array(), $loadBase = true)
    {
      extract($data);

      if ($loadBase) {
        require 'views/templates/main.php';
      } else {
        require 'views/'. $name .'.php';
      }
    }

    public function loadViewInTemplate ($name, $data = array())
    {
      extract($data);
      require 'views/'. $name .'.php';
    }
  }
?>
