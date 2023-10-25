DROP TABLE IF EXISTS `covoiturage__etape`;

CREATE TABLE `covoiturage__etape` (
  `id_etape` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ordre_etape` int(11) NOT NULL,
  `date_passage` datetime NOT NULL,
  `id_trajet` bigint(20) unsigned NOT NULL,
  `id_ville` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_etape`),
  KEY `covoiturage__etape_id_etape_index` (`id_etape`),
  KEY `covoiturage__etape_ordre_etape_index` (`ordre_etape`),
  KEY `covoiturage__etape_id_trajet_index` (`id_trajet`),
  KEY `covoiturage__etape_id_ville_index` (`id_ville`),
  CONSTRAINT `covoiturage__etape_id_trajet_foreign` FOREIGN KEY (`id_trajet`) REFERENCES `covoiturage__trajet` (`id_trajet`),
  CONSTRAINT `covoiturage__etape_id_ville_foreign` FOREIGN KEY (`id_ville`) REFERENCES `parametrage__ville` (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `covoiturage__etape` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `covoiturage__reservation`;

CREATE TABLE `covoiturage__reservation` (
  `id_reservation` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date_de_reservation` datetime NOT NULL,
  `code_employe` bigint(20) unsigned NOT NULL,
  `id_trajet` bigint(20) unsigned NOT NULL,
  `id_etape` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `covoiturage__reservation_id_reservation_index` (`id_reservation`),
  KEY `covoiturage__reservation_code_employe_index` (`code_employe`),
  KEY `covoiturage__reservation_id_trajet_index` (`id_trajet`),
  KEY `covoiturage__reservation_id_etape_index` (`id_etape`),
  CONSTRAINT `covoiturage__reservation_code_employe_foreign` FOREIGN KEY (`code_employe`) REFERENCES `employe__employe` (`code_employe`),
  CONSTRAINT `covoiturage__reservation_id_etape_foreign` FOREIGN KEY (`id_etape`) REFERENCES `covoiturage__etape` (`id_etape`),
  CONSTRAINT `covoiturage__reservation_id_trajet_foreign` FOREIGN KEY (`id_trajet`) REFERENCES `covoiturage__trajet` (`id_trajet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `covoiturage__reservation` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `covoiturage__trajet`;

CREATE TABLE `covoiturage__trajet` (
  `id_trajet` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_place_maximum` int(11) NOT NULL,
  `id_vehicule` bigint(20) unsigned NOT NULL,
  `code_employe` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_trajet`),
  KEY `covoiturage__trajet_id_trajet_index` (`id_trajet`),
  KEY `covoiturage__trajet_id_vehicule_index` (`id_vehicule`),
  KEY `covoiturage__trajet_code_employe_index` (`code_employe`),
  CONSTRAINT `covoiturage__trajet_code_employe_foreign` FOREIGN KEY (`code_employe`) REFERENCES `employe__employe` (`code_employe`),
  CONSTRAINT `covoiturage__trajet_id_vehicule_foreign` FOREIGN KEY (`id_vehicule`) REFERENCES `covoiturage__vehicule` (`id_vehicule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `covoiturage__trajet` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `covoiturage__vehicule`;

CREATE TABLE `covoiturage__vehicule` (
  `id_vehicule` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `immatriculation` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee_model` year(4) NOT NULL,
  `type_vehicule` enum('perso','service') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_agence` bigint(20) unsigned DEFAULT NULL,
  `code_employe` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_vehicule`),
  KEY `covoiturage__vehicule_id_vehicule_index` (`id_vehicule`),
  KEY `covoiturage__vehicule_id_agence_index` (`id_agence`),
  KEY `covoiturage__vehicule_code_employe_index` (`code_employe`),
  CONSTRAINT `covoiturage__vehicule_code_employe_foreign` FOREIGN KEY (`code_employe`) REFERENCES `employe__employe` (`code_employe`),
  CONSTRAINT `covoiturage__vehicule_id_agence_foreign` FOREIGN KEY (`id_agence`) REFERENCES `salle__agence` (`id_agence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `covoiturage__vehicule` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `employe__employe`;

CREATE TABLE `employe__employe` (
  `code_employe` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilisateur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `date_embauche` date NOT NULL,
  `derniere_connexion` datetime DEFAULT NULL,
  `id_agence` bigint(20) unsigned NOT NULL,
  `code_fonction` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`code_employe`),
  KEY `employe__employe_code_employe_index` (`code_employe`),
  KEY `employe__employe_id_agence_index` (`id_agence`),
  KEY `employe__employe_code_fonction_index` (`code_fonction`),
  CONSTRAINT `employe__employe_code_fonction_foreign` FOREIGN KEY (`code_fonction`) REFERENCES `employe__fonction` (`code_fonction`),
  CONSTRAINT `employe__employe_id_agence_foreign` FOREIGN KEY (`id_agence`) REFERENCES `salle__agence` (`id_agence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `employe__employe` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `employe__fonction`;

CREATE TABLE `employe__fonction` (
  `code_fonction` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_fonction` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`code_fonction`),
  KEY `employe__fonction_code_fonction_index` (`code_fonction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `employe__fonction` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `frais__frais`;

CREATE TABLE `frais__frais` (
  `id_frais` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `montant_total` decimal(16,2) NOT NULL,
  `date_frais` date NOT NULL,
  `type_forfait` enum('forfait','horforfait') COLLATE utf8mb4_unicode_ci NOT NULL,
  `horsforfait_libelle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forfait_quantite` int(11) DEFAULT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appartenance_mois` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appartenance_annee` year(4) NOT NULL,
  `id_nature` bigint(20) unsigned DEFAULT NULL,
  `code_situation` bigint(20) unsigned NOT NULL,
  `code_employe_comptable` bigint(20) unsigned DEFAULT NULL,
  `id_visite` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_frais`),
  KEY `frais__frais_id_frais_index` (`id_frais`),
  KEY `frais__frais_id_nature_index` (`id_nature`),
  KEY `frais__frais_code_situation_index` (`code_situation`),
  KEY `frais__frais_code_employe_comptable_index` (`code_employe_comptable`),
  KEY `frais__frais_id_visite_index` (`id_visite`),
  CONSTRAINT `frais__frais_code_employe_comptable_foreign` FOREIGN KEY (`code_employe_comptable`) REFERENCES `employe__employe` (`code_employe`),
  CONSTRAINT `frais__frais_code_situation_foreign` FOREIGN KEY (`code_situation`) REFERENCES `frais__situation_validation` (`code_situation`),
  CONSTRAINT `frais__frais_id_nature_foreign` FOREIGN KEY (`id_nature`) REFERENCES `frais__nature` (`id_nature`),
  CONSTRAINT `frais__frais_id_visite_foreign` FOREIGN KEY (`id_visite`) REFERENCES `visite__visite` (`id_visite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `frais__frais` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `frais__justificative`;

CREATE TABLE `frais__justificative` (
  `id_justif` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `justif_chemin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `justif_extension` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `justif_mime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_frais` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_justif`),
  KEY `frais__justificative_id_justif_index` (`id_justif`),
  KEY `frais__justificative_id_frais_index` (`id_frais`),
  CONSTRAINT `frais__justificative_id_frais_foreign` FOREIGN KEY (`id_frais`) REFERENCES `frais__frais` (`id_frais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `frais__justificative` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `frais__nature`;

CREATE TABLE `frais__nature` (
  `id_nature` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `intitule_frais` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_forfait` decimal(16,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_nature`),
  KEY `frais__nature_id_nature_index` (`id_nature`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `frais__nature` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `frais__situation_validation`;

CREATE TABLE `frais__situation_validation` (
  `code_situation` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `libelle_situation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`code_situation`),
  KEY `frais__situation_validation_code_situation_index` (`code_situation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `frais__situation_validation` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `parametrage__departement`;

CREATE TABLE `parametrage__departement` (
  `departement_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_departement` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`departement_id`),
  KEY `parametrage__departement_departement_id_index` (`departement_id`),
  KEY `parametrage__departement_region_id_index` (`region_id`),
  CONSTRAINT `parametrage__departement_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `parametrage__region` (`region_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `parametrage__departement` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `parametrage__region`;

CREATE TABLE `parametrage__region` (
  `region_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_region` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`region_id`),
  KEY `parametrage__region_region_id_index` (`region_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `parametrage__region` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `parametrage__ville`;

CREATE TABLE `parametrage__ville` (
  `id_ville` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_longitude` decimal(9,6) NOT NULL,
  `ville_latitude` decimal(8,6) NOT NULL,
  `departement_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ville`),
  KEY `parametrage__ville_id_ville_index` (`id_ville`),
  KEY `parametrage__ville_nom_index` (`nom`),
  KEY `parametrage__ville_code_postal_index` (`code_postal`),
  KEY `parametrage__ville_departement_id_index` (`departement_id`),
  CONSTRAINT `parametrage__ville_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `parametrage__departement` (`departement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `parametrage__ville` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `salle__agence`;

CREATE TABLE `salle__agence` (
  `id_agence` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_agence` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ville` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_agence`),
  KEY `salle__agence_id_agence_index` (`id_agence`),
  KEY `salle__agence_id_ville_index` (`id_ville`),
  CONSTRAINT `salle__agence_id_ville_foreign` FOREIGN KEY (`id_ville`) REFERENCES `parametrage__ville` (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `salle__agence` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `salle__batiment`;

CREATE TABLE `salle__batiment` (
  `id_batiment` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_batiment` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_agence` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_batiment`),
  KEY `salle__batiment_id_batiment_index` (`id_batiment`),
  KEY `salle__batiment_id_agence_index` (`id_agence`),
  CONSTRAINT `salle__batiment_id_agence_foreign` FOREIGN KEY (`id_agence`) REFERENCES `salle__agence` (`id_agence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `salle__batiment` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `salle__extra`;

CREATE TABLE `salle__extra` (
  `id_extra` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `libelle_extra` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_extra`),
  KEY `salle__extra_id_extra_index` (`id_extra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `salle__extra` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `salle__materiel_type`;

CREATE TABLE `salle__materiel_type` (
  `id_materiel` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_materiel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_materiel`),
  KEY `salle__materiel_type_id_materiel_index` (`id_materiel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `salle__materiel_type` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `salle__posession_materiel`;

CREATE TABLE `salle__posession_materiel` (
  `id_salle` bigint(20) unsigned NOT NULL,
  `id_materiel` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_salle`,`id_materiel`),
  KEY `salle__posession_materiel_id_salle_index` (`id_salle`),
  KEY `salle__posession_materiel_id_materiel_index` (`id_materiel`),
  CONSTRAINT `salle__posession_materiel_id_materiel_foreign` FOREIGN KEY (`id_materiel`) REFERENCES `salle__materiel_type` (`id_materiel`),
  CONSTRAINT `salle__posession_materiel_id_salle_foreign` FOREIGN KEY (`id_salle`) REFERENCES `salle__salle` (`id_salle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `salle__posession_materiel` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `salle__reservation`;

CREATE TABLE `salle__reservation` (
  `id_reservation` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date_debut_reservation` datetime NOT NULL,
  `date_fin_reservation` datetime NOT NULL,
  `nombre_de_personnes` int(11) NOT NULL,
  `code_employe` bigint(20) unsigned NOT NULL,
  `id_salle` bigint(20) unsigned NOT NULL,
  `id_extra` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `salle__reservation_id_reservation_index` (`id_reservation`),
  KEY `salle__reservation_code_employe_index` (`code_employe`),
  KEY `salle__reservation_id_salle_index` (`id_salle`),
  KEY `salle__reservation_id_extra_index` (`id_extra`),
  CONSTRAINT `salle__reservation_code_employe_foreign` FOREIGN KEY (`code_employe`) REFERENCES `employe__employe` (`code_employe`),
  CONSTRAINT `salle__reservation_id_extra_foreign` FOREIGN KEY (`id_extra`) REFERENCES `salle__extra` (`id_extra`),
  CONSTRAINT `salle__reservation_id_salle_foreign` FOREIGN KEY (`id_salle`) REFERENCES `salle__salle` (`id_salle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `salle__reservation` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `salle__salle`;

CREATE TABLE `salle__salle` (
  `id_salle` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_salle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_batiment` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_salle`),
  KEY `salle__salle_id_salle_index` (`id_salle`),
  KEY `salle__salle_id_batiment_index` (`id_batiment`),
  CONSTRAINT `salle__salle_id_batiment_foreign` FOREIGN KEY (`id_batiment`) REFERENCES `salle__batiment` (`id_batiment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `salle__salle` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `visite__famille_medicament`;

CREATE TABLE `visite__famille_medicament` (
  `id_famille` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_famille` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_famille`),
  KEY `visite__famille_medicament_id_famille_index` (`id_famille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `visite__famille_medicament` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `visite__medicament`;

CREATE TABLE `visite__medicament` (
  `id_medicament` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_medicament` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_medicament` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_famille` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_medicament`),
  KEY `visite__medicament_id_medicament_index` (`id_medicament`),
  KEY `visite__medicament_id_famille_index` (`id_famille`),
  CONSTRAINT `visite__medicament_id_famille_foreign` FOREIGN KEY (`id_famille`) REFERENCES `visite__famille_medicament` (`id_famille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `visite__medicament` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `visite__praticien`;

CREATE TABLE `visite__praticien` (
  `id_praticien` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `raison_sociale` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ville` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_praticien`),
  KEY `visite__praticien_id_praticien_index` (`id_praticien`),
  KEY `visite__praticien_id_ville_index` (`id_ville`),
  CONSTRAINT `visite__praticien_id_ville_foreign` FOREIGN KEY (`id_ville`) REFERENCES `parametrage__ville` (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `visite__praticien` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `visite__presentation_medicament`;

CREATE TABLE `visite__presentation_medicament` (
  `id_visite` bigint(20) unsigned NOT NULL,
  `id_medicament` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_visite`,`id_medicament`),
  KEY `visite__presentation_medicament_id_visite_index` (`id_visite`),
  KEY `visite__presentation_medicament_id_medicament_index` (`id_medicament`),
  CONSTRAINT `visite__presentation_medicament_id_medicament_foreign` FOREIGN KEY (`id_medicament`) REFERENCES `visite__medicament` (`id_medicament`),
  CONSTRAINT `visite__presentation_medicament_id_visite_foreign` FOREIGN KEY (`id_visite`) REFERENCES `visite__visite` (`id_visite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `visite__presentation_medicament` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `visite__visite`;

CREATE TABLE `visite__visite` (
  `id_visite` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date_debut_visite` date NOT NULL,
  `date_fin_visite` date NOT NULL,
  `rapport` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_praticien` bigint(20) unsigned NOT NULL,
  `code_employe` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_visite`),
  KEY `visite__visite_id_visite_index` (`id_visite`),
  KEY `visite__visite_id_praticien_index` (`id_praticien`),
  KEY `visite__visite_code_employe_index` (`code_employe`),
  CONSTRAINT `visite__visite_code_employe_foreign` FOREIGN KEY (`code_employe`) REFERENCES `employe__employe` (`code_employe`),
  CONSTRAINT `visite__visite_id_praticien_foreign` FOREIGN KEY (`id_praticien`) REFERENCES `visite__praticien` (`id_praticien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `visite__visite` WRITE;

UNLOCK TABLES;