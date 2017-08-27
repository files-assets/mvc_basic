<?php
  class number extends model
  {

    /**
     * @param $n1 - Corresponde ao número mínimo a ser gerado. Padrão 1;
     * @param $n2 - Corresponde ao número máximo a ser gerado. Padrão 10;
     */
    public function generate ($n1 = 1, $n2 = 10) {
      return rand($n1, $n2);
    }
  }
?>
