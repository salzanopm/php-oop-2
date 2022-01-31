<?php
require_once __DIR__ . '/Smartphone.php';

    class Huawei extends Smartphone {   
        
        // override
        public $condizioni = 'usato';

        public $pezzi_disponibili;

        // override
        public function __construct($_marca, $_modello, $_prezzo, $_sistema_operativo, $_condizioni, $_pezzi_disponibili) {
        parent::__construct($_marca, $_modello, $_prezzo, $_sistema_operativo);

        // $_max_carico_kg deve essere un numero intero
        if(is_int($_pezzi_disponibili)) {
            $this->pezzi_disponibili = $_pezzi_disponibili;
        } else {
            // echo '$_max_carico_kg deve essere un numero intero';
            // die();
            throw new Exception('$_pezzi_disponibili deve essere un numero intero');
        }

    }
}
?>