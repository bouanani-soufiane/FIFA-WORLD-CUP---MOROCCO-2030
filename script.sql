CREATE TABLE `worldcup`.`Equipe` (
    `IdEquipe` INT NOT NULL AUTO_INCREMENT,
    `Nom` VARCHAR(50) NOT NULL,
    `flag` INT NOT NULL,
    `continent` VARCHAR(50) NOT NULL,
    `JouerCle` VARCHAR(50) NOT NULL,
    `capital` VARCHAR(50) NOT NULL,
    `population` INT NOT NULL,
    `nbrPoint` INT NOT NULL, 
    `nbrMatch` INT NOT NULL,
    `nbrGoal` INT NOT NULL,
    `nbrWin` INT NOT NULL,
    `nbrLose` INT NOT NULL,
 	`nbrDraw` INT NOT NULL,
    `idGroup` INT NOT NULL,
    PRIMARY KEY (`IdEquipe`),
    FOREIGN KEY (`idGroup`) REFERENCES `groupe`(`IdGroupe`)

) ENGINE = InnoDB;


-- //////////////////////////////////////////////
INSERT INTO `stade` (`nom`, `localisation`, `capacite`) VALUES 
('stade Père Jego ', 'taroudant', 50000),
('Ibn Batouta Stadium', 'tange', 80000),
('Adrar Stadium', 'agadir', 60000),
('Grand Stadium of Marrakech', 'Marrakech', 80000),
('Mohamed V Sports Complex', 'casa', 120000),
('Sheikh Mohamed Laghdaf Stadium', 'Laayoune', 50000),
('Stade d'honneur d'Oujda', 'Oujda', 70000),
('Complexe sportif de Fès', 'Fès', 90000);



-- ///////////////////////////////////////////////////////
INSERT INTO `equipe` (`Nom`, `flag`, `continent`, `JouerCle`, `capital`, `population`, `nbrPoint`, `nbrMatch`, `nbrGoal`, `nbrWin`, `nbrLose`, `nbrDraw`, `idGroup`)
VALUES

('Morocco', './images/morocco.png', 'Africa', 'Ziyech', 'Rabat', 40000000, 0, 0, 0, 0, 0, 0, 1),
('Argentina', './images/Argentina.png', 'South America', 'Messi', 'Buenos Aires', 45000000, 0, 0, 0, 0, 0, 0, 1),
('France', './images/France.png', 'Europe', 'Mbappe', 'Paris', 67000000, 0, 0, 0, 0, 0, 0, 1),
('Colombia', './images/Colombia.png', 'South America', 'Rodriguez', 'Bogotá', 51000000, 0, 0, 0, 0, 0, 0, 1),


('Nigeria', './images/Nigeria.png', 'Africa', 'Iheanacho', 'Abuja', 200000000, 0, 0, 0, 0, 0, 0, 2),
('Brazil', './images/Brazil.png', 'South America', 'Neymar', 'Brasília', 210000000, 0, 0, 0, 0, 0, 0, 2),
('Japan', './images/Japan.png', 'Asia', 'Kagawa', 'Tokyo', 126000000, 0, 0, 0, 0, 0, 0, 2),
('Portugal', './images/Portugal.png', 'Europe', 'Ronaldo', 'Lisbon', 10200000, 0, 0, 0, 0, 0, 0, 2),

('South Korea', './images/SouthKorea.png', 'Asia', 'Son', 'Seoul', 51700000, 0, 0, 0, 0, 0, 0, 3),
('Spain', './images/Spain.png', 'Europe', 'Fernandez', 'Madrid', 47000000, 0, 0, 0, 0, 0, 0, 3),
('Belgium', './images/Belgium.png', 'Europe', 'Hazard', 'Brussels', 11400000, 0, 0, 0, 0, 0, 0, 3),
('Uruguay', './images/Uruguay.png', 'South America', 'Suarez', 'Montevideo', 3500000, 0, 0, 0, 0, 0, 0, 3),

('Germany', './images/Germany.png', 'Europe', 'Muller', 'Berlin', 83000000, 0, 0, 0, 0, 0, 0, 4),
('Egypt', './images/Egypt.png', 'Africa', 'Salah', 'Cairo', 104000000, 0, 0, 0, 0, 0, 0, 4),
('Chile', './images/Chile.png', 'South America', 'Vidal', 'Santiago', 19000000, 0, 0, 0, 0, 0, 0, 4),
('Peru', './images/Peru.png', 'South America', 'Guerrero', 'Lima', 33000000, 0, 0, 0, 0, 0, 0, 4),

('England', './images/England.png', 'Europe', 'Kane', 'London', 56000000, 0, 0, 0, 0, 0, 0, 5),
('Senegal', './images/Senegal.png', 'Africa', 'Mane', 'Dakar', 17000000, 0, 0, 0, 0, 0, 0, 5),
('Cameroon','./images/Cameroon.png', 'Africa', 'Choupo-Moting', 'Yaoundé', 27000000, 0, 0, 0, 0, 0, 0, 5),
('Mexico', './images/Mexico.png', 'North America', 'Hernandez', 'Mexico City', 130000000, 0, 0, 0, 0, 0, 0, 5),

('Ivory Coast','./images/IvoryCoast.png', 'Africa', 'Pepe', 'Yamoussoukro', 26000000, 0, 0, 0, 0, 0, 0, 6),
('United States', './images/UnitedStates.png', 'North America', 'Pulisic', 'Washington, D.C.', 331000000, 0, 0, 0, 0, 0, 0, 6),
('Costa Rica','./images/CostaRica.png', 'North America', 'Navas', 'San José', 5000000, 0, 0, 0, 0, 0, 0, 6),
('Canada','./images/Canada.png', 'North America', 'Davies', 'Ottawa', 38000000, 0, 0, 0, 0, 0, 0, 6),

('Iran', './images/Iran.png', 'Asia', 'Jahanbakhsh', 'Tehran', 84000000, 0, 0, 0, 0, 0, 0, 7),
('Australia', './images/Australia.png', 'Australia', 'Rogic', 'Canberra', 26000000, 0, 0, 0, 0, 0, 0, 7),
('Saudi Arabia','./images/Saudi Arabia.png', 'Asia', 'Al-Dawsari', 'Riyadh', 35000000, 0, 0, 0, 0, 0, 0, 7),
('Qatar', './images/Qatar.png', 'Asia', 'Almoez Ali', 'Doha', 2800000, 0, 0, 0, 0, 0, 0, 7),


('Netherlands', './images/Netherlands.png', 'Europe', 'Van Dijk', 'Amsterdam', 17100000, 0, 0, 0, 0, 0, 0, 8),
('Italy', './images/Italy.png', 'Europe', 'Immobile', 'Rome', 60300000, 0, 0, 0, 0, 0, 0, 8),
('Croatia', './images/Croatia.png', 'Europe', 'Modric', 'Zagreb', 4050000, 0, 0, 0, 0, 0, 0, 8),
('Switzerland', './images/Switzerland.png', 'Europe', 'Shaqiri', 'Bern', 8600000, 0, 0, 0, 0, 0, 0, 8);


-- ///////////////////////////////////////////////////////

