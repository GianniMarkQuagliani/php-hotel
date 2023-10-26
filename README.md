# PHP HOTEL Spiegazione:

1) Index.php (Pagina Principale):

  - Inizio creando index.php è il file principale che rappresenta la pagina web principale.

  - Include data.php per ottenere l'array degli hotel e applicare i filtri.

  - Includi hotel-table.php per visualizzare la tabella degli hotel filtrati.


2) Data.php (Gestione dei dati):
  - è un file chiamato data.php per gestire i dati relativi agli hotel. Questo file contiene l'array $hotels con le informazioni sugli hotel.

  - Il file data.php è incluso nel file principale index.php utilizzando l'istruzione include. In questo modo, tutte le informazioni sugli hotel sono disponibili in index.php.

3) hotel-table.php (Tabella degli Hotel):

  - Creo un file chiamato hotel-table.php per gestire la tabella che mostra gli hotel filtrati.

  - Questo file contiene la struttura HTML per la tabella, nonché un ciclo foreach per scorrere l'array degli hotel e visualizzarli nella tabella.

  - Ancora una volta, hotel-table.php è incluso in index.php per mostrare la tabella degli hotel sulla pagina.