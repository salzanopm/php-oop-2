<?php
require_once __DIR__ . '/Smartphone.php';

    class Huawei extends Smartphone {   
        
        // override
        public $condizioni = 'usato';

        // override
        public function __construct($_marca, $_modello, $_prezzo, $_sistema_operativo, $_condizioni) {
        parent::__construct($_marca, $_modello, $_prezzo, $_sistema_operativo);

    }
}
?>