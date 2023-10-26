<!-- questo è una tabella di hotel con i dati della variabile $hotels di data.php -->

<table class="table">

    <!-- intestazione della tabella -->
    <thead>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Parcheggio</th>
        <th scope="col">Voto</th>
        <th scope="col">Distanza dal centro</th>
    </tr>
    </thead>

    <tbody>
    <!-- stampo i dati della variabile $hotels -->
    <?php foreach ($hotels as $hotel): ?>
        <tr>
            <td><?php echo $hotel['name']; ?></td>
            <td><?php echo $hotel['description']; ?></td>
            <td><?php echo $hotel['parking'] ? 'Si' : 'No'; ?></td>
            <td><?php echo $hotel['vote']; ?></td>
            <td><?php echo $hotel['distance_to_center']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    
</table>
