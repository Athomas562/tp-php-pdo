-- =====================================================
--  TP PDO : base "ludotheque"
--  A importer dans phpMyAdmin (onglet Importer)
--  ou à copier-coller dans l'onglet SQL.
-- =====================================================

CREATE DATABASE IF NOT EXISTS ludotheque CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE ludotheque;
SET NAMES utf8mb4;

DROP TABLE IF EXISTS jeu;

CREATE TABLE jeu (
  id     INT AUTO_INCREMENT PRIMARY KEY,
  titre  VARCHAR(50) NOT NULL,
  genre  VARCHAR(20) NOT NULL,
  annee  INT NOT NULL,
  note   INT NOT NULL            -- note sur 20
);

INSERT INTO jeu (titre, genre, annee, note) VALUES
('Minecraft',          'Aventure',   2011, 18),
('Rocket League',      'Sport',      2015, 16),
('Mario Kart 8',       'Course',     2014, 17),
('Fortnite',           'Action',     2017, 14),
('Tetris',             'Réflexion',  1984, 19),
('FIFA 23',            'Sport',      2022, 13),
('Zelda Breath of the Wild', 'Aventure', 2017, 20),
('Among Us',           'Réflexion',  2018, 15),
('Gran Turismo 7',     'Course',     2022, 15),
('Stardew Valley',     'Aventure',   2016, 17);
