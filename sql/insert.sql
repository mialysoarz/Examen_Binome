INSERT INTO noel_categorie(nom_categorie) VALUES 
('fille'), ('garcon'), ('neutre');

-- Cadeaux pour filles
INSERT INTO noel_cadeau (id_categorie, nom_cadeau, image_cadeau, prix_cadeau) VALUES 
(1, 'Poupée Barbie', 'barbie.jpg', 25.99),
(1, 'Cuisine en jouet', 'cuisine.jpg', 45.50),
(1, 'Kit de maquillage pour enfants', 'maquillage.jpg', 15.99),
(1, 'Licorne en peluche', 'licorne.jpg', 12.00),
(1, 'Château de princesse', 'chateau_princesse.jpg', 55.99),
(1, 'Sac à dos rose avec paillettes', 'sac_paillettes.jpg', 20.00),
(1, 'Cahier de coloriage magique', 'coloriage_magique.jpg', 5.99),
(1, 'Trousseau de déguisement fée', 'deguisement_fee.jpg', 18.99),
(1, 'Jeu de société "Reine des Neiges"', 'reine_des_neiges.jpg', 30.00),
(1, 'Bracelet DIY à perles', 'bracelet_diy.jpg', 8.99);

-- Cadeaux pour garçons
INSERT INTO noel_cadeau (id_categorie, nom_cadeau, image_cadeau, prix_cadeau) VALUES 
(2, 'Voiture télécommandée', 'voiture_rc.jpg', 29.99),
(2, 'Lego Star Wars', 'lego_star_wars.jpg', 60.00),
(2, 'Ballon de foot', 'ballon_foot.jpg', 15.00),
(2, 'Piste de course Hot Wheels', 'hot_wheels.jpg', 40.00),
(2, 'Kit de bricolage pour enfants', 'bricolage_enfants.jpg', 20.00),
(2, 'Montre digitale Spiderman', 'montre_spiderman.jpg', 10.99),
(2, 'Hélicoptère télécommandé', 'helicoptere_rc.jpg', 35.99),
(2, 'Cahier d’activités super-héros', 'activites_super_heros.jpg', 6.99),
(2, 'Sabre laser lumineux', 'sabre_laser.jpg', 25.00),
(2, 'Puzzle 3D de voiture', 'puzzle_3d.jpg', 12.99);

-- Cadeaux neutres
INSERT INTO noel_cadeau (id_categorie, nom_cadeau, image_cadeau, prix_cadeau) VALUES 
(3, 'Tablette éducative', 'tablette_educative.jpg', 50.00),
(3, 'Trousse de crayons de couleur', 'trousse_crayons.jpg', 7.99),
(3, 'Jeu de société classique', 'jeu_societe.jpg', 20.00),
(3, 'Casque audio pour enfants', 'casque_audio.jpg', 25.99),
(3, 'Hamac pour peluches', 'hamac_peluches.jpg', 12.00),
(3, 'Mug personnalisé Noël', 'mug_noel.jpg', 10.00),
(3, 'Lanterne magique de nuit', 'lanterne_magique.jpg', 18.99),
(3, 'Sac de couchage avec motifs', 'sac_couchage.jpg', 30.00),
(3, 'Livre illustré interactif', 'livre_interactif.jpg', 15.00),
(3, 'Set de peinture pour enfants', 'set_peinture.jpg', 12.99);

-- Cadeaux supplémentaires
INSERT INTO noel_cadeau (id_categorie, nom_cadeau, image_cadeau, prix_cadeau) VALUES 
(3, 'Globe terrestre lumineux', 'globe_lumineux.jpg', 35.00),
(3, 'Calendrier de l’Avent surprise', 'calendrier_avent.jpg', 19.99),
(1, 'Peignoir de princesse', 'peignoir_princesse.jpg', 22.99),
(2, 'Masque de super-héros', 'masque_super_heros.jpg', 14.99),
(3, 'Coffret DIY slime', 'diy_slime.jpg', 15.00),
(3, 'Boîte de rangement en forme d’animal', 'boite_rangement.jpg', 10.00),
(1, 'Sac à main licorne', 'sac_main_licorne.jpg', 18.99),
(2, 'Kit de figurines dinosaures', 'figurines_dinosaures.jpg', 29.99),
(3, 'Lampe de chevet étoilée', 'lampe_etoilee.jpg', 24.99),
(3, 'Bande dessinée éducative', 'bd_educative.jpg', 9.99);

INSERT INTO noel_admin (nom_admin, mdp) VALUES 
('Alice', 'alice123'),
('Bob', 'bob456');

INSERT INTO noel_utilisateur (nom_utilisateur, mdp, nb_de_filles, nb_de_garcons) VALUES 
('Famille Dupont', 'dupont123', 2, 1),
('Famille Martin', 'martin456', 1, 2);

INSERT INTO noel_depot_argent (id_utilisateur, date_depot, argent_depose, valide) VALUES 
(1, '2024-12-05', 200.00, 0),
(2, '2024-12-06', 150.00, 0);


