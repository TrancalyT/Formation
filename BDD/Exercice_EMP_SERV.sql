-- CREATION TABLE ET CLES

CREATE TABLE EMP2
(
    NOEMP INT(4) PRIMARY KEY NOT NULL,
    NOM VARCHAR(20),
    PRENOM VARCHAR(20),
    EMPLOI VARCHAR(20),
    SUP INT(4),
    EMBAUCHE DATE,
    SAL FLOAT(9,2),
    COMM FLOAT(9,2),
    NOSERV INT(2) NOT NULL
);

CREATE TABLE SERV2
(
    NOSERV INT(2) PRIMARY KEY NOT NULL,
    SERVICE VARCHAR(20),
    VILLE VARCHAR(20)
);

ALTER TABLE EMP2
    ADD CONSTRAINT FOREIGN KEY (NOSERV) REFERENCES SERV2 (NOSERV);

ALTER TABLE EMP2
    ADD CONSTRAINT FOREIGN KEY (SUP) REFERENCES EMP2 (NOEMP);


-- INSERTION DONNEE 

INSERT INTO EMP2 (NOEMP, NOM, PRENOM, EMPLOI, SUP, EMBAUCHE, SAL, COMM, NOSERV)
    VALUES
    (1000, "LEROY", "PAUL", "PRESIDENT", null, "1987-10-25", 55005.5, null, 1),
    (1100, "DELPIERRE", "DOROTHEE", "SECRETAIRE", 1000, "1987-10-25", 12351.2, null, 1),
    (1200, "LEMAIRE", "GUY", "DIRECTEUR", 1000, "1987-03-11", 36303.6, null, 2),
    (1300, "LENOIR", "GERARD", "DIRECTEUR", 1000, "1987-04-02", 31353.1, 13071, 3),
    (1500, "DUPONT", "JEAN", "DIRECTEUR", 1000, "1987-10-23", 28434.8, null, 5),
    (1600, "LAVARE", "PAUL", "DIRECTEUR", 1000, "1991-12-13", 31238.1, null, 6),
    (1101, "DUMONT", "LOUIS", "VENDEUR", 1300, "1987-10-25", 9047.9, 0, 1),
    (1102, "MINET", "MARC", "VENDEUR", 1300, "1987-10-25", 8085.81, 17230, 1),
    (1104, "NYS", "ETIENNE", "TECHNICIEN", 1200, "1987-10-25", 12342.2, null, 1),
    (1105, "DENIMAL", "JEROME", "COMPTABLE", 1600, "1987-10-25", 15746.6, null, 1),
    (1201, "MARTIN", "JEAN", "TECHNICIEN", 1200, "1987-06-25", 11235.1, null, 2),
    (1202, "DUPONT", "JACQUES", "TECHNICIEN", 1200, "1988-10-30", 10313, null, 2),
    (1301, "GERARD", "ROBERT", "VENDEUR", 1300, "1999-04-16", 7694.77, 12430, 3),
    (1303, "MASURE", "EMILIE", "TECHNICIEN", 1200, "1988-06-17", 10451.1, null, 3),
    (1501, "DUPIRE", "PIERRE", "ANALYSTE", 1500, "1984-10-24", 23102.3, null, 5),
    (1502, "DURAND", "BERNARD", "PROGRAMMEUR", 1500, "1987-07-30", 13201.3, null, 5),
    (1503, "DELNATTE", "LUC", "PUPITREUR", 1500, "1999-01-15", 8801.01, null, 5),
    (1601, "CARON", "ALAIN", "COMPTABLE", 1600, "1985-09-16", 33003.3, null, 6),
    (1602, "DUBOIS", "JULES", "VENDEUR", 1300, "1990-12-20", 9520.95, 35535, 6),
    (1603, "MOREL", "ROBERT", "COMPTABLE", 1600, "1985-07-18", 33003.3, null, 6),
    (1604, "HAVET", "ALAIN", "VENDEUR", 1300, "1991-01-01", 9388.94, 33415, 6),
    (1605, "RICHARD", "JULES", "COMPTABLE", 1600, "1985-10-22", 33503.4, null, 5),
    (1615, "DUPREZ", "JEAN", "BALAYEUR", 1000, "1998-10-22", 6000.6, null, 5);

INSERT INTO SERV2 (NOSERV, SERVICE, VILLE)
    VALUES
    (1, "DIRECTION", "PARIS"),
    (2, "LOGISTIQUE", "SECLIN"),
    (3, "VENTES", "ROUBAIX"),
    (4, "FORMATION", "VILLENEUVE D'ASCQ"),
    (5, "INFORMATIQUE", "LILLE"),
    (6, "COMPTABILITE", "LILLE"),
    (7, "TECHNIQUE", "ROUBAIX");

-- EXO

-- 1
SELECT * FROM Services;
-- 2
SELECT NOSERV, SERVICE, VILLE FROM Services; 
-- 3
SELECT NOSERV, SERVICE FROM Services;
-- 4
SELECT * FROM Employes;
-- 5
SELECT EMPLOI FROM Employes;
-- 6
SELECT DISTINCT EMPLOI FROM Employes ORDER BY EMPLOI asc;
-- 7
SELECT * FROM Employes WHERE NOSERV = 3;
-- 8
SELECT NOM, PRENOM, NOEMP, NOSERV FROM Employes WHERE EMPLOI = "TECHNICIEN";
-- 9
SELECT NOM, NOSERV FROM Employes WHERE NOSERV > 2;
-- 10
SELECT NOM, NOSERV FROM Employes WHERE NOSERV <= 2;
-- 11
SELECT * FROM Employes WHERE COMM > SAL;
-- 12
SELECT * FROM Employes WHERE COMM IS NULL;
-- 13
SELECT * FROM Employes WHERE COMM IS NOT NULL ORDER BY COMM;
-- 14
SELECT * FROM Employes WHERE SUP IS NOT NULL;
-- 15
SELECT * FROM Employes WHERE SUP IS NULL;
-- 16
SELECT NOM, EMPLOI, SAL, NOSERV FROM Employes WHERE NOSERV = 5 AND SAL > 20000;
-- 17
SELECT * FROM Employes WHERE NOSERV = 6 AND EMPLOI = "VENDEUR" AND SAL >= 9500;
-- 18
SELECT * FROM Employes WHERE EMPLOI = "PRESIDENT" OR EMPLOI = "DIRECTEUR";
-- 19
SELECT * FROM Employes WHERE EMPLOI = "DIRECTEUR" AND NOSERV != 3;
-- 20
SELECT * FROM Employes WHERE EMPLOI = "DIRECTEUR" OR (EMPLOI = "TECHNICIEN" AND NOSERV = 1);
-- 21
SELECT * FROM Employes WHERE (EMPLOI = "DIRECTEUR" OR EMPLOI = "TECHNICIEN") AND NOSERV = 1;
-- 22
SELECT * FROM Employes WHERE NOSERV = 1 AND (EMPLOI = "DIRECTEUR" OR EMPLOI = "TECHNICIEN");
-- 23
SELECT * FROM Employes WHERE NOSERV = 1 AND (EMPLOI != "DIRECTEUR" AND EMPLOI != "TECHNICIEN");
-- 24
SELECT * FROM Employes WHERE EMPLOI IN ("TECHNICIEN", "COMPTABLE", "VENDEUR");
-- 25
SELECT * FROM Employes WHERE EMPLOI NOT IN ("TECHNICIEN", "COMPTABLE", "VENDEUR");
-- 26
SELECT * FROM Employes WHERE EMPLOI IN ("DIRECTEUR") AND NOSERV IN (2, 4, 5);
-- 27
SELECT * FROM Employes WHERE EMPLOI NOT IN ("DIRECTEUR", "PRESIDENT") AND NOSERV NOT IN (1, 3, 5);
-- 28
SELECT * FROM Employes WHERE SAL BETWEEN 20000 AND 40000;
-- 29
SELECT * FROM Employes WHERE SAL BETWEEN 0 AND 20000 OR SAL > 40000;
-- 30
SELECT * FROM Employes WHERE EMPLOI NOT IN ("DIRECTEUR") AND EMBAUCHE LIKE "1988%";
-- 31
SELECT * FROM Employes WHERE EMPLOI = "DIRECTEUR" AND NOSERV BETWEEN 2 AND 5;
-- 32
SELECT * FROM Employes WHERE NOM LIKE "M%";
-- 33
SELECT * FROM Employes WHERE NOM LIKE "%T";
-- 34
SELECT * FROM Employes WHERE NOM LIKE "%E%E%";
-- 35
SELECT * FROM Employes WHERE NOM LIKE "%E%" AND NOM NOT LIKE "%E%E%";
-- 36
SELECT * FROM Employes WHERE NOM LIKE "%N%" AND NOM LIKE "%O%";
-- 37
SELECT * FROM Employes WHERE NOM LIKE "_____N";
-- 38
SELECT * FROM Employes WHERE NOM LIKE "__R%";
-- 39
SELECT * FROM Employes WHERE NOM NOT LIKE "_____";
-- 40
SELECT NOM, PRENOM, NOSERV, SAL FROM Employes WHERE NOSERV = 3 ORDER BY SAL;
-- 41
SELECT NOM, PRENOM, NOSERV, SAL FROM Employes WHERE NOSERV = 3 ORDER BY SAL desc;
-- 42
SELECT NOM, PRENOM, NOSERV, SAL FROM Employes WHERE NOSERV = 3 ORDER BY 4 desc;
-- 43
SELECT NOM, PRENOM, NOSERV, SAL, EMPLOI FROM Employes ORDER BY EMPLOI asc, SAL desc;
-- 44
SELECT NOM, PRENOM, NOSERV, SAL, EMPLOI FROM Employes ORDER BY 5 asc, 4 desc;
-- 45
SELECT NOM, PRENOM, NOSERV, COMM FROM Employes WHERE NOSERV = 3 ORDER BY COMM;
-- 46
SELECT NOM, PRENOM, NOSERV, COMM FROM Employes WHERE NOSERV = 3 AND IFNULL (COMM, 0) ORDER BY COMM desc;
SELECT NOM, PRENOM, NOSERV, IFNULL(COMM,0) FROM Employes WHERE NOSERV = 3 ORDER BY COMM desc;
-- 47
SELECT NOM, PRENOM, EMPLOI, SERVICE FROM Employes INNER JOIN Services ON Employes.NOSERV = Services.NOSERV;
-- 48
SELECT NOM, EMPLOI, Employes.NOSERV, SERVICE FROM Employes INNER JOIN Services ON Employes.NOSERV = Services.NOSERV;
-- 49
SELECT NOM, EMPLOI, E.NOSERV, SERVICE FROM Employes AS E INNER JOIN Services AS S ON E.NOSERV = S.NOSERV;
-- 50
SELECT NOM, EMPLOI, S.* FROM Employes AS E INNER JOIN Services AS S ON E.NOSERV = S.NOSERV;
-- 51
SELECT E1.NOM, E1.EMBAUCHE, E2.NOM, E2.EMBAUCHE FROM Employes AS E1 LEFT JOIN Employes AS E2 ON E1.SUP = E2.NOEMP WHERE E1.EMBAUCHE < E2.EMBAUCHE AND E1.SUP IS NOT NULL ORDER BY E1.NOM, E2.NOM;
-- 52
SELECT PRENOM, EMPLOI FROM Employes WHERE EMPLOI ="DIRECTEUR"
UNION
SELECT PRENOM, EMPLOI FROM Employes WHERE EMPLOI ="TECHNICIEN" AND NOSERV = 1;
-- 53
SELECT NOSERV FROM Services
MINUS
SELECT NOSERV FROM Employes;

SELECT Services.* FROM Services
WHERE NOSERV NOT IN (SELECT DISTINCT NOSERV FROM Employes);
-- 54
SELECT NOSERV FROM Services
INTERSECT
SELECT NOSERV FROM Employes;
-- 55
SELECT NOM, PRENOM, EMPLOI FROM Employes
WHERE NOSERV IN (SELECT DISTINCT NOSERV FROM Services WHERE VILLE = "LILLE");
-- 56
SELECT NOM, PRENOM, EMPLOI, SUP FROM Employes
WHERE SUP IN (SELECT DISTINCT SUP FROM Employes WHERE NOM = "DUBOIS") AND NOM != "DUBOIS";
-- 57
SELECT NOM, PRENOM, EMPLOI, EMBAUCHE FROM Employes
WHERE EMBAUCHE IN (SELECT DISTINCT EMBAUCHE FROM Employes WHERE NOM = "DUMONT");
-- 58
SELECT NOM, EMBAUCHE FROM Employes
WHERE EMBAUCHE < (SELECT DISTINCT EMBAUCHE FROM Employes WHERE NOM = "MINET") ORDER BY EMBAUCHE;
-- 59
SELECT NOM, PRENOM, EMBAUCHE, NOSERV FROM Employes 
WHERE EMBAUCHE < (SELECT MIN(EMBAUCHE) FROM Employes WHERE NOSERV = 6);
-- 60
SELECT NOM, PRENOM, (SAL + IFNULL(COMM, 0)) as REVENU FROM Employes 
WHERE (SAL + IFNULL(COMM, 0)) > (SELECT MIN(SAL + IFNULL(COMM, 0)) 
								 FROM Employes 
								 WHERE NOSERV = 3)
ORDER BY 3;
-- 61
SELECT NOM, E.NOSERV, EMPLOI, SAL 
FROM Employes AS E INNER JOIN Services AS S ON E.NOSERV = S.NOSERV
WHERE S.VILLE = (SELECT VILLE 
				 FROM Employes AS E INNER JOIN Services AS S ON E.NOSERV = S.NOSERV 
                 WHERE NOM = "HAVET");
-- 62
SELECT * FROM Employes 
WHERE NOSERV = 1
AND EMPLOI IN (SELECT DISTINCT EMPLOI FROM Employes WHERE NOSERV = 3);
-- 63
SELECT * FROM Employes 
WHERE NOSERV = 1
AND EMPLOI NOT IN (SELECT DISTINCT EMPLOI FROM Employes WHERE NOSERV = 3);
-- 64
SELECT NOM, PRENOM, EMPLOI, SAL FROM Employes
WHERE EMPLOI = (SELECT EMPLOI FROM Employes WHERE NOM = "CARON")
AND SAL > (SELECT SAL FROM Employes WHERE NOM = "CARON");
-- 65
SELECT * FROM Employes
WHERE NOSERV = 1
AND EMPLOI IN (SELECT DISTINCT EMPLOI 
			    FROM Employes INNER JOIN Services 
				ON Employes.NOSERV = Services.NOSERV 
				WHERE Services.SERVICE = "VENTES");
-- 66
SELECT NOM, PRENOM, EMPLOI, Services.VILLE 
FROM Employes INNER JOIN Services ON Employes.NOSERV = Services.NOSERV
WHERE Services.VILLE = "LILLE"
AND EMPLOI = (SELECT EMPLOI FROM Employes WHERE NOM = "RICHARD")
ORDER BY NOM;
-- 67
SELECT PRENOM, NOM, SAL, NOSERV FROM Employes AS E1
WHERE SAL > (SELECT AVG(SAL) FROM Employes AS E2 WHERE E1.NOSERV = E2.NOSERV)
ORDER BY NOSERV;
-- 68
SELECT NOM, PRENOM, Employes.NOSERV, EMBAUCHE 
FROM Employes INNER JOIN Services ON Employes.NOSERV = Services.NOSERV
WHERE SERVICE = "INFORMATIQUE" 
AND DATE_FORMAT(EMBAUCHE, "%Y") IN (
	SELECT DISTINCT DATE_FORMAT(EMBAUCHE, "%Y") AS ANNEE 
	FROM Employes INNER JOIN Services ON Employes.NOSERV = Services.NOSERV 
    WHERE SERVICE = "VENTES");
-- 69
SELECT NOM, PRENOM, EMPLOI, VILLE
FROM Employes AS E1 INNER JOIN Services ON E1.NOSERV = Services.NOSERV 
WHERE E1.NOSERV <> (SELECT NOSERV FROM Employes AS E2 WHERE E2.NOEMP = E1.SUP);
-- 70
SELECT NOEMP, NOM, PRENOM, SERVICE, (SAL + IFNULL(COMM, 0)) AS REVENU
FROM Employes INNER JOIN Services ON Employes.NOSERV = Services.NOSERV 
WHERE NOEMP IN (SELECT DISTINCT SUP FROM Employes)
ORDER BY 5 DESC;
-- 71
SELECT NOM, EMPLOI, ROUND((SAL + IFNULL(COMM, 0)), 2) AS REVENU FROM Employes ORDER BY 3 DESC;
-- 72
SELECT NOM, SAL, COMM FROM Employes WHERE COMM > SAL + SAL;
-- 73
SELECT NOM, PRENOM, EMPLOI, ROUND((COMM * 100 / (SAL + IFNULL(COMM, 0))), 2) AS "% COMMISION" FROM Employes WHERE EMPLOI = "VENDEUR" ORDER BY 4 DESC;
-- 74
SELECT NOM, PRENOM, EMPLOI, Services.SERVICE, ROUND((SAL + IFNULL(COMM, 0)) * 12) AS REVENU_ANNUEL 
FROM Employes INNER JOIN Services ON Employes.NOSERV = Services.NOSERV WHERE EMPLOI = "VENDEUR";
-- 75
SELECT NOM, PRENOM, EMPLOI, SAL, COMM, (SAL + IFNULL(COMM, 0)) AS REVENU FROM Employes WHERE NOSERV IN (3, 5, 6);
-- 76
SELECT NOM, PRENOM, EMPLOI, SAL AS SALAIRE, COMM AS COMMISSIONS, (SAL + IFNULL(COMM, 0)) AS GAIN_MENSUEL FROM Employes WHERE NOSERV IN (3, 5, 6);
-- 77
SELECT NOM, PRENOM, EMPLOI, SAL AS SALAIRE, COMM AS COMMISSIONS, (SAL + IFNULL(COMM, 0)) AS "GAIN MENSUEL" FROM Employes WHERE NOSERV IN (3, 5, 6);
-- 78
SELECT NOM, PRENOM, EMPLOI,
SAL / 22 AS "SALAIRE JOURNALIER Sans Arrondi",
ROUND ((SAL / 22), 2) AS "SALAIRE JOURNALIER Avec Arrondi",
SAL / 22 / 8 AS "SALAIRE HORAIRE Sans Arrondi",
ROUND ((SAL / 22 / 8), 2) AS "SALAIRE HORAIRE Avec Arrondi"
FROM Employes WHERE NOSERV IN (3, 5, 6);
-- 79
SELECT NOM, PRENOM, EMPLOI,
SAL / 22 AS "SALAIRE JOURNALIER Sans Trunc",
TRUNCATE ((SAL / 22), 2) AS "SALAIRE JOURNALIER Avec Trunc",
SAL / 22 / 8 AS "SALAIRE HORAIRE Sans Trunc",
TRUNCATE ((SAL / 22 / 8), 2) AS "SALAIRE HORAIRE Avec Trunc"
FROM Employes WHERE NOSERV IN (3, 5, 6);
-- 80
SELECT SERVICE, VILLE, CONCAT(RPAD(SERVICE, (SELECT MAX(LENGTH(SERVICE)) FROM Services), "-"), "---> ", VILLE) AS "SERVICE---> VILLE" FROM Services;
-- 81
SELECT NOM, EMPLOI, (CASE EMPLOI
                    WHEN "PRESIDENT" THEN 1
                    WHEN "DIRECTEUR" THEN 2
                    WHEN "COMPTABLE" THEN 3
                    WHEN "VENDEUR" THEN 4
                    WHEN "TECHNICIEN" THEN 5
                    ELSE 0
                    END
                    ) AS "CODE EMPLOI" 
FROM Employes
ORDER BY 3;
-- 82
SELECT PRENOM, EMPLOI, NOSERV, (CASE NOSERV
                               WHEN 1 THEN "*****"
                               ELSE NOM
                               END
                                ) AS "NOM"
FROM Employes;
-- 83
SELECT SUBSTR(SERVICE, 1, 5) AS SERVICE FROM Services;
-- 84
SELECT * FROM Employes WHERE DATE_FORMAT(EMBAUCHE, "%Y") = "1988";
-- 85
SELECT  UPPER(NOM) AS "MAJ", 
        CONCAT(UPPER(LEFT(NOM,1)), LOWER(RIGHT(NOM, (LENGTH(NOM) -1)))) AS "CAP", 
        LOWER(NOM) AS "MIN"
FROM Employes;
-- 86
SELECT NOM, LOCATE("M", NOM) AS "POSITION M", LOCATE("E", NOM) AS "POSITION E"  FROM Employes;
-- 87
SELECT SERVICE, LENGTH(SERVICE) AS "TAILLE CH SERV" FROM Services;
-- 88
SELECT NOM, EMPLOI, SAL, RPAD("", SAL/2000, "#") AS "BARRE PROG SALAIRE"
FROM Employes
ORDER BY 4 desc;
-- 89
SELECT NOM, EMPLOI, EMBAUCHE FROM Employes WHERE NOSERV = 6;
-- 90
SELECT NOM, EMPLOI, DATE_FORMAT(EMBAUCHE,'%d-%m-%y') AS EMBAUCHE FROM Employes WHERE NOSERV = 6;
-- 91
SELECT NOM, EMPLOI, DATE_FORMAT(EMBAUCHE,'%W %d %M %Y') AS EMBAUCHE FROM Employes WHERE NOSERV = 6;
-- 92
SELECT NOM, EMPLOI, DATE_FORMAT(EMBAUCHE,'%a %d %b %y') AS EMBAUCHE FROM Employes WHERE NOSERV = 6;
-- 93
SELECT NOM, EMPLOI, DATE_FORMAT(EMBAUCHE,'%y %b %d') AS EMBAUCHE FROM Employes WHERE NOSERV = 6;
-- 94
SELECT NOM, EMPLOI, DATE_FORMAT(EMBAUCHE,'%W-%d-%M-%Y') AS EMBAUCHE FROM Employes WHERE NOSERV = 6;
-- 95
SELECT *, DATEDIFF(SYSDATE(),EMBAUCHE) AS "JOURS D'ANCIENNETE" FROM Employes ORDER BY 10 DESC;
-- 96
SELECT *, TIMESTAMPDIFF(MONTH,EMBAUCHE,SYSDATE()) AS "MOIS D'ANCIENNETE" FROM Employes ORDER BY 10 DESC;
-- 97
SELECT NOM, EMPLOI, CONCAT(DATE_FORMAT(EMBAUCHE, "%d-%m-"), DATE_FORMAT(EMBAUCHE, "%Y") + 12) AS "ANNEE +12" FROM Employes;
-- 98
SELECT NOM, EMPLOI, EMBAUCHE FROM Employes WHERE TIMESTAMPDIFF(YEAR,EMBAUCHE,SYSDATE()) > 23;
-- 99
SELECT DATEDIFF(SYSDATE(), "1990-12-17") AS "ANNIVERSAIRE EN JOURS";
SELECT TIMESTAMPDIFF(DAY,"1990-12-17",SYSDATE()) AS "ANNIVERSAIRE EN JOURS";
-- 100
SELECT TIMESTAMPDIFF(MONTH,"1990-12-17",SYSDATE()) AS "ANNIVERSAIRE EN MOIS";
-- 101
SELECT AVG(SAL + IFNULL(COMM, 0)) AS "MOYENNE REVENUS DES VENDEURS" FROM Employes WHERE EMPLOI = "VENDEUR";
-- 102
SELECT EMPLOI, AVG(SAL + IFNULL(COMM, 0)) AS "MOYENNE REVENUS" FROM Employes GROUP BY EMPLOI;
-- 103
SELECT SUM(SAL) AS "SOMMES DES SALAIRES DES VENDEURS", SUM(COMM) AS "SOMMES DES COMMISSIONS DES VENDEURS" FROM Employes WHERE EMPLOI = "VENDEUR";
-- 104
SELECT MAX(SAL) AS "PLUS HAUT SALAIRE", MIN(SAL) AS "PLUS BAS SALAIRE", MAX(SAL) - MIN(SAL) AS "DIFFERENCE ENTRE LE PLUS HAUT ET LE PLUS BAS" FROM Employes;
-- 105
SELECT DATE_FORMAT(EMBAUCHE,"%Y") AS "ANNEE D'EMBAUCHE", COUNT(*) AS "NOMBRE D'EMBAUCHES" FROM Employes GROUP BY DATE_FORMAT(EMBAUCHE, "%Y");
-- 106
SELECT SERVICE, LENGTH(SERVICE) AS "NBRS DE LETTRES" FROM Services
WHERE LENGTH(SERVICE) = (SELECT MIN(LENGTH(SERVICE)) FROM Services);
-- 107
SELECT * FROM Employes WHERE SAL + IFNULL(COMM,0) = (SELECT MAX(SAL + IFNULL(COMM,0)) FROM Employes);
-- 108
SELECT COUNT(*) AS "NBR COMM EMP SERV 3" FROM Employes WHERE IFNULL(COMM,0) != 0 AND NOSERV = 3;
-- 109
SELECT COUNT(DISTINCT EMPLOI) AS "NBR EMP DIFFERENT DU SERV 1" FROM Employes WHERE NOSERV = 1;
-- 110
SELECT COUNT(*) AS "NBR EMPLOYES DU SERV 3" FROM Employes WHERE NOSERV = 3;
-- 111
SELECT NOSERV, ROUND(AVG(SAL + IFNULL(COMM,0))) AS "SALAIRE MOYEN" FROM Employes GROUP BY NOSERV;
-- 112
SELECT NOSERV, AVG((SAL + IFNULL(COMM,0)) * 12) AS "SALAIRE ANNUEL MOYEN" FROM Employes WHERE EMPLOI NOT IN ("PRESIDENT", "DIRECTEUR") GROUP BY NOSERV;
-- 113
SELECT NOSERV, EMPLOI, COUNT(*) AS "EFFECTIF", AVG(SAL) AS "SALAIRE MOYEN" FROM Employes GROUP BY NOSERV, EMPLOI;
-- 114
SELECT SERVICE, EMPLOI, COUNT(*) AS "EFFECTIF", AVG(SAL) AS "SALAIRE MOYEN" FROM Employes 
INNER JOIN Services ON Employes.NOSERV = Services.NOSERV GROUP BY SERVICE, EMPLOI ORDER BY Employes.NOSERV;
-- 115
SELECT EMPLOI, COUNT(*) AS "EFFECTIF", AVG(SAL) AS "SALAIRE MOYEN" FROM Employes 
GROUP BY EMPLOI HAVING COUNT(*) >= 2;
-- 116
SELECT EMPLOI, Services.* FROM Employes INNER JOIN Services ON Employes.NOSERV = Services.NOSERV WHERE EMPLOI IN ("VENDEUR") GROUP BY NOSERV HAVING COUNT(*) >= 2;
-- 117
SELECT Services.*, ROUND(AVG(IFNULL(COMM,0)),2) AS "MOYENNE COMM", ROUND(AVG(SAL) / 4, 2) AS "MOYENNE SAL DIV PAR 4" FROM Employes 
INNER JOIN Services ON Employes.NOSERV = Services.NOSERV GROUP BY Employes.NOSERV HAVING AVG(IFNULL(COMM,0)) > AVG(SAL) / 4;
-- 118
SELECT EMPLOI AS "EMP SUP AU SALAIRE MOYEN DES DIRECTEURS", ROUND(AVG(SAL), 2) AS "SALAIRE MOYEN" 
FROM Employes GROUP BY EMPLOI HAVING AVG(SAL) > (SELECT AVG(SAL) FROM Employes WHERE EMPLOI ="DIRECTEUR");
-- 119
SELECT NOSERV, COUNT(COMM) as "ONT UNE COMM", COUNT(*) - COUNT(COMM) AS "PAS DE COMM" FROM Employes GROUP BY NOSERV;
-- 120
SELECT EMPLOI, COUNT(*), AVG(SAL) AS "AVG SAL", SUM(SAL) AS "TOTAL SAL", AVG(IFNULL(COMM, 0)) AS "AVG COMM", SUM(IFNULL(COMM, 0)) AS "TOTAL COMM" FROM Employes GROUP BY EMPLOI;


-- USER TOODLE
-- CREATION TABLE ET INSERTION EN AVEC EMP2 et SERV2

-- 121
START TRANSACTION;
SET AUTOCOMMIT = 0;
UPDATE EMP2 SET SAL = SAL + ((SAL * 10) /100) WHERE SAL < (SELECT AVG(SAL) FROM EMP2);
COMMIT;
-- 122
SET AUTOCOMMIT = 0;
SELECT @NewNumber := MAX(NOEMP)+1 FROM EMP2;
INSERT INTO EMP2 (NOEMP, NOM, PRENOM, EMPLOI, SUP, EMBAUCHE, SAL, COMM, NOSERV) 
    VALUES 
    (@NewNumber, 'REINA', 'ANTHONY', 'FUNAMBULE', NULL, '2021-04-08', 8000, NULL, 7);
COMMIT;
-- 123
SET AUTOCOMMIT = 0;
DELETE FROM EMP2 WHERE EMPLOI = 'SECRETAIRE';
COMMIT;
-- 124
SET AUTOCOMMIT = 0;
SELECT @SalMoy := AVG(SAL) from EMP2;
INSERT INTO EMP2 (NOEMP, NOM, PRENOM, EMPLOI, SUP, EMBAUCHE, SAL, COMM, NOSERV)
    VALUES 
    (1010,'MOYEN','TOTO','DEVELOPPEUR',1000,'1999-12-12', @salMoy,NULL,1);
COMMIT;
-- 125
SET AUTOCOMMIT = 0;
DELETE FROM EMP2 WHERE NOM LIKE '%A%';
    -- Impossible de SUPPR à cause des clés étrangères
SELECT * FROM EMP2;
ROLLBACK;
SELECT * FROM EMP2;
-- 126
SET AUTOCOMMIT = 0;
CREATE TABLE PROJET
(
    NOPROJ INT(3) PRIMARY KEY NOT NULL,
    NOMPROJ VARCHAR(10),
    BUDGET FLOAT(8,2)
);

SHOW TABLES;
DESCRIBE PROJET;

RENAME TABLE PROJET TO PROJ;
COMMIT;
-- 127
SET AUTOCOMMIT = 0;
INSERT INTO PROJ (NOPROJ, NOMPROJ, BUDGET)
    VALUES
    (101,"ALPHA", 250000),
    (102,"BETA",175000),
    (103,"GAMMA",950000);

SELECT * FROM PROJ;
COMMIT;
-- 128
SET AUTOCOMMIT = 0;
UPDATE PROJ SET BUDGET = 1500000 WHERE NOPROJ = 103;

ALTER TABLE PROJ MODIFY BUDGET FLOAT(12,2);

UPDATE PROJ SET BUDGET = 1500000 WHERE NOPROJ = 103;
COMMIT;
-- 129
SET AUTOCOMMIT = 0;
ALTER TABLE EMP2 ADD NOPROJ INT(3);
COMMIT;
-- 130
SET AUTOCOMMIT = 0;
UPDATE EMP2 SET NOPROJ = 102 WHERE NOEMP > 1350;
COMMIT;
-- 131
SET AUTOCOMMIT = 0;
UPDATE EMP2 SET NOPROJ = 103 WHERE NOPROJ IS NULL;
COMMIT;
-- 132
SET AUTOCOMMIT = 0;
ALTER TABLE EMP2
    ADD CONSTRAINT FOREIGN KEY (NOPROJ) REFERENCES PROJ(NOPROJ);
SELECT NOM, NOMPROJ, SERVICE FROM EMP2 INNER JOIN PROJ ON EMP2.NOPROJ = PROJ.NOPROJ
                                       INNER JOIN SERV2 ON EMP2.NOSERV = SERV2.NOSERV;
COMMIT;