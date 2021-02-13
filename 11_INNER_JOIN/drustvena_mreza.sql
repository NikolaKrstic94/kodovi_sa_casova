SELECT objave.naslov_objave, komentari.tekst_komentara
FROM objave
INNER JOIN komentari
ON objave.id=komentari.objave_id;


-- prikazati korisnicka imena i njihove tabele

SELECT korisnici.korisnicko_ime, profili.adresa
FROM korisnici
INNER JOIN profili
ON korisnici.id=profili.korisnik_id;


--  prikazati sve naslove objava, kategorije kojima pripadaju i komentare


SELECT objave.naslov_objave, kategorije.naziv, komentari.tekst_komentara
FROM kategorije
INNER JOIN kategorije_has_objave
ON kategorije.id = kategorije_has_objave.kategorije_id AS "NAZIVSPORTA"
INNER JOIN objave
ON kategorije_has_objave.objave_id = objave.id
INNER JOIN komentari
ON objave.id = komentari.objave_id;
