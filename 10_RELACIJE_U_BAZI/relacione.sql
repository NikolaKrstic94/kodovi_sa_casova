-- Kreiranje baze `drustvena mreza`
CREATE DATABASE drustvena_mreza;

-- Kreiranje tabele `korisnici`
CREATE TABLE korisnici(
   id INT PRIMARY KEY,
   korisnicko_ime VARCHAR(45),
   lozinka VARCHAR(45)
);

--  Kreiranje tabele `profili`

CREATE TABLE profili(
   id INT PRIMARY KEY,
   adresa VARCHAR(255),
   telefon VARCHAR(40),
   korisnik_id INT UNIQUE
);

-- Dodavanje stranog kljuca tabeli `profili`

ALTER TABLE profili -- Koju tabelu dopunjujemo
ADD FOREIGN KEY(korisnik_id) -- Koje polje u toj tabeli postavljamo da bude strani kljuc
REFERENCES korisnici(id); -- Povezujemo to polje sa kojom tabelom i kojim njenim poljem (polje u tablei 1)


-- Unos podataka u tabelu korisnici

INSERT INTO korisnici(id, korisnicko_ime, lozinka)
VALUES (1, "ana_antic", 123456),
 (2, "bojan_bojovic", 123456),
 (4, "vuk_vulic", 123456);

-- Unos podataka u tabelu profili

INSERT INTO profili(id, adresa, telefon, korisnik_id)
VALUES (101, "Strahinjica Bana 45b", "123456", 2);

INSERT INTO profili(id, adresa, telefon, korisnik_id)
VALUES (102, "Romanijska 45a", "123456", 1);

--  kreiranje tabele objave

CREATE TABLE objave(
   id INT PRIMARY KEY,
   naslov_objave VARCHAR(255)
);

CREATE TABLE komentari(
   id INT PRIMARY KEY,
   tekst_komentara VARCHAR(255),
   objave_id INT,
   FOREIGN KEY(objave_id) REFERENCES objave(id)
); -- Strani kljuc objave_id povezuje sa primarnik kljucem iz tabele objave


INSERT INTO objave(id, naslov_objave)
VALUES
(1,"Nole nasmejao publiku"),
(2, "Jokic tripl dabl"),
(3, "Bogdanovic solidan");

INSERT INTO komentari(id, tekst_komentara, objave_id)
VALUES
(1, "Svaka cast majstore!", 2),
(2,"Nedovoljno za pobedu", 2),
(3, "Trojka sa druge planete",3),
(4, "Ne mogu da prestanem da se smejem!", 1),
(5, "Jokic smrsao", 2);

INSERT INTO komentari(id, tekst_komentara, objave_id)
VALUES
(7, "Svaka cast bre!", 256);

CREATE TABLE kategorije(
   id INT PRIMARY KEY,
   naziv VARCHAR(255) NOT NULL
);
-- unos podataka u tabelu kategorije
INSERT INTO kategorije(id, naziv)
VALUES (1, "Politika"),
(2, "Kultura"),
(3, "Hronika"),
(4, "Zabava"),
(5, "Sport"),
(6, "Vreme"),
(7, "Zdravlje");

-- pravimo medjutabelu

CREATE TABLE kategorije_has_objave(
   kategorije_id INT,
   objave_id INT,
   FOREIGN KEY(kategorije_id) REFERENCES kategorije(id),
   FOREIGN KEY(objave_id) REFERENCES objave(id)
)

INSERT INTO kategorije_has_objave(kategorije_id, objave_id)
VALUES
(4, 1),
(5, 1),
(5, 2),
(5, 3);
