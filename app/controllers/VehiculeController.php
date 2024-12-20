<?php 
namespace app\controllers;
use Flight;

class VehiculeController {

    public function __construct() {

    }
    
    public function welcome() {
        Flight::render('welcome');
    }
    
    public function list() {
        $dateList = isset($_GET['dateList']) ? $_GET['dateList'] : "2024-12-19";
        $list = Flight::VehiculeModel()->getList($dateList);

        $data = [
            'list' => $list, 
            'date' => $dateList, 
            'page' => 'list', 
        ];
        Flight::render('template', $data);
    }

    public function trajet() {
        Flight::render('trajetInsert');
    }

    public function insertDescTrajet() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $immatriculation = $_POST['vehicule'];
            $immatriculation = trim($immatriculation);
            echo $immatriculation;
            $depart = $_POST['depart'];
            $arrivee = $_POST['arrivee'];
            $debut = $_POST['debutTrajet'];
            $fin = $_POST['finTrajet'];
            $recette = $_POST['montantRecette'];
            $carburant = $_POST['montantCarburant'];

            $vehicule = Flight::VehiculeModel()->getVehiculeByImmatriculation($immatriculation);
            $trajet = Flight::VehiculeModel()->getTheTrajet($depart, $arrivee);
           
            if ($vehicule) {
                echo $vehicule['id_vehicule'];
            } else {
                echo "Aucun véhicule trouvé.";
            }

            // Flight::VehiculeModel()->insertDescTrajet($vehicule['id_vehicule'], $trajet['id_trajet'], $debut, $fin, $recette, $carburant);
            // Flight::redirect('trajetInsert');
//             $vehicule = Flight::VehiculeModel()->getVehiculeByImmatriculation($immatriculation);
// if (!$vehicule) {
//     echo "Aucun véhicule trouvé pour l'immatriculation $immatriculation.";
//     return; // Arrête le traitement si aucun véhicule n'est trouvé


        }
    }

}

?>