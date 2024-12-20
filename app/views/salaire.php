<form action="/salaire" method="get">
    <p>Pour regarder le salaire journalier des chauffeurs à cette date : 
        <input type="date" name="dateList"> 
        <input type="submit" value="Valider">
    </p>
</form>

<?php
if (isset($_GET['dateList'])) {
    // Récupérer la date sélectionnée
    $dateList = $_GET['dateList'];

    // Récupérer la liste des chauffeurs et calculer le salaire pour chaque chauffeur
    $chauffeurs = $db->query("SELECT id_chauffeur, nom FROM chauffeur");
    
    // Affichage du salaire pour chaque chauffeur
    echo "<h3>Salaire journalier pour le " . $dateList . " :</h3>";
    echo "<table width=700 border=1>
            <tr>
                <th>Chauffeur</th>
                <th>Salaire</th>
            </tr>";

    foreach ($chauffeurs as $chauffeur) {
        // Calculer le salaire pour chaque chauffeur
        $salaire = $salaireModel->calculerSalaireJournalier($chauffeur['id_chauffeur'], $dateList, $conn);
        
        echo "<tr>
                <td>" . $chauffeur['nom'] . "</td>
                <td>" . number_format($salaire, 2) . " Ar</td>
              </tr>";
    }

    echo "</table>";
}
?>
