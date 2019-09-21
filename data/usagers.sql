CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usager` varchar(25) NOT NULL,
  `motPasse` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO utilisateur (id, usager, motPasse)
VALUES (1, 'admin', '0000');