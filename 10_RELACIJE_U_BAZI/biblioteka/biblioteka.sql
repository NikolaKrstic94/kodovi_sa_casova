CREATE DATABASE biblioteka;

CREATE TABLE knjige(
   id INT PRIMARY KEY,
   naslov VARCHAR(255)
);

CREATE TABLE pisac(
   id INT PRIMARY KEY,
   ime_prezime VARCHAR(255),
   bio TEXT,
   god_rodj YEAR
);

-- medjutabela knjige i pisac

CREATE TABLE pisac_has_knjige(
   pisac_id INT,
   knjige_id INT,
   FOREIGN KEY(pisac_id) REFERENCES pisac(id),
   FOREIGN KEY(knjige_id) REFERENCES knjige(id)
);

CREATE TABLE zanr(
   id INT PRIMARY KEY,
   naziv VARCHAR(45)
);

-- medjutabela knjige i zanr
CREATE TABLE knjige_has_zanr(
   knjige_id INT,
   zanr_id INT,
   FOREIGN KEY(knjige_id) REFERENCES knjige(id),
   FOREIGN KEY(zanr_id) REFERENCES zanr(id)
);

CREATE TABLE clanovi(
   id INT PRIMARY KEY,
   ime VARCHAR(45),
   prezime VARCHAR(45),
   adresa VARCHAR(45),
   telefon VARCHAR(45)
);

CREATE TABLE zaduzenje(
   id INT PRIMARY KEY,
   datum DATE,
   vratio TINYINT(1),
   knjige_id INT,
   clanovi_id INT,
   FOREIGN KEY(knjige_id) REFERENCES knjige(id),
   FOREIGN KEY(clanovi_id) REFERENCES clanovi(id)
);

-- Unos podataka

INSERT INTO clanovi(id, ime, prezime, adresa, telefon)
VALUES
(1, "Nikola", "Krstic", "Strahinjica Bana bb", "123123"),
(2, "Jelena", "Jekic", "Zetska 1", "321321"),
(3, "Dusan", "Duskovic", "Zorana Djindjica", "213213"),
(4, "Miroslav", "Mikic", "Milutina Ivkovica", "312312"),
(5, "Ninoslav", "Ninic", "9. Brigade", "112112")

INSERT INTO knjige(id, naslov)
VALUES
(1,"Kontraendorfin"),
(2, "Da je bolje ne bi valjalo"),
(3, "Medvedgrad"),
(4, "Cilkin Put"),
(5, "Ljudi bez grobova"),
(6, "Neki drugi zivot"),
(7, "Srce moje"),
(8, "Covek po imenu Uve")

INSERT INTO pisac(id, ime_prezime, bio, god_rodj)
VALUES
(1,"Svetislav Basara","Svetislav Basara 1953, Bajina Basta, romansijer, pripovedac i dramski pisac. ",2020),
(2,"Bojan Ljubenovic","Bojan Ljubenovic
Rodjen 1972. godine u Beogradu.
",2021),
(3,"Fredrik Bakman","Fredrik Bakman rodjen 1981 zapoceo je karijeru kao jedan od najpoznatijih svedskih blogera i kolumnista.
",2004),
(4,"Heder Moris","Heder Moris rodjena je na Novom Zelandu, a sada zivi u Australiji",1995),
(5,"Enes Halilovic","Enes Halilovic rodjen je 5. marta 1977. u Novom Pazaru.
",1999),
(6,"Jelena Bacic Alimpic","Jelena Bacic Alimpic je rodjena 1969. godine u Novom Sadu.",2010),
(7,"Mirjana Bobic Mojsilovic","Mirjana Bobic Mojsilovic je spisateljica i slikarka. ",2005)

INSERT INTO zanr(id, naziv)
VALUES
(1,"Akcioni"),
(2,"Drama"),
(3,"Fantastika"),
(4,"Horor"),
(5,"Istorija")


-- unos za zaduzenje, knjige_has_zanr, pisac_has_knjige

INSERT INTO pisac_has_knjige(pisac_id, knjige_id)
VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(5,5),
(6,6),
(7,7),
(3,8);

INSERT INTO knjige_has_zanr(knjige_id, zanr_id)
VALUES
(1,1),
(1,2),
(2,3),
(3,4),
(3,5),
(4,1),
(4,2),
(5,5),
(6,5),
(7,2),
(8,1),
(8,3)

INSERT INTO zaduzenje(id, datum, vratio,knjige_id, clanovi_id)
VALUES
(1, "2020-01-01", 0, 2 , 1),
(2, '2019-02-05', 1, 1 , 5),
(3, "2018-08-20", 0, 8, 4),
(4, "2020-03-03", 1, 8, 3),
(5, "2021-01-02", 0, 7, 4),
(6, "2018-05-05", 1, 5, 2),
(7, "2018-05-01", 0, 3, 4);



/* CREATE TABLE zaduzenje(
   id INT PRIMARY KEY,
   datum DATE,
   vratio TINYINT(1),
   knjige_id INT,
   clanovi_id INT,
   FOREIGN KEY(knjige_id) REFERENCES knjige(id),
   FOREIGN KEY(clanovi_id) REFERENCES clanovi(id)
);
 */
