<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style>

body {
    font: normal normal normal 14px Helvetica, Arial, Sans-serif;
    background: white;
}

div.header { text-align: center; }

table {
    border-spacing: 0;
    border-collapse: collapse;
}

th, td {
    border: 1px solid black;
    padding: 0.5em;
}

pre {
    white-space: pre-wrap;
}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.tableOfContents {
    margin-top: 20px;
}

.contentsList {
    list-style-type: decimal;
    margin-bottom: 10px;
}

.contentsSublist {
    list-style-type: lower-alpha;
    margin-top: 5px;
    margin-left: 20px;
}

.contentsSublist a {
    color: #007bff;
    text-decoration: none;
}

.contentsSublist a:hover {
    text-decoration: underline;
}
</style>
<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h3 {
    color: #007bff;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    padding: 10px;
    border: 1px solid #dee2e6;
    text-align: left;
}

th {
    background-color: #007bff;
    color: #fff;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 5%;
    background-color: #f8f9fa;
    color: #495057;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.main-header {
    color: #007bff;
}

.generalInfo {
    margin-top: 20px;
}

.infoField {
    margin-bottom: 10px;
}

.tableOfContents {
    margin-top: 20px;
}

.contentsList {
    list-style-type: decimal;
    margin-bottom: 10px;
}

.contentsSublist {
    list-style-type: lower-alpha;
    margin-top: 5px;
}

.contentsSublist a {
    color: #007bff;
    text-decoration: none;
}

.contentsSublist a:hover {
    text-decoration: underline;
}

</style>

    </head>
    <body>
        <div class="header">
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="desktop-logo">
            <h1 class="main-header">GSB - Documentation de la base de donnée</h1>
        </div>
        <div class="generalInfo">
            <p class="infoField">
                <strong>
Interpréteur SQL:                 </strong>
 MySQL            </p>
            <p class="infoField">
                <strong>
Version:                 </strong>
2.4            </p>
            <p class="infoField">
                <strong>
Description:                 </strong>
            </p>
        </div>
        <div class="tableOfContents">
            <h2>
Sommaire            </h2>
            <ol type="1" class="contentsList">
                <li>
                    <a href="#tables">
Tables                    </a>
                    <ol class="contentsSublist">
                        <li>
                            <a href="#tableCovoiturageEtape">
covoiturage__etape                            </a>
                        </li>
                        <li>
                            <a href="#tableCovoiturageReservation">
covoiturage__reservation                            </a>
                        </li>
                        <li>
                            <a href="#tableCovoiturageTrajet">
covoiturage__trajet                            </a>
                        </li>
                        <li>
                            <a href="#tableCovoiturageVehicule">
covoiturage__vehicule                            </a>
                        </li>
                        <li>
                            <a href="#tableEmployeEmploye">
employe__employe                            </a>
                        </li>
                        <li>
                            <a href="#tableEmployeFonction">
employe__fonction                            </a>
                        </li>
                        <li>
                            <a href="#tableFraisFrais">
frais__frais                            </a>
                        </li>
                        <li>
                            <a href="#tableFraisJustificative">
frais__justificative                            </a>
                        </li>
                        <li>
                            <a href="#tableFraisNature">
frais__nature                            </a>
                        </li>
                        <li>
                            <a href="#tableFraisSituationValidation">
frais__situation_validation                            </a>
                        </li>
                        <li>
                            <a href="#tableParametrageDepartement">
parametrage__departement                            </a>
                        </li>
                        <li>
                            <a href="#tableParametrageRegion">
parametrage__region                            </a>
                        </li>
                        <li>
                            <a href="#tableParametrageVille">
parametrage__ville                            </a>
                        </li>
                        <li>
                            <a href="#tableSalleAgence">
salle__agence                            </a>
                        </li>
                        <li>
                            <a href="#tableSalleBatiment">
salle__batiment                            </a>
                        </li>
                        <li>
                            <a href="#tableSalleExtra">
salle__extra                            </a>
                        </li>
                        <li>
                            <a href="#tableSalleMaterielType">
salle__materiel_type                            </a>
                        </li>
                        <li>
                            <a href="#tableSallePosessionMateriel">
salle__posession_materiel                            </a>
                        </li>
                        <li>
                            <a href="#tableSalleReservation">
salle__reservation                            </a>
                        </li>
                        <li>
                            <a href="#tableSalleSalle">
salle__salle                            </a>
                        </li>
                        <li>
                            <a href="#tableVisiteFamilleMedicament">
visite__famille_medicament                            </a>
                        </li>
                        <li>
                            <a href="#tableVisiteMedicament">
visite__medicament                            </a>
                        </li>
                        <li>
                            <a href="#tableVisitePraticien">
visite__praticien                            </a>
                        </li>
                        <li>
                            <a href="#tableVisitePresentationMedicament">
visite__presentation_medicament                            </a>
                        </li>
                        <li>
                            <a href="#tableVisiteVisite">
visite__visite                            </a>
                        </li>
                    </ol>
                </li>
                <li>
                    <a href="#references">
References                    </a>
                    <ol class="contentsSublist">
                        <li>
                            <a href="#referenceCovoiturageEtapeIdTrajetForeign">
covoiturage__etape_id_trajet_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceCovoiturageEtapeIdVilleForeign">
covoiturage__etape_id_ville_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceCovoiturageReservationCodeEmployeForeign">
covoiturage__reservation_code_employe_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceCovoiturageReservationIdEtapeArriveForeign">
covoiturage__reservation_id_etape_arrive_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceCovoiturageReservationIdEtapeDepartForeign">
covoiturage__reservation_id_etape_depart_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceCovoiturageReservationIdTrajetForeign">
covoiturage__reservation_id_trajet_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceCovoiturageTrajetCodeEmployeForeign">
covoiturage__trajet_code_employe_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceCovoiturageTrajetIdVehiculeForeign">
covoiturage__trajet_id_vehicule_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceCovoiturageVehiculeCodeEmployeForeign">
covoiturage__vehicule_code_employe_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceCovoiturageVehiculeIdAgenceForeign">
covoiturage__vehicule_id_agence_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceEmployeEmployeCodeFonctionForeign">
employe__employe_code_fonction_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceEmployeEmployeIdAgenceForeign">
employe__employe_id_agence_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceFraisFraisCodeEmployeComptableForeign">
frais__frais_code_employe_comptable_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceFraisFraisCodeSituationForeign">
frais__frais_code_situation_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceFraisFraisIdNatureForeign">
frais__frais_id_nature_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceFraisFraisIdVisiteForeign">
frais__frais_id_visite_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceFraisJustificativeIdFraisForeign">
frais__justificative_id_frais_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceParametrageDepartementRegionIdForeign">
parametrage__departement_region_id_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceParametrageVilleDepartementIdForeign">
parametrage__ville_departement_id_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceSalleAgenceIdVilleForeign">
salle__agence_id_ville_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceSalleBatimentIdAgenceForeign">
salle__batiment_id_agence_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceSallePosessionMaterielIdMaterielForeign">
salle__posession_materiel_id_materiel_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceSallePosessionMaterielIdSalleForeign">
salle__posession_materiel_id_salle_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceSalleReservationCodeEmployeForeign">
salle__reservation_code_employe_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceSalleReservationIdExtraForeign">
salle__reservation_id_extra_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceSalleReservationIdSalleForeign">
salle__reservation_id_salle_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceSalleSalleIdBatimentForeign">
salle__salle_id_batiment_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceVisiteMedicamentIdFamilleForeign">
visite__medicament_id_famille_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceVisitePraticienIdVilleForeign">
visite__praticien_id_ville_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceVisitePresentationMedicamentIdMedicamentForeign">
visite__presentation_medicament_id_medicament_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceVisitePresentationMedicamentIdVisiteForeign">
visite__presentation_medicament_id_visite_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceVisiteVisiteCodeEmployeForeign">
visite__visite_code_employe_foreign                            </a>
                        </li>
                        <li>
                            <a href="#referenceVisiteVisiteIdPraticienForeign">
visite__visite_id_praticien_foreign                            </a>
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
        <div id="tablesDiv">
            <h2 id="tables">
1. Tables            </h2>
            <h3 id="tableCovoiturageEtape">
1.1. Table covoiturage__etape            </h3>
            <h4>
1.1.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
ordre_etape                        </td>
                        <td>
int(11)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
date_passage                        </td>
                        <td>
datetime                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_trajet                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_ville                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_etape                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.1.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
covoiturage__etape_id_etape_index                        </td>
                        <td>
id_etape (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__etape_ordre_etape_index                        </td>
                        <td>
ordre_etape (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__etape_id_trajet_index                        </td>
                        <td>
id_trajet (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__etape_id_ville_index                        </td>
                        <td>
id_ville (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableCovoiturageReservation">
1.2. Table covoiturage__reservation            </h3>
            <h4>
1.2.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
date_de_reservation                        </td>
                        <td>
datetime                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_employe                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_trajet                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_etape_depart                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_etape_arrive                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_reservation                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.2.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
covoiturage__reservation_id_reservation_index                        </td>
                        <td>
id_reservation (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__reservation_code_employe_index                        </td>
                        <td>
code_employe (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__reservation_id_trajet_index                        </td>
                        <td>
id_trajet (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__reservation_id_etape_depart_index                        </td>
                        <td>
id_etape_depart (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__reservation_id_etape_arrive_index                        </td>
                        <td>
id_etape_arrive (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableCovoiturageTrajet">
1.3. Table covoiturage__trajet            </h3>
            <h4>
1.3.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nombre_place_maximum                        </td>
                        <td>
int(11)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_vehicule                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_employe                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_trajet                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.3.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
covoiturage__trajet_id_trajet_index                        </td>
                        <td>
id_trajet (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__trajet_id_vehicule_index                        </td>
                        <td>
id_vehicule (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__trajet_code_employe_index                        </td>
                        <td>
code_employe (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableCovoiturageVehicule">
1.4. Table covoiturage__vehicule            </h3>
            <h4>
1.4.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
immatriculation                        </td>
                        <td>
varchar(15)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
marque                        </td>
                        <td>
varchar(15)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
model                        </td>
                        <td>
varchar(15)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
annee_model                        </td>
                        <td>
year                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
type_vehicule                        </td>
                        <td>
enum('perso','service')                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
photo                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_agence                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_employe                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_vehicule                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.4.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
covoiturage__vehicule_id_vehicule_index                        </td>
                        <td>
id_vehicule (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__vehicule_id_agence_index                        </td>
                        <td>
id_agence (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
covoiturage__vehicule_code_employe_index                        </td>
                        <td>
code_employe (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableEmployeEmploye">
1.5. Table employe__employe            </h3>
            <h4>
1.5.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
prenom                        </td>
                        <td>
varchar(30)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
nom                        </td>
                        <td>
varchar(30)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
utilisateur                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
mot_de_passe                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
email                        </td>
                        <td>
varchar(100)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
date_naissance                        </td>
                        <td>
date                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
date_embauche                        </td>
                        <td>
date                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
derniere_connexion                        </td>
                        <td>
datetime                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_agence                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_fonction                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_employe                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.5.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
employe__employe_code_employe_index                        </td>
                        <td>
code_employe (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
employe__employe_id_agence_index                        </td>
                        <td>
id_agence (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
employe__employe_code_fonction_index                        </td>
                        <td>
code_fonction (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableEmployeFonction">
1.6. Table employe__fonction            </h3>
            <h4>
1.6.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom_fonction                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_fonction                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.6.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
employe__fonction_code_fonction_index                        </td>
                        <td>
code_fonction (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableFraisFrais">
1.7. Table frais__frais            </h3>
            <h4>
1.7.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
montant_total                        </td>
                        <td>
decimal(16,2)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
date_frais                        </td>
                        <td>
date                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
type_forfait                        </td>
                        <td>
enum('forfait','horsforfait')                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
horsforfait_libelle                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
forfait_quantite                        </td>
                        <td>
int(11)                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
commentaire                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
appartenance_mois                        </td>
                        <td>
char(2)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
appartenance_annee                        </td>
                        <td>
year                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_nature                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_situation                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_employe_comptable                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_visite                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_frais                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.7.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
frais__frais_id_frais_index                        </td>
                        <td>
id_frais (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
frais__frais_id_nature_index                        </td>
                        <td>
id_nature (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
frais__frais_code_situation_index                        </td>
                        <td>
code_situation (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
frais__frais_code_employe_comptable_index                        </td>
                        <td>
code_employe_comptable (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
frais__frais_id_visite_index                        </td>
                        <td>
id_visite (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableFraisJustificative">
1.8. Table frais__justificative            </h3>
            <h4>
1.8.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
justif_nom                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
justif_chemin                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
justif_extension                        </td>
                        <td>
varchar(5)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
justif_mime                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_frais                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_justif                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.8.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
frais__justificative_id_justif_index                        </td>
                        <td>
id_justif (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
frais__justificative_id_frais_index                        </td>
                        <td>
id_frais (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableFraisNature">
1.9. Table frais__nature            </h3>
            <h4>
1.9.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
intitule_frais                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
intitule_quantite                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
montant_forfait                        </td>
                        <td>
decimal(16,2)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_nature                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.9.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
frais__nature_id_nature_index                        </td>
                        <td>
id_nature (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableFraisSituationValidation">
1.10. Table frais__situation_validation            </h3>
            <h4>
1.10.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
libelle_situation                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_situation                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.10.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
frais__situation_validation_code_situation_index                        </td>
                        <td>
code_situation (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableParametrageDepartement">
1.11. Table parametrage__departement            </h3>
            <h4>
1.11.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom_departement                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
region_id                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
departement_id                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.11.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
parametrage__departement_departement_id_index                        </td>
                        <td>
departement_id (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
parametrage__departement_region_id_index                        </td>
                        <td>
region_id (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableParametrageRegion">
1.12. Table parametrage__region            </h3>
            <h4>
1.12.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom_region                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
region_id                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.12.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
parametrage__region_region_id_index                        </td>
                        <td>
region_id (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableParametrageVille">
1.13. Table parametrage__ville            </h3>
            <h4>
1.13.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_postal                        </td>
                        <td>
char(5)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
ville_longitude                        </td>
                        <td>
decimal(9,6)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
ville_latitude                        </td>
                        <td>
decimal(8,6)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
departement_id                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_ville                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.13.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
parametrage__ville_id_ville_index                        </td>
                        <td>
id_ville (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
parametrage__ville_nom_index                        </td>
                        <td>
nom (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
parametrage__ville_code_postal_index                        </td>
                        <td>
code_postal (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
parametrage__ville_departement_id_index                        </td>
                        <td>
departement_id (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableSalleAgence">
1.14. Table salle__agence            </h3>
            <h4>
1.14.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom_agence                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_ville                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_agence                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.14.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
salle__agence_id_agence_index                        </td>
                        <td>
id_agence (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
salle__agence_id_ville_index                        </td>
                        <td>
id_ville (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableSalleBatiment">
1.15. Table salle__batiment            </h3>
            <h4>
1.15.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom_batiment                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_agence                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_batiment                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.15.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
salle__batiment_id_batiment_index                        </td>
                        <td>
id_batiment (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
salle__batiment_id_agence_index                        </td>
                        <td>
id_agence (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableSalleExtra">
1.16. Table salle__extra            </h3>
            <h4>
1.16.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
libelle_extra                        </td>
                        <td>
varchar(100)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_extra                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.16.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
salle__extra_id_extra_index                        </td>
                        <td>
id_extra (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableSalleMaterielType">
1.17. Table salle__materiel_type            </h3>
            <h4>
1.17.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom_materiel                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_materiel                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.17.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
salle__materiel_type_id_materiel_index                        </td>
                        <td>
id_materiel (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableSallePosessionMateriel">
1.18. Table salle__posession_materiel            </h3>
            <h4>
1.18.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
id_salle                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_materiel                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.18.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
salle__posession_materiel_id_salle_index                        </td>
                        <td>
id_salle (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
salle__posession_materiel_id_materiel_index                        </td>
                        <td>
id_materiel (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableSalleReservation">
1.19. Table salle__reservation            </h3>
            <h4>
1.19.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
date_debut_reservation                        </td>
                        <td>
datetime                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
date_fin_reservation                        </td>
                        <td>
datetime                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_employe                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_salle                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_extra                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_reservation                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.19.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
salle__reservation_id_reservation_index                        </td>
                        <td>
id_reservation (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
salle__reservation_code_employe_index                        </td>
                        <td>
code_employe (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
salle__reservation_id_salle_index                        </td>
                        <td>
id_salle (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
salle__reservation_id_extra_index                        </td>
                        <td>
id_extra (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableSalleSalle">
1.20. Table salle__salle            </h3>
            <h4>
1.20.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom_salle                        </td>
                        <td>
varchar(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_batiment                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_salle                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.20.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
salle__salle_id_salle_index                        </td>
                        <td>
id_salle (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
salle__salle_id_batiment_index                        </td>
                        <td>
id_batiment (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableVisiteFamilleMedicament">
1.21. Table visite__famille_medicament            </h3>
            <h4>
1.21.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom_famille                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_famille                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.21.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
visite__famille_medicament_id_famille_index                        </td>
                        <td>
id_famille (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableVisiteMedicament">
1.22. Table visite__medicament            </h3>
            <h4>
1.22.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
nom_medicament                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
photo_medicament                        </td>
                        <td>
varchar(255)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_famille                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_medicament                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.22.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
visite__medicament_id_medicament_index                        </td>
                        <td>
id_medicament (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
visite__medicament_id_famille_index                        </td>
                        <td>
id_famille (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableVisitePraticien">
1.23. Table visite__praticien            </h3>
            <h4>
1.23.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
raison_sociale                        </td>
                        <td>
varchar(50)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
prenom                        </td>
                        <td>
varchar(30)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
nom                        </td>
                        <td>
varchar(30)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
adresse                        </td>
                        <td>
varchar(100)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_ville                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_praticien                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.23.2. Alternate keys            </h4>
            <table class="alternateKeysTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Key name                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
visite__praticien_raison_sociale_unique                        </td>
                        <td>
raison_sociale                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.23.3. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
visite__praticien_id_praticien_index                        </td>
                        <td>
id_praticien (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
visite__praticien_id_ville_index                        </td>
                        <td>
id_ville (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableVisitePresentationMedicament">
1.24. Table visite__presentation_medicament            </h3>
            <h4>
1.24.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
id_visite                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_medicament                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.24.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
visite__presentation_medicament_id_visite_index                        </td>
                        <td>
id_visite (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
visite__presentation_medicament_id_medicament_index                        </td>
                        <td>
id_medicament (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 id="tableVisiteVisite">
1.25. Table visite__visite            </h3>
            <h4>
1.25.1. Champ            </h4>
            <table class="ChampTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Champ                        </th>
                        <th>
Type                        </th>
                        <th>
Propriété                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
date_debut_visite                        </td>
                        <td>
date                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
date_fin_visite                        </td>
                        <td>
date                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
rapport                        </td>
                        <td>
longtext                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_praticien                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
code_employe                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
created_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
updated_at                        </td>
                        <td>
timestamp                        </td>
                        <td>
null                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
id_visite                        </td>
                        <td>
bigint(20)                        </td>
                        <td>
PK                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>
1.25.2. Indexes            </h4>
            <table class="indexesTable">
                <thead>
                    <tr class="titleRow">
                        <th>
Nom d'index                        </th>
                        <th>
Champ                        </th>
                        <th>
Description                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
visite__visite_id_visite_index                        </td>
                        <td>
id_visite (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
visite__visite_id_praticien_index                        </td>
                        <td>
id_praticien (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
visite__visite_code_employe_index                        </td>
                        <td>
code_employe (ASC)                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="referencesDiv">
            <h2 id="references">
2. Reference            </h2>
            <h3 id="referenceCovoiturageEtapeIdTrajetForeign">
2.1. Reference covoiturage__etape_id_trajet_foreign            </h3>
            <h4>
2.1.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableCovoiturageTrajet">
covoiturage__trajet                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageEtape">
covoiturage__etape                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_trajet                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_trajet                    </td>
                </tr>
            </table>
            <h3 id="referenceCovoiturageEtapeIdVilleForeign">
2.2. Reference covoiturage__etape_id_ville_foreign            </h3>
            <h4>
2.2.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableParametrageVille">
parametrage__ville                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageEtape">
covoiturage__etape                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_ville                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_ville                    </td>
                </tr>
            </table>
            <h3 id="referenceCovoiturageReservationCodeEmployeForeign">
2.3. Reference covoiturage__reservation_code_employe_foreign            </h3>
            <h4>
2.3.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableEmployeEmploye">
employe__employe                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageReservation">
covoiturage__reservation                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
code_employe                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
code_employe                    </td>
                </tr>
            </table>
            <h3 id="referenceCovoiturageReservationIdEtapeArriveForeign">
2.4. Reference covoiturage__reservation_id_etape_arrive_foreign            </h3>
            <h4>
2.4.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableCovoiturageEtape">
covoiturage__etape                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageReservation">
covoiturage__reservation                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_etape                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_etape_arrive                    </td>
                </tr>
            </table>
            <h3 id="referenceCovoiturageReservationIdEtapeDepartForeign">
2.5. Reference covoiturage__reservation_id_etape_depart_foreign            </h3>
            <h4>
2.5.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableCovoiturageEtape">
covoiturage__etape                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageReservation">
covoiturage__reservation                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_etape                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_etape_depart                    </td>
                </tr>
            </table>
            <h3 id="referenceCovoiturageReservationIdTrajetForeign">
2.6. Reference covoiturage__reservation_id_trajet_foreign            </h3>
            <h4>
2.6.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableCovoiturageTrajet">
covoiturage__trajet                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageReservation">
covoiturage__reservation                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_trajet                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_trajet                    </td>
                </tr>
            </table>
            <h3 id="referenceCovoiturageTrajetCodeEmployeForeign">
2.7. Reference covoiturage__trajet_code_employe_foreign            </h3>
            <h4>
2.7.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableEmployeEmploye">
employe__employe                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageTrajet">
covoiturage__trajet                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
code_employe                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
code_employe                    </td>
                </tr>
            </table>
            <h3 id="referenceCovoiturageTrajetIdVehiculeForeign">
2.8. Reference covoiturage__trajet_id_vehicule_foreign            </h3>
            <h4>
2.8.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableCovoiturageVehicule">
covoiturage__vehicule                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageTrajet">
covoiturage__trajet                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_vehicule                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_vehicule                    </td>
                </tr>
            </table>
            <h3 id="referenceCovoiturageVehiculeCodeEmployeForeign">
2.9. Reference covoiturage__vehicule_code_employe_foreign            </h3>
            <h4>
2.9.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableEmployeEmploye">
employe__employe                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageVehicule">
covoiturage__vehicule                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
code_employe                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
code_employe                    </td>
                </tr>
            </table>
            <h3 id="referenceCovoiturageVehiculeIdAgenceForeign">
2.10. Reference covoiturage__vehicule_id_agence_foreign            </h3>
            <h4>
2.10.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableSalleAgence">
salle__agence                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableCovoiturageVehicule">
covoiturage__vehicule                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_agence                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_agence                    </td>
                </tr>
            </table>
            <h3 id="referenceEmployeEmployeCodeFonctionForeign">
2.11. Reference employe__employe_code_fonction_foreign            </h3>
            <h4>
2.11.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableEmployeFonction">
employe__fonction                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableEmployeEmploye">
employe__employe                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
code_fonction                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
code_fonction                    </td>
                </tr>
            </table>
            <h3 id="referenceEmployeEmployeIdAgenceForeign">
2.12. Reference employe__employe_id_agence_foreign            </h3>
            <h4>
2.12.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableSalleAgence">
salle__agence                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableEmployeEmploye">
employe__employe                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_agence                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_agence                    </td>
                </tr>
            </table>
            <h3 id="referenceFraisFraisCodeEmployeComptableForeign">
2.13. Reference frais__frais_code_employe_comptable_foreign            </h3>
            <h4>
2.13.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableEmployeEmploye">
employe__employe                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableFraisFrais">
frais__frais                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
code_employe                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
code_employe_comptable                    </td>
                </tr>
            </table>
            <h3 id="referenceFraisFraisCodeSituationForeign">
2.14. Reference frais__frais_code_situation_foreign            </h3>
            <h4>
2.14.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableFraisSituationValidation">
frais__situation_validation                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableFraisFrais">
frais__frais                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
code_situation                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
code_situation                    </td>
                </tr>
            </table>
            <h3 id="referenceFraisFraisIdNatureForeign">
2.15. Reference frais__frais_id_nature_foreign            </h3>
            <h4>
2.15.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableFraisNature">
frais__nature                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableFraisFrais">
frais__frais                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_nature                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_nature                    </td>
                </tr>
            </table>
            <h3 id="referenceFraisFraisIdVisiteForeign">
2.16. Reference frais__frais_id_visite_foreign            </h3>
            <h4>
2.16.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableVisiteVisite">
visite__visite                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableFraisFrais">
frais__frais                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_visite                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_visite                    </td>
                </tr>
            </table>
            <h3 id="referenceFraisJustificativeIdFraisForeign">
2.17. Reference frais__justificative_id_frais_foreign            </h3>
            <h4>
2.17.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableFraisFrais">
frais__frais                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableFraisJustificative">
frais__justificative                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_frais                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_frais                    </td>
                </tr>
            </table>
            <h3 id="referenceParametrageDepartementRegionIdForeign">
2.18. Reference parametrage__departement_region_id_foreign            </h3>
            <h4>
2.18.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableParametrageRegion">
parametrage__region                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableParametrageDepartement">
parametrage__departement                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
region_id                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
region_id                    </td>
                </tr>
            </table>
            <h3 id="referenceParametrageVilleDepartementIdForeign">
2.19. Reference parametrage__ville_departement_id_foreign            </h3>
            <h4>
2.19.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableParametrageDepartement">
parametrage__departement                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableParametrageVille">
parametrage__ville                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
departement_id                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
departement_id                    </td>
                </tr>
            </table>
            <h3 id="referenceSalleAgenceIdVilleForeign">
2.20. Reference salle__agence_id_ville_foreign            </h3>
            <h4>
2.20.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableParametrageVille">
parametrage__ville                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableSalleAgence">
salle__agence                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_ville                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_ville                    </td>
                </tr>
            </table>
            <h3 id="referenceSalleBatimentIdAgenceForeign">
2.21. Reference salle__batiment_id_agence_foreign            </h3>
            <h4>
2.21.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableSalleAgence">
salle__agence                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableSalleBatiment">
salle__batiment                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_agence                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_agence                    </td>
                </tr>
            </table>
            <h3 id="referenceSallePosessionMaterielIdMaterielForeign">
2.22. Reference salle__posession_materiel_id_materiel_foreign            </h3>
            <h4>
2.22.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableSalleMaterielType">
salle__materiel_type                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableSallePosessionMateriel">
salle__posession_materiel                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_materiel                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_materiel                    </td>
                </tr>
            </table>
            <h3 id="referenceSallePosessionMaterielIdSalleForeign">
2.23. Reference salle__posession_materiel_id_salle_foreign            </h3>
            <h4>
2.23.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableSalleSalle">
salle__salle                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableSallePosessionMateriel">
salle__posession_materiel                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_salle                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_salle                    </td>
                </tr>
            </table>
            <h3 id="referenceSalleReservationCodeEmployeForeign">
2.24. Reference salle__reservation_code_employe_foreign            </h3>
            <h4>
2.24.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableEmployeEmploye">
employe__employe                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableSalleReservation">
salle__reservation                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
code_employe                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
code_employe                    </td>
                </tr>
            </table>
            <h3 id="referenceSalleReservationIdExtraForeign">
2.25. Reference salle__reservation_id_extra_foreign            </h3>
            <h4>
2.25.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableSalleExtra">
salle__extra                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableSalleReservation">
salle__reservation                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_extra                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_extra                    </td>
                </tr>
            </table>
            <h3 id="referenceSalleReservationIdSalleForeign">
2.26. Reference salle__reservation_id_salle_foreign            </h3>
            <h4>
2.26.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableSalleSalle">
salle__salle                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableSalleReservation">
salle__reservation                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_salle                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_salle                    </td>
                </tr>
            </table>
            <h3 id="referenceSalleSalleIdBatimentForeign">
2.27. Reference salle__salle_id_batiment_foreign            </h3>
            <h4>
2.27.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableSalleBatiment">
salle__batiment                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableSalleSalle">
salle__salle                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_batiment                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_batiment                    </td>
                </tr>
            </table>
            <h3 id="referenceVisiteMedicamentIdFamilleForeign">
2.28. Reference visite__medicament_id_famille_foreign            </h3>
            <h4>
2.28.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableVisiteFamilleMedicament">
visite__famille_medicament                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableVisiteMedicament">
visite__medicament                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_famille                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_famille                    </td>
                </tr>
            </table>
            <h3 id="referenceVisitePraticienIdVilleForeign">
2.29. Reference visite__praticien_id_ville_foreign            </h3>
            <h4>
2.29.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableParametrageVille">
parametrage__ville                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableVisitePraticien">
visite__praticien                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_ville                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_ville                    </td>
                </tr>
            </table>
            <h3 id="referenceVisitePresentationMedicamentIdMedicamentForeign">
2.30. Reference visite__presentation_medicament_id_medicament_foreign            </h3>
            <h4>
2.30.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableVisiteMedicament">
visite__medicament                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableVisitePresentationMedicament">
visite__presentation_medicament                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_medicament                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_medicament                    </td>
                </tr>
            </table>
            <h3 id="referenceVisitePresentationMedicamentIdVisiteForeign">
2.31. Reference visite__presentation_medicament_id_visite_foreign            </h3>
            <h4>
2.31.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableVisiteVisite">
visite__visite                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableVisitePresentationMedicament">
visite__presentation_medicament                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_visite                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_visite                    </td>
                </tr>
            </table>
            <h3 id="referenceVisiteVisiteCodeEmployeForeign">
2.32. Reference visite__visite_code_employe_foreign            </h3>
            <h4>
2.32.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableEmployeEmploye">
employe__employe                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableVisiteVisite">
visite__visite                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
code_employe                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
code_employe                    </td>
                </tr>
            </table>
            <h3 id="referenceVisiteVisiteIdPraticienForeign">
2.33. Reference visite__visite_id_praticien_foreign            </h3>
            <h4>
2.33.1. Champ            </h4>
            <table class="referencesTable">
                <tr>
                    <td>
                        <a href="#tableVisitePraticien">
visite__praticien                        </a>
                    </td>
                    <td>
0..*                    </td>
                    <td>
                        <a href="#tableVisiteVisite">
visite__visite                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
id_praticien                    </td>
                    <td>
&lt;-&gt;                    </td>
                    <td>
id_praticien                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
