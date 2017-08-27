<?php
  class controller
  {

    protected $userdata;

    public function __construct ()
    {
      global $userdata;
      $this->userdata = $userdata;
    }

    public function loadView ($name, $data = array(), $loadBase = true)
    {
      extract($data);
      $userdata = $this->userdata;

      if ($loadBase) {
        require 'views/templates/main.php';
      } else {
        require 'views/'. $name .'.php';
      }
    }

    public function loadViewInTemplate ($name, $data = array())
    {
      extract($data);
      $userdata = $this->userdata;

      require 'views/'. $name .'.php';
    }
  }
?>
