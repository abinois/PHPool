SELECT upper(fiche_personne.`nom`) AS `NOM`, fiche_personne.`prenom`, abonnement.`prix`
FROM `fiche_personne`
INNER JOIN `membre`
ON membre.`id_membre` = fiche_personne.`id_perso`
INNER JOIN `abonnement`
ON abonnement.`id_abo` = fiche_personne.`id_perso`
WHERE abonnement.`prix` > 42
ORDER BY fiche_personne.`nom`,fiche_personne.`prenom` ASC;
