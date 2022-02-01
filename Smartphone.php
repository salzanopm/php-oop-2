<?php
    class Smartphone {

        use Warranty;

        public $marca;

        public $modello;

        public $prezzo;

        public $sistema_operativo;

        public function __construct($_marca, $_modello, $_prezzo, $_sistema_operativo ) {
            $this->marca = $_marca;
            $this->modello = $_modello;
            $this->prezzo = $_prezzo;
            $this->sistema_operativo = $_sistema_operativo;
        }
    }
?>