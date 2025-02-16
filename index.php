<?php


//   La funzione require() in PHP viene utilizzata per includere un file esterno all'interno di un altro script.

require_once ('partePosteriore.php');  // classi abstract

require_once('parteAnteriore.php');

require_once('sistemaMobilita.php');



require_once('partePosteriore_scaricaEmp.php');  // classi figlie di    partePosteriore.php

require_once('partePosteriore_scudiEnergetici.php');



require_once('parteAnteriore_missili.php');  // classi figlie di   parteAnteriore.php

require_once('parteAnteriore_raggiRepulsori.php');




require_once('sistemaMobilita_jetPack.php');  // classi figlie di    sistemaMobilita.php

require_once('sistemaMobilita_stivaliRazzo.php');


require_once('ironMan.php');  // classe di ironMan







function scatenaInferno() {
    IronMan::goIronMan();  // entro nela classe IronMan e vado a cercare il METODO goIronMan
}



// Eseguiamo la FUNZIONE per creare l'esercito di IronMan
scatenaInferno();









// creazione di un istanza dell'oggetto IronMan 
$ironman = new IronMan( new RaggiRepulsori(), new ScudiEnergetici(), new Jetpack());

$ironman->attaccare();
$ironman->difendere();
$ironman->muoversi();

$ironman->howManyIronMan(); //  <---esce come risultato 11   (10 creati prima  + 1 che sarebbe $ironman istanziato ora)


?>








