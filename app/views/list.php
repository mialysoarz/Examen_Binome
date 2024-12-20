<form action="/list" method="get">
    <p>Pour regarder la liste des véhicules et chauffeurs à cette date : 
        <input type="date" name="dateList"> 
        <input type="submit" value="Valider">
    </p>
</form>

<?php if (isset($_GET['dateList'])) { 
    echo $_GET['dateList']  . '<br>';
?>
    <table width=700 border=1>
        <tr>
            <th>Véhicule</th>
            <th>Matriculation</th>
            <th>Trajet</th>
            <th>Date</th>
        </tr> 
        <?php foreach ($list as $ls): ?>
            <tr>
                <td><?= $ls['id_vehicule'] ?></td>
                <td><?= $ls['matriculation'] ?></td>
                <td><?= $ls['id_trajet'] ?></td>
                <td><?= $ls['datee'] ?></td>
            </tr>
        <?php endforeach; ?>
        
    </table>
<?php } ?>


