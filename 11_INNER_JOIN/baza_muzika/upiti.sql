-- 1. zadatak

/* izlistati sve nazive kompozicije i imena kopmpzotora koji su ih komponovali */


SELECT kompozicije.naziv, kompozitori.ime, kompozitori.prezime
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id;

/* izlistati sve nazive kompozicija, nazive perioda kao i trajanje kompozicija */


SELECT kompozicije.naziv, periodi.naziv, kompozicije.trajanje
FROM kompozicije
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id;

/* izlistati sve nazive kompozicija, nazive perioda kao i trajanje kompozicija i poredjati ih od najduze ka najkracoj kompoziciji */

SELECT kompozicije.naziv, periodi.naziv, kompozicije.trajanje
FROM kompozicije
INNER JOIN periodi
ON periodi.id = kompozicije.periodi_id
ORDER BY kompozicije.trajanje DESC;

/* izlistati sve kompozicije i njihove kompozitore, tako da su kompozicije nastale izmedju 1700. i 1800. godine */

SELECT kompozicije.naziv,kompozicije.god, kompozitori.ime, kompozitori.prezime
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id
WHERE kompozicije.god > 1500;

-- http://prntscr.com/yq6n4l


/*5. Izlistati sve instrumente koji u svom opisu sadrze rec udaraljke ili duvacki */

SELECT *
FROM instrumenti
WHERE opis LIKE "duvački" OR opis LIKE "udaraljke";

-- drugi nacin
SELECT *
FROM instrumenti
WHERE opis IN("duvački","udaraljke");



/* 6. Izlistati sve instrumente koji u svom nazivu sadrze rec viol */

SELECT *
FROM instrumenti
WHERE naziv LIKE "%viol%";


/* 7. izlistati sve kompozicije koje pripadaju baroku ili romantizmu */

SELECT *
FROM periodi
INNER JOIN kompozicije
ON periodi.id = kompozicije.periodi_id
WHERE periodi.naziv LIKE "Barok" OR periodi.naziv LIKE "Romantizam";


/* 8. Izlistati sve nazive kompozicija koje pripadaju baroknom stilu */

SELECT kompozicije.naziv, periodi.naziv
FROM periodi
INNER JOIN kompozicije
ON periodi.id = kompozicije.periodi_id
WHERE periodi.naziv LIKE "Barok";

/* 9. Islistati sve kompozicije koje je komponovao Bethoven */

SELECT kompozicije.naziv, kompozitori.ime, kompozitori.prezime
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id
WHERE kompozitori.prezime LIKE "van Bethoven";

/* 10. Izlistati sve kompozitore koji su komponovali makar jednu od kompozicija iz tabele kompozicije*/

SELECT kompozitori.ime, kompozitori.prezime
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id;


/* 11. Prikazati najduzu kompoziciju, duzinu njenog trajanja, kompozitora koji ju je komponovao i period kome pripada */

SELECT kompozicije.naziv, MAX(kompozicije.trajanje), kompozitori.ime, kompozitori.prezime, periodi.naziv
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id;

-- drugi nacin

SELECT kompozicije.naziv, kompozicije.trajanje, kompozitori.ime, kompozitori.prezime, periodi.naziv
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
ORDER BY kompozicije.trajanje DESC
LIMIT 1;

/* 12. prikazati sve kompozitore cija su dela duza od 5 minuta i kraca od 25 minuta */
