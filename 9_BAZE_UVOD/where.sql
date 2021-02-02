

-- procitaj sve gde je `state` SRBIJA
SELECT * FROM `customers` WHERE `state` = "Srbija"

--  procitati sve klijente kojima je ime "Nikola"
SELECT *
FROM `customers`
WHERE `name` = "Nikola";


-- procitaj sve klijente kojima je placa manja od 500
SELECT * FROM `customers` WHERE `salary`<= 500


-- procitati sve korisnike cija je plata izmedju 300 i 800
SELECT * FROM `customers`
WHERE `salary` BETWEEN 430 AND 800;


SELECT `id`, `name`
FROM `customers`
WHERE `name` IN ("Ana","Milan","Nikola");

-- Iz tabele `tasks`, procitate sve sve kolone:

SELECT * FROM `tasks`;

--  samo naziv, ``status`` i prioritet

SELECT `title`, `status`, `priority` FROM `tasks`;

-- Ciji je ``status`` aktivan

SELECT * FROM `tasks`
WHERE `status` = 1;

-- ciji je prioritet nizak

SELECT * FROM `tasks`
WHERE `priority` = 0;

-- iz tabele `tasks`, procitati sve zadatke
-- ciji `ID` pripada skupu {1,4,8,12}
SELECT * FROM `tasks`
WHERE `task_id` IN (1,3);

-- ciji je pocetak veci od 2019-01-01

SELECT * FROM `tasks`
WHERE `start_date` > "2021-01-20";

-- ciji je ``status`` razlicit od negativan
SELECT * FROM `tasks`
WHERE ;

-- procitaj `id` imena i drzave iz tabele `customers` gde ime pocinje na slovo B
SELECT `id`, `name`, `state`
FROM `customers`
WHERE `name` LIKE "B%";

-- gde adresa pocinje na B
SELECT `id`, `name`, address
FROM `customers`
WHERE address LIKE "B%";

-- adresa sadrzi slobo B
SELECT `id`, `name`, address
FROM `customers`
WHERE address LIKE "%B%";

-- da se poslednje slovo adrese zavrsava na B
SELECT `id`, `name`, address
FROM `customers`
WHERE address LIKE "%B";

-- prikazi sve `customers` sa manjem `id` od 6 ali ogranici na 3
SELECT * FROM `customers`
WHERE `id` < 6
LIMIT 3;

-- prikazi sve kupce koji se zovu milan i koji imaju preko 25 godina i platu preko 300
SELECT *
FROM `customers`
WHERE `name` = "Milan" AND `age` > 25 AND `salary` > 300;


-- prikazi sve kupce koji nisu aktivni

SELECT * FROM `customers`
WHERE `state` = "Srbija" AND NOT active=1;


/* Iz tabele `customers`, pročitati sve klijente:
– Koji su iz Srbije a plata je 600, */

SELECT * FROM `customers`
WHERE `state` = "Srbija" AND `salary` > 600;

-- Čije ime počinje na S ili imaju manje od 30god.

SELECT * FROM `customers`
WHERE `name` LIKE "S%" OR `age` < 30;

/* Iz tabele `tasks`, pročitati sve zadatke:
– Čiji je ``status`` različit od aktivan i prioritet visok, */

SELECT * FROM `tasks`
WHERE `status` != 1 AND `priority` = 1;

-- Čiji datum nije veći od 2019-01-01.

SELECT * FROM `tasks`
WHERE NOT `start_date` < "2019-01-01";


-- ORDER BY (na kraju se doda ASC ili DESC za rastuci ili opadajuci)

SELECT `name`, `age`, `state` FROM `customers`
ORDER BY `age` DESC;


/* Napraviti bazu podataka v`id`eoteka.
● U bazi v`id`eoteka, napraviti tabelu filmovi koja sadrži
naredne kolone:
– `id` – Ceo broj i primarni ključ.
– naslov – Tekstualni podatak dužine do 255 karaktera različit od NULL.
– reziser – Tekstualni podatak dužine do 255 karaktera različit od NULL.
– god_izdavanja – YEAR različit od NULL.
– zanr– Tekstualni podatak dužine do 255 karaktera različit od NULL.
– ocena –Decimalni broj */


-- prikazi `id` ime i broj kupovina onog kupca koji je imao najvise kupovina

SELECT `id`, `name`, number_of_visits
FROM `customers`
ORDER BY number_of_visits desc
LIMIT 1;


-- MIN AND MAX

SELECT MAX(age) AS "Najmanji broj godina"
FROM customers;
