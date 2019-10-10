SELECT COUNT(DISTINCT `id_film`) AS `films`
FROM `historique_membre`
WHERE DATE_FORMAT(`date`, "%Y-%m-%d") BETWEEN '2006-10-30' AND '2007-07-27'
OR DATE_FORMAT(`date`, "%Y-%m-%d") LIKE '%-12-24';

