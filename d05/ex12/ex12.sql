SELECT `nom`, `prenom`
FROM `fiche_persnne`
WHERE `nom` LIKE '% %' OR `nom` LIKE '%-%' OR `prenom` LIKE '% %' OR `prenom` LIKE '%-%'
ORDER BY `nom`, `prenom` ASC;
