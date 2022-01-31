<?php
    class User {
        public $nome;

        public $cognome;

        public $email;
        
        protected $carrello = [];

        public $discount = 0;

        public function __construct($_nome, $_cognome, $_email) {
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->email = $_email;
        }

        public function aggiungiProdotto($prodotto) {
            $this->carrello[] = $prodotto;
        }

        public function getCarrello() {
            return $this->carrello;
        }

        public function getFullName() {
            return $this->nome . ' ' . $this->cognome;
        }

        public function getFinalDiscount() {
            $totale_carrello = 0;
            foreach ($this->carrello as $product) {
                $totale_carrello += $product->prezzo;
            }
            $totale_carrello -= ($totale_carrello * $this->discount / 100);
            return $totale_carrello;
        }

    }
?>