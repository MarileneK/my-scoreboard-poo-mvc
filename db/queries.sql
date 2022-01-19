CREATE DATABASE wf3_php_final_marilene;

USE wf3_php_final_marilene;

-- CREATE TABLE game (
--     id_game int(5) NOT NULL AUTO_INCREMENT,
--     title varchar(255) NOT NULL,
--     min_players varchar(255) NOT NULL,
--     max_players varchar(255) NOT NULL,
--     PRIMARY KEY (id_game)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `game` (`id_game`, `title`, `min_players`, `max_players`) VALUES
(23, '7 Wonders', 2, 7),
(24, 'Ticket to Ride', 2, 5),
(25, 'Pandemic', 2, 4),
(26, 'Munchkin', 3, 6);

-- CREATE TABLE player (
--     id_player int(5) NOT NULL AUTO_INCREMENT,
--     email varchar(255) NOT NULL,
--     nickname varchar(255) NOT NULL,
--     PRIMARY KEY (id_game)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `player`(`id_player`, `email`, `nickname`) VALUES
(1, 'luke.skywalker@rogue.sw','Luke'),
(2, 'amidala.padme@naboo.gov','Padme'),
(3, 'han.solo@millenium-falcon.com','HanSolo'),
(4, 'chewbacca@wook.ie','Chewbie'),
(5, 'rey@jakku.planet','Rey');

-- CREATE TABLE contest (
--     id_contest int(5) NOT NULL AUTO_INCREMENT,
--     game_id int(5) NOT NULL,
--     start_date date NOT NULL,
--     winner_id int(5) NOT NULL,
--     PRIMARY KEY (id_contest)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `contest`(`id_contest`, `game_id`, `start_date`, `winner_id`) VALUES
(1, 23, "2019-12-25", 2),
(2, 25, "2020-12-25", null);

-- CREATE TABLE player_contest (
--     id_player_contest int(5) NOT NULL AUTO_INCREMENT,
--     player_id int(5) NOT NULL,
--     contest_id int(5) NOT NULL,
--     PRIMARY KEY (id_player_contest),
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `player_contest`(`id_player_contest`, `player_id`, `contest_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 2, 2),
(7, 3, 2),
(8, 5, 2);