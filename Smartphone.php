<?php
    class Smartphone {

        public $marca;

        public $modello;

        public $prezzo;

        public $sistema_operativo = 'Android';

        public function __construct($_marca, $_modello, $_prezzo) {
            $this->marca = $_marca;
            $this->modello = $_modello;
            $this->prezzo = $_prezzo;
        }
    }
?>