<!-- creo il form  -->

<form action="index.php" method="GET">
    <div class="mb-3">
        <label for="parking" class="form-label">Filtro Parcheggio:</label>
        <input type="checkbox" class="form-check-input" id="parking" name="parking" <?php if (isset($_GET['parking'])) echo 'checked'; ?>>
    </div>
    <div class="mb-3">
        <label for="vote" class="form-label">Filtro Voto (3 stelle o superiore):</label>
        <input type="number" class="form-control" id="vote" name="vote" min="1" max="5" value="<?php echo isset($_GET['vote']) ? $_GET['vote'] : ''; ?>">
    </div>
    <div class="mb-3">
        <label for="distance_to_center" class="form-label">Filtro Distanza dal centro:</label>
        <input type="number" class="form-control" id="distance_to_center" name="distance_to_center" value="<?php echo isset($_GET['distance_to_center']) ? $_GET['distance_to_center'] : ''; ?>">
    </div>
    <button type="button" class="btn btn-primary" id="filterButton">Filtra</button>
    <button type="button" class="btn btn-secondary" id="resetButton">Reset</button>
</form>

<script>
    // Codice JavaScript per il pulsante "Filtra"
    document.querySelector('#filterButton').addEventListener('click', function () {
        const vote = document.querySelector('#vote').value;
        const distance_to_center = document.querySelector('#distance_to_center').value;

        // Creo l'URL con i parametri del filtro
        let url = `${window.location.pathname}?`;

        if (document.querySelector('#parking').checked) {
            url += 'parking=1';
        }

        if (vote) {
            if (url.length > window.location.pathname.length + 1) {
                url += '&';
            }
            url += `vote=${vote}`;
        }

        if (distance_to_center) {
            if (url.length > window.location.pathname.length + 1) {
                url += '&';
            }
            url += `distance_to_center=${distance_to_center}`;
        }

        // Eseguo il reindirizzamento della pagina
        window.location.href = url;
    });

    // Codice JavaScript per il pulsante "Reset"
    document.querySelector('#resetButton').addEventListener('click', function () {
        // Reindirizzo l'utente a index.php senza parametri del filtro
        window.location.href = 'index.php';
    });
</script>
