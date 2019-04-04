
CREATE DATABASE edisoft CHARACTER SET utf8 COLLATE utf8_general_ci;
USE edisoft;
CREATE TABLE admin(

    id_ad TINYINT(1) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    username_ad VARCHAR(20), 
    hashed_password VARCHAR(255)
);

CREATE TABLE pack(
    id_pack TINYINT(2) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    nom_pack VARCHAR(45), 
    espace_pack INT(4), 
    prix_pack INT(7), 
    id_ad TINYINT(1), 
    FOREIGN KEY (id_ad) REFERENCES admin (id_ad )  ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE client(
    id_cl INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
    nom_cl VARCHAR(45),  
    prenom_cl VARCHAR(45), 
    num_tel_cl VARCHAR(20), 
    email_cl VARCHAR(45),  
    adresse_cl VARCHAR(45),  
    type_cl TINYINT(1), 
    nom_societe_cl VARCHAR(45),  
    id_ad TINYINT(1),
    FOREIGN KEY (id_ad) REFERENCES admin (id_ad )  ON UPDATE CASCADE ON DELETE CASCADE

);
CREATE TABLE conception(
    id_con INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    nom_con  VARCHAR(45), 
    type_con VARCHAR(9),
    date_deb_con DATE, 
    delai_con INT(2), 
    prix_con INT(7), 
    versement_con INT(7), 
    multilan_con VARCHAR(9),
    etat_con VARCHAR(7), 
    commentaire_con VARCHAR(256), 
    id_ad  TINYINT(1),  
    id_cl INT(4),
    FOREIGN KEY (id_ad) REFERENCES admin (id_ad )  ON UPDATE CASCADE ON DELETE CASCADE, 
    FOREIGN KEY (id_cl) REFERENCES client (id_cl )  ON UPDATE CASCADE ON DELETE CASCADE


);
CREATE TABLE facture(
    id_fact INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
    date_fact DATE, 
    type_pai_fact VARCHAR(6), 
    totale_fact INT(8),  
    ccp_img_fact VARCHAR(255),
    id_ad  TINYINT(1), 
    id_cl INT(4),

    FOREIGN KEY (id_ad) REFERENCES admin (id_ad )  ON UPDATE CASCADE ON DELETE CASCADE,
  
    FOREIGN KEY (id_cl) REFERENCES client (id_cl )  ON UPDATE CASCADE ON DELETE CASCADE




);

CREATE TABLE hebergement(
id_heb  INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,   
url_heb  VARCHAR(45), 
date_deb_heb DATE, 
date_fin_heb DATE, 
espace_heb INT(4), 
prix INT(7), 
id_fact INT(4),
id_ad TINYINT(1), 
id_pack TINYINT(1),
id_cl INT(4), 
    FOREIGN KEY (id_ad) REFERENCES admin (id_ad )  ON UPDATE CASCADE ON DELETE CASCADE, 
    FOREIGN KEY (id_cl) REFERENCES client (id_cl )  ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_pack) REFERENCES pack (id_pack )  ON UPDATE CASCADE ON DELETE CASCADE, 
  FOREIGN KEY (id_fact) REFERENCES facture (id_fact )  ON UPDATE CASCADE ON DELETE CASCADE


);

INSERT INTO admin (id_ad, username_ad, hashed_password) VALUES (1, 'adminedisoft', '$2y$10$WCqh.jGepS7cEYfkTC7DeuspDJpWsU9uLeVjAeWYx2/cdgnl1ZkIK');


INSERT INTO `pack` (`id_pack`, `nom_pack`, `espace_pack`, `prix_pack`, `id_ad`) VALUES
(1, 'Domaine', 0, 2500, 1),
(2, 'wind', 1, 3500, 1),
(3, 'thunder', 3, 6200, 1),
(4, 'wave', 10, 12000, 1),
(5, 'tornado', 20, 20000, 1),
(6, 'storm', 50, 36000, 1),
(7, 'sunshine', 100, 67000, 1),
(8, 'moon', 20, 19500, 1),
(9, 'earth', 40, 39500, 1),
(10, 'sun', 90, 79500, 1);
