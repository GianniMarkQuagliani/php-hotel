<form action="index.php" method="GET">
    <div class="mb-3">
        <label for="parking" class="form-label">Filtro Parcheggio:</label>
        <input type="checkbox" class="form-check-input" id="parking" name="parking">
    </div>
    <div class="mb-3">
        <label for="vote" class="form-label">Filtro Voto (3 stelle o superiore):</label>
        <input type="number" class="form-control" id="vote" name="vote" min="1" max="5">
    </div>
    <div class="mb-3">
        <label for="distance_to_center" class="form-label">Filtro Distanza dal centro:</label>
        <input type="number" class="form-control" id="distance_to_center" name="distance_to_center">
    </div>
    <button type="submit" class="btn btn-primary">Filtra</button>
</form>
