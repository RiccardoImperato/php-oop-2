# PHP OOP 2

Pagina di e-commerce che vende prodotti per animali, stampati in pagina come card con un immagine e le info nome, categoria (cane o gatto), tipo (gioco, cibo o cuccia) e prezzo.

Per realizzare la pagina ho realizzato una classe Product, con le proprietà $image, $name(nome prodotto), $category, $type e $price e i relativi metodi setter e getter, la proprietà $category in particolare è un istanza della classe Category, che aggiunge le variabili $nome(cane o gatto) e $icon.   
All'interno della classe Product viene anche richiamato il trait PriceTrait, che verifica che il valore di $price sia un numero e, in caso negativo, stampa a schermo un messaggio di errore.
In seguito ho creato le classi per i tipi di prodotto Food, Toy e Bed, tutte estensioni della classe Product, ognuna con proprietà diverse che vengo implementate a quelle della classe genitore. 
In index.php ho istanziato gli oggetti $dog e $cat per rappresentare le categorie, e i vari prodotti che poi ho salvato in un array $products.
Per stamapre a schermo i prodotti sotto forma di card, ho usato un ciclo foreach che itera sull'array appena creato, e mi sono servito di vari echo all'interno dei tag HTML per riportare le informazioni dei prodotti e le loro immagini.  
