# PHP OOP 2

Pagina di e-commerce che vende prodotti per animali, stampati in pagina come card con un immagine e le info nome, categoria (cane o gatto), tipo (gioco, cibo o cuccia) e prezzo.

Per realizzare la pagina ho usta tre classi: 

- Product
- Category
- Type

La classe Product ha le proprietà $name e $price che vengono ereditate dalla classe Category, la quale aggiunge la proprietà $category e contiene la funzione che genera l'icona per la card in base alla categoria.
Infine la classe Type eredita tutte le proprietà della classi genitori Product e Category, aggiunge la proprietà $type e viene istanziata per creare gli oggetti che rappresentano i prodotti.  