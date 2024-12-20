CREATE DATABASE Noel;
USE Noel;

CREATE TABLE noel_categorie(
    id_categorie INT PRIMARY KEY AUTO_INCREMENT,
    nom_categorie VARCHAR(100)
);

CREATE TABLE noel_cadeau(
    id_cadeau INT PRIMARY KEY AUTO_INCREMENT,
    id_categorie INT,
    nom_cadeau VARCHAR(100),
    image_cadeau VARCHAR(50),
    prix_cadeau FLOAT,
    foreign key (id_categorie) references noel_categorie(id_categorie)
);

CREATE TABLE noel_admin (
    id_admin INT PRIMARY KEY AUTO_INCREMENT,
    nom_admin VARCHAR(100),
    mdp VARCHAR(100)
);

CREATE TABLE noel_utilisateur (
    id_utilisateur INT PRIMARY KEY AUTO_INCREMENT,
    nom_utilisateur VARCHAR(100),
    mdp VARCHAR(100),
    nb_de_filles INT,
    nb_de_garcons INT
);

--Pour valider: 1:valide et 0:non valide
CREATE TABLE noel_depot_argent(
    id_depot INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT,
    date_depot DATE,
    argent_depose FLOAT,
    valide INT,
    foreign key (id_utilisateur) references noel_utilisateur(id_utilisateur)
);

--Cette utilisateur a choisi -> ce cadeau la
CREATE TABLE noel_cadeau_choisi (
    id_choisi INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT,
    id_cadeau INT,
    foreign key (id_utilisateur) references noel_utilisateur(id_utilisateur),
    foreign key (id_cadeau) references noel_cadeau (id_cadeau)
);




