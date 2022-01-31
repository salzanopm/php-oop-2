<!-- CONSEGNA
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno 
shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti 
premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a stampare in pagina come visto questa mattina i prodotti scelti dall'utente. 
Oggi pomeriggio aggiungete un trait ed una exception con relativa gestione all'esercizio di venerdì.
-->

<!-- ANALISI -->
<!-- Creo shop online di smartphone ricondizionati;
utenti
utenti fidelizzati
samsung
iphone
huawei
 -->

<!--SVILUPPO -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// import area
require_once __DIR__ . '/Huawei.php';
require_once __DIR__ . '/Samsung.php';
require_once __DIR__ . '/Iphone.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/StandardUser.php';
require_once __DIR__ . '/PremiumUser.php';

// new classes of products
$samsung_s21 = new Samsung('Samsung', 'S21', 800, 'android');

$iphone_13 = new Iphone('Iphone', '13', 1000, 'IOS','');


try {
    $huawei_p40 = new Huawei('Huawei', 'P40', 700,'android', '','ciao');
} catch(Exception $e) {
    // Mandare una mail all'amministatore del sito e al programmatore.

    // Scrittura nel file di log.
    error_log($e);

    // Gestione fatal error
    echo '<div style="border: 1px solid red; color: red;">Stiamo effettuando una manutenzione ordinaria dei nostri server. Torneremo al più presto.</div>';
    die();
}

$paolo94 = new PremiumUser('Paolo', 'Salzano', 'ps@email.it');
$paolo94->aggiungiProdotto($samsung_s21);
$paolo94->aggiungiProdotto($iphone_13);
$paolo94->aggiungiProdotto($huawei_p40);
$paolo94_carrello = $paolo94->getCarrello();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
</head>
<body>

    <h1>Benvenuto <?php echo $paolo94->getFullName(); ?> questo è il tuo carrello</h1>

    <?php foreach($paolo94_carrello as $product) { ?>
        <div>
            <h2><?php echo $product->marca; ?> - <?php echo $product->modello; ?></h2>
            <div>sistema operativo: <?php echo $product->sistema_operativo; ?></div>
            <div>Prezzo: <?php echo $product->prezzo; ?> Euro</div>

            <?php if(isset($product->condizioni)) { ?>
                <div>il seguente smartphone è: <?php echo $product->condizioni; ?></div>
            <?php } ?>
            <?php if(isset($product->pezzi_disponibili)) { ?>
                <div>ci sono ancora<?php echo $product->pezzi_disponibili; ?> pezzi rimasti</div>
            <?php } ?>
        </div>
        
    <?php } ?>
    <div>
        <h3>totale carrello <?php echo $paolo94->getFinalDiscount(); ?> Euro</h3>
    </div>
    
</body>
</html>