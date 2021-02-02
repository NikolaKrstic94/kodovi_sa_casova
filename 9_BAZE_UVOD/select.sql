#iz tabele customers procitati sve kolone

SELECT * FROM customers;

-- Iz tabele customers, uzeti age i name;
SELECT name, age FROM customers;

-- iz tabele procitati plate

SELECT salary FROM customers;

-- upisati u tasks neki row

INSERT INTO tasks
VALUES(1,"pojesti hranu", "2021-02-01","2021-02-02",1, "Da se pojede sva kupljena hrana", 1);

INSERT INTO tasks
VALUES(2,"Ciscenje", "2021-01-20",NULL,0, "Usisivac u ruke", 0),(3, "Kupi hleb", "2021-02-02", "2021-02-02", 2, "Inace ces ostati gladan", 1);



-- procitati iz tasks

SELECT * FROM `tasks`;

--  procitati samo naziv, status i prioritet

SELECT `title`,status,priority FROM `tasks`;

-- SELECT 'name', `name`, `age` FROM `customers`

-- Dohvatiti sve razlicite godine korisnika

SELECT DISTINCT `age` FROM `customers`

-- Dodavanje novih korisnika tako da se ponavljaju vrednosti nekih kolona

INSERT INTO `customers`(`id`, `name`, `age`,`address`, `salary`, `active`, `state`, `number_of_visits`)
VALUES (9, "Nikola", 23, "Narodnih heroja 25a", 500.50, 1, "Serbia", 3);

INSERT INTO `customers`(`id`, `name`, `age`,`address`, `salary`, `active`, `state`, `number_of_visits`)
VALUES (10, "Goran", 34, "Bubanjskih heroja 25a", 600, 0, "Serbia", 15);

-- Dohvatiti sva razlicita imena korisnika
SELECT DISTINCT `name`,`age` FROM `customers`;


