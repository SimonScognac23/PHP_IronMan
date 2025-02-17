Ho creato una classe IronMan in PHP che permette di generare istanze del personaggio con diverse combinazioni di armi, difese e sistemi di mobilità. Ho utilizzato classi astratte e classi figlie per rappresentare le parti anteriori (attacco), posteriori (difesa) e i sistemi di mobilità.

Per semplificare la creazione di più IronMan, ho implementato un metodo statico goIronMan() che genera un esercito di 10 unità con combinazioni casuali di equipaggiamento. Ogni volta che viene creata un'istanza di IronMan, un contatore statico ($counter) viene incrementato per tenere traccia del numero totale di oggetti.

Successivamente, ho testato il codice creando manualmente un'istanza di IronMan con Raggi Repulsori, Scudi Energetici e Jetpack. Ho poi invocato i metodi attaccare(), difendere(), e muoversi(), oltre a controllare il numero totale di IronMan creati con howManyIronMan().

Infine, ho definito una funzione scatenaInferno() che richiama il metodo goIronMan() per generare automaticamente un esercito di IronMan e ho eseguito questa funzione.

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

I created an IronMan class in PHP that allows the generation of instances of the character with different combinations of weapons, defenses, and mobility systems. I used abstract classes and child classes to represent the front parts (attack), rear parts (defense), and mobility systems.

To simplify the creation of multiple IronMan units, I implemented a static method goIronMan() that generates an army of 10 units with random equipment combinations. Every time an IronMan instance is created, a static counter ($counter) is incremented to keep track of the total number of objects.

Afterward, I tested the code by manually creating an IronMan instance with Repulsor Beams, Energy Shields, and a Jetpack. I then called the methods attaccare(), difendere(), and muoversi(), as well as checking the total number of IronMan created using howManyIronMan().

Finally, I defined a function scatenaInferno() that calls the goIronMan() method to automatically generate an IronMan army and executed this function.
