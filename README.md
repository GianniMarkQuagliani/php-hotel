# PHP HOTEL Spiegazione:

1) Index.php (Pagina Principale):

  - Inizio creando index.php è il file principale che rappresenta la pagina web principale.

  - Include data.php per ottenere l'array degli hotel e applicare i filtri.

  - Include hotel-table.php per visualizzare la tabella degli hotel filtrati.

  - Include hotel-table.php per visualizzare la tabella degli hotel filtrati.

  - Utilizza gli array di hotel filtrati per mostrare solo gli hotel che soddisfano i criteri specificati nel form.



2) Data.php (Gestione dei dati):
  - è un file chiamato data.php per gestire i dati relativi agli hotel. Questo file contiene l'array $hotels con le informazioni sugli hotel.

  - Il file data.php è incluso nel file principale index.php utilizzando l'istruzione include. In questo modo, tutte le informazioni sugli hotel sono disponibili in index.php.




3) hotel-table.php (Tabella degli Hotel):

  - Creo un file chiamato hotel-table.php per gestire la tabella che mostra gli hotel filtrati.

  - Questo file contiene la struttura HTML per la tabella, nonché un ciclo foreach per scorrere l'array degli hotel e visualizzarli nella tabella.

  - Ancora una volta, hotel-table.php è incluso in index.php per mostrare la tabella degli hotel sulla pagina.




4) filter-form.php (Form di Filtraggio):

  - Creo un file chiamato filter-form.php che contiene il form di filtraggio.

  - Questo form include campi per il filtraggio basato su parcheggio, voto e distanza dal centro. È possibile inserire valori in questi campi e fare clic su "Filtra" per inviare il modulo.

  - Anche filter-form.php è incluso in index.php utilizzando l'istruzione include. Questo inserisce il form di filtraggio nella pagina principale.

  - Se il parametro "parking" è presente nell'URL GET, la casella di controllo verrà selezionata usando <?php if (isset($_GET['parking'])) echo 'checked'; ?>, in modo che rimanga selezionata quando la pagina viene ricaricata.

  - Se il parametro "vote" è presente nell'URL GET, il campo verrà precompilato con il valore corrispondente usando value="<?php echo isset($_GET['vote']) ? $_GET['vote'] : ''; ?>".

  - Se il parametro "distance_to_center" è presente nell'URL GET, il campo verrà precompilato con il valore corrispondente usando value="<?php echo isset($_GET['distance_to_center']) ? $_GET['distance_to_center'] : ''; ?>".