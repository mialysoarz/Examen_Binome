<form action="/beneficeJournalier" method="get">
    <p>Pour regarder les benefices à cette date : 
        <input type="date" name="dateList"> 
        <input type="submit" value="Valider">
    </p>
</form>

<?php if (isset($_GET['dateList'])) { 
    echo 'Bilan du: ' . $_GET['dateList']  . '<br>';

    if (isset($benefices)) {
        echo 'Benefice par vehicule :'  . '<br>';
        foreach ($benefices as $benefice) {
            $vehicule = $benefice['vehicule'] ;
            $montant = $benefice['total_benefice'] ;
            echo $vehicule . ' : ' . $montant . '<br>';
        }
    }
    
    if (isset($benefJour)){
        echo 'Benefice du :'. $_GET['dateList']  . '<br>';
        echo '<table width=700 border=1>
        <tr>
            <th>Date</th>
            <th>Total Bénéfice</th>
        </tr>';
        foreach ($benefJour as $benefJ) {
                echo '<tr>
                        <td>' . $benefJ['datee'] . '</td>
                        <td>' . $benefJ['total_benefice'] . '</td>
                    </tr>';
            }
            echo '</table>';
    } 
?>
<?php } ?>


