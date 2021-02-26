CREATE DATABASE videoteka_domaci CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE reziseri (
   id INT UNSIGNED PRIMARY KEY,
   ime VARCHAR(50),
   prezime VARCHAR(50),
   pol CHAR(1)
)ENGINE=InnoDB CHARACTER SET utf8;

CREATE TABLE filmovi(
   id INT UNSIGNED PRIMARY KEY,
   naslov VARCHAR(255),
   godina SMALLINT UNSIGNED,
   ocena DECIMAL(6,2),
   reziser_id INT UNSIGNED,
   FOREIGN KEY (reziser_id)
   REFERENCES reziseri(id)
)ENGINE=InnoDB CHARACTER SET utf8;

CREATE TABLE zanrovi(
   id INT UNSIGNED PRIMARY KEY,
   naziv VARCHAR(255)
) ENGINE = InnoDB CHARACTER SET utf8;

CREATE TABLE film_zanr(
   film_id INT UNSIGNED,
   FOREIGN KEY(film_id)
   REFERENCES filmovi(id),
   zanr_id INT UNSIGNED,
   FOREIGN KEY(zanr_id)
   REFERENCES zanrovi(id),
   PRIMARY KEY(film_id, zanr_id)
) ENGINE = InnoDB CHARACTER SET utf8;


-- INSERT

INSERT INTO zanrovi(id, naziv) VALUES
(1, 'Crime'),
(2, 'Drama'),
(3, 'Adventure'),
(4, 'Mystery');

INSERT INTO reziseri(id, ime, prezime, pol)VALUES
(1,'Sidney','Lumet', 'Z'),
(2,'Frank','Durabont', 'M'),
(3,'Peter', 'Jackson', 'M'),
(4, 'Christopher', 'Nolan', 'M');

INSERT INTO filmovi(id, naslov, godina, ocena, reziser_id) VALUES
(1, '12 Angry Men', 1957, 9.0, 1),
(2, 'The Green Mile', 1999, 8.6, 2),
(3, 'The Lord of THE Rings', 2003, 8.9,3),
(4, 'The Shawshank Redemption', 1994, 9.3, 2),
(5, 'Memento', 2000, 8.4, 4)

INSERT INTO film_zanr(film_id, zanr_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 2),
(5, 4)


-- 5.
SELECT filmovi.naslov, filmovi.godina, filmovi.ocena, reziseri.ime AS 'Ime Autora', reziseri.prezime AS 'Prezime Autora', zanrovi.naziv AS 'Zanr' FROM reziseri
INNER JOIN filmovi
ON reziseri.id = filmovi.reziser_id
INNER JOIN film_zanr
ON filmovi.id = film_zanr.film_id
INNER JOIN zanrovi
ON zanrovi.id = film_zanr.zanr_id
ORDER BY filmovi.naslov;

-- 6

SELECT filmovi.naslov, filmovi.godina, filmovi.ocena, reziseri.ime AS 'Ime Autora', reziseri.prezime AS 'Prezime Autora', zanrovi.naziv AS 'Zanr' FROM reziseri
INNER JOIN filmovi
ON reziseri.id = filmovi.reziser_id
INNER JOIN film_zanr
ON filmovi.id = film_zanr.film_id
INNER JOIN zanrovi
ON zanrovi.id = film_zanr.zanr_id
WHERE filmovi.ocena = (SELECT MAX(filmovi.ocena) FROM filmovi)
ORDER BY filmovi.naslov;

--  7

