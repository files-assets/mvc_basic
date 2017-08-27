<?php
  class indexController extends controller {
    public function index () {

      /**
       * Aqui instanciamos uma classe para exemplo.
       * Ela pode ser modificada em "models".
       */
      $number = new number();
      $number = $number->generate(1, 100);

      $this->loadView('home', [
        'number' => $number
      ]);

    }
  }
?>
