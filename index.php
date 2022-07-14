<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie
 per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi,
 oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php

require_once __DIR__ . "/classi/prodotti/prodotto.php";
require_once __DIR__  . "/classi/prodotti/cibo.php";
require_once __DIR__ . "/classi/prodotti/giochi.php";
require_once __DIR__ . "/classi/utenti/utente.php";
require_once __DIR__ . "/classi/utenti/scontoutente.php";

$utente1 = new Utente("Enrico", "Piombini", "piombini.enrico@gmail.com");
$utente1->setPassword(300192);
var_dump($utente1);

$utentesconto = new ScontoUtente("Mario", "Rossi", "mario.rossi@gmail.com");
$utentesconto->setSconto(0, 70);
$utentesconto ->setPassword(908980);
var_dump($utentesconto);


