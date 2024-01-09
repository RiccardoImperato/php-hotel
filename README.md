# PHP Hotels

Tabella realizzata con Bootstrap, partendo da un array di hotel, formato a sua volta da array identificativi con le relative informazioni per ogni elemento.
Per popolare la tabella ho usato un ciclo foreach che genera un tag table row `<tr></tr>` per ogni hotel e lo stampo in pagina con echo, poi al suo interno con un altro foreach genero i tag table data `<td></td>` e sempre con un echo li popolo, cambiando con un istruzione condizionale la visulizzazione della key parking: da true a Sì e da false a No, per indicare la presenza di parcheggio o meno nell'hotel.    
