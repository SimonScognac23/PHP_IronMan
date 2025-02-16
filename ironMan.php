<?php


// non abbiamo bisogno di richiamare le due classi astratte in quanto sono state gia chiamate nelle rispettive classi figlie

require_once('parteAnteriore_missili.php');  // attacco

require_once('parteAnteriore_raggiRepulsori.php');


require_once('partePosteriore_scaricaEmp.php');  // difesa

require_once('partePosteriore_scudiEnergetici.php');



require_once('sistemaMobilita_jetPack.php');  // movimento

require_once('sistemaMobilita_stivaliRazzo.php');








class IronMan  {





    public $parteAnteriore;   // attacco

    public $partePosteriore;  // difesa

    public $sistemaMobilita;  // movimento Iron Man


    public static $counter = 0;       // dichiaro il contatore che tiene conto delle istanze dell'oggetto e lo inizializzo a 0



    public function __construct( ParteAnteriore $_parteAnteriore, PartePosteriore $_partePosteriore, SistemaMobilita $_sistemaMobilita ){  
        // io scrivendo ParteAnteriore, PartePosteriore e SistemaMobilita istruisco il mio programma ad accettare i figli diretti di ParteAnteriore, PartePosteriore e SistemaMobilita
       

         $this->parteAnteriore = $_parteAnteriore;// valorizziamo gl attributi

         $this->partePosteriore = $_partePosteriore;

         $this->sistemaMobilita = $_sistemaMobilita;
       
         
         
                          // scope resolution operator  --> ( :: operatore statico )
                          IronMan::$counter++; // tramite il :: io posso accedere ad attributi e metodi statici della classe (fa riferimento alla classe)  

       
           }
 
 



      //  ----------------- METODI DENTRO LA CLASSE IRONMAN--------------------------------------------- -------------------------------------------------------------------------------------------

              public function attaccare(){    // creo un metodo dentro la classe Iron Man
      
              $this->parteAnteriore->attacco();   // siamo dentro la classe IronMan e da qui accedo all'oggetto parteAnteriore ma da dentro la classe IronMan e per far cio uso il this
  
            // ORA PER ATTACCARE NON DEVO FARE TUTTI I PASSAGGI posso fare $ironMan1->attaccare();
            // quando sarà invocata questa funzione il programma cercherà un metodo che si chiama attaccare() e lo richiama lui stesso l'oggetto
    
    
        }
    




              public function difendere(){      // creo un metodo dentro la classe IronMan senza dover accedere alla classe figlia
            
              $this->partePosteriore->difesa();
    
        }




             public function muoversi(){      
            
             $this->sistemaMobilita->movimento();
      
          }




          public static function howManyIronMan() {
            echo "Gli IronMan sono: " . IronMan::$counter . "\n";
        }
        





        public static function goIronMan() {

            // Possibili combinazioni per ogni tipo di parte

            $__partiAnteriori = [ new RaggiRepulsori(), new Missili() ]; // nella variabile appena creata ci andro a salvare un array con all'interno 2  istanze di oggetti appena create con il metodo inline

            $__partiPosteriori = [ new ScudiEnergetici(), new ScaricaEmp() ]; 

            $__sistemiMobilita = [ new Jetpack(), new StivaliRazzo() ];
        

            // Creazione di un esercito di 10 IronMan casuali

            $__ironMan = []; // creo un array vuoto 

            for ($i = 0; $i < 10; $i++) {  // ora qui tramite un ciclo for che dice finche il contatore i è <10 tu creami un oggetto di classe IronMan e assegnagli a random un istanza di oggetto che è inserita dentro la variabile  $__partiAnteriori,  $__partiPosteriori e   $__sistemiMobilita


                $__ironMan[] = new IronMan(


                   
                    $__partiAnteriori[array_rand($__partiAnteriori)],  // assegnazione casuale tramite array_rand
                    $__partiPosteriori[array_rand($__partiPosteriori)], // La funzione array_rand() in PHP è utilizzata per selezionare una o più chiavi casuali da un array. Essa restituisce la chiave (indice) dell'elemento selezionato casualmente.
                    $__sistemiMobilita[array_rand($__sistemiMobilita)] 

                );
        

             
                var_dump($__ironMan);  // Visualizza l'array degli IronMan
                IronMan::howManyIronMan();  // Conta gli IronMan creati

            }
        }
        



}




?>




?>
