SELECT COUNT(`id_abo`) AS `nb_abo`, FLOOR(SUM(`prix`) / COUNT(`prix`)) AS `moy_abo`, (SUM(`duree_abo`) % 42) AS `ft`
FROM `abonnement`
