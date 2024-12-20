<?php 

namespace app\models;
use Flight;

class VehiculeModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getChauffeurByIdVehicule($id_vehicule) {
        $query1 = "SELECT id_chauffeur FROM vehicule WHERE id_vehicule=$id_vehicule";
        $statement1 = $db->prepare($query1);
        $statement1->execute;
        $id_chauffeur = $statement1->fetch(PDO::FETCH_ASSOC);

        $query2 = "SELECT * FROM chauffeur WHERE id_chauffeur=$id_chauffeur";
        $statement2 = $db->prepare($query2);
        $statement2->execute;
        $result = $statement2->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Liste par jour des vehicules et son chauffeur correspondant
    public function getList($date) {
        $sql = "SELECT d.id_vehicule,v.matriculation, d.id_trajet, DATE(d.date_heure_debut) as datee
        FROM descri_trajet d JOIN vehicule v ON d.id_vehicule=v.id_vehicule WHERE DATE(d.date_heure_debut)='$date'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    //Insertion des donnees par trajet
    public function insertDescTrajet($id_vehicule, $id_trajet, $debut, $fin, $recette, $carburant) {
        $sql = "INSERT INTO descri_trajet(id_vehicule, id_trajet, date_heure_debut, date_heure_fin, recette, carburant)
        VALUES (:idvehicule, :idtrajet, :debut, :fin, :recette, :carburant)";
        $stmt = $this->db->prepare($sql);
        if ($stmt->execute([
            ':idvehicule' => $id_vehicule,
            ':idtrajet' => $id_trajet,
            ':debut' => $debut,
            ':fin' => $fin,
            ':recette' => $recette,
            ':carburant' => $carburant
        ])) {
            return $this->db->lastInsertId();
        } else {
            var_dump($stmt->errorInfo()); // Affiche les détails d'erreur SQL
            return false;
        }
    }

    //Prendre le vehicule par l'immatriculation
    public function getVehiculeByImmatriculation($immatriculation) {
        $stmt = $this->db->prepare("SELECT * FROM vehicule WHERE matriculation = :immatriculation");
        $stmt->bindParam(':immatriculation', $immatriculation, \PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->errorCode() != '00000') {
            error_log(print_r($stmt->errorInfo(), true));
        }
        return $stmt->fetch(\PDO::FETCH_ASSOC);

    }    

    //Prendre le TRAJET par son point arrivee et depart
    public function getTheTrajet($depart, $arrivee) {
        $sql = "SELECT * FROM trajet WHERE point_de_depart='$depart' AND point_arrivee='$arrivee'";
        $stmt = $this->db->query($sql);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }   
}

?>