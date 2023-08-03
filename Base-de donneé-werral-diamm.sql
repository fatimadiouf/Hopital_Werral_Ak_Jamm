CREATE DATABASE IF NOT EXISTS Hopital;
USE Hopital ;
#DATETIME YYYY-DD-MM HH:MM:SS
-- Création de table Medecin
DROP TABLE IF EXISTS `Medecin`;
CREATE TABLE Medecin(
	Id_Medecin int PRIMARY KEY,
	Nom_Medecin VARCHAR(15) NOT NULL,
	Prenom_Medecin VARCHAR(15) NOT NULL,
	Spécialité_Medecin CHAR(100)
-- Patient_Chargé VARCHAR(15) NOT NULL
);
insert into Medecin (Id_Medecin,Nom_Medecin,Prenom_Medecin,Spécialité_Medecin)
value(1,'Fatima','Diouf','Ophtamologue');
insert into Medecin (Id_Medecin,Nom_Medecin,Prenom_Medecin,Spécialité_Medecin)
value(2,'Bamba','Diouf','Ophtamologue');
-- insert into Medecin (Id_Medecin,Nom_Medecin,Prenom_Medecin,Specialité_Medecin)
-- value(3,'El hadji','Diouf','Généraliste');
insert into Medecin(Id_Medecin,Nom_Medecin,Prenom_Medecin,Spécialité_Medecin)
value(4,'Maimouna','Diouf','Sage Femme');
insert into Medecin (Id_Medecin,Nom_Medecin,Prenom_Medecin,Spécialité_Medecin)
value(5,'Khady','Diouf','Sage Femme');
insert into Medecin (Id_Medecin,Nom_Medecin,Prenom_Medecin,Spécialité_Medecin)
value(6,'Mourtala','Diouf','Dérmatologue');
insert into Medecin (Id_Medecin,Nom_Medecin,Prenom_Medecin,Spécialité_Medecin)
value(7,'Malick','Diouf','Dentist');
insert into Medecin (Id_Medecin,Nom_Medecin,Prenom_Medecin,Spécialité_Medecin)
value(8,'Fatoumata','Ndiaye','Sage Femme');
insert into Medecin (Id_Medecin,Nom_Medecin,Prenom_Medecin,Spécialité_Medecin)
value(11,'Moustapha','Diouf','Dérmatologue');
insert into Medecin (Id_Medecin,Nom_Medecin,Prenom_Medecin,Spécialité_Medecin)
value(12,'Moukhamed','Diouf','Dentist');
--  Création de table patient
DROP TABLE IF EXISTS `patient`;
CREATE TABLE Patient(
Id_Patient  int PRIMARY key,
nom_Patient  VARCHAR(15) NOT NULL,
Prenom_Patient  VARCHAR(15) NOT NULL,
mail_patient VARCHAR(15) NOT NULL,
tel_patient VARCHAR(15) NOT NULL,
date_naissance_patient VARCHAR(15) NOT NULL

);
DROP TABLE IF EXISTS `Infirmier`;
CREATE TABLE Infirmier(
	Id_Infirmier int PRIMARY KEY,
	Nom_Infirmier VARCHAR(15) NOT NULL,
	Prenom_Infirmier VARCHAR(15) NOT NULL
);
DROP TABLE IF EXISTS `Personel_N_S`;
--  Création de table personnel non soignant
CREATE TABLE Personel_N_S(
Id_Personel_N_S  int PRIMARY key,
Nom_Personel_N_S VARCHAR(15) NOT NULL,
Prenom_Personel_N_S  VARCHAR(15) NOT NULL,
Post_Personel_N_S VARCHAR(15) NOT NULL
);
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(1,'Coumba','Diop','receptioniste');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(2,'Bamba','Fall','comptable');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(3,'El hadji','Faye','comptable');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(4,'Maimouna','sene','intendant');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(5,'Khady','Sangaré',' receptioniste');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(6,'Mourtala','Sow','comptable');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(7,'Aliou','Diakhaté','comptable');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(8,'Fatoumata','Ndiaye','comptable');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(9,'Claudine','Diouf','receptioniste');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(10,'Goumyé','Diouf','intendant');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(11,'Marietou','Badiane','intendant');
insert into Personel_N_S (Id_Personel_N_S,Nom_Personel_N_S,Prenom_Personel_N_S,Post_Personel_N_S)
value(12,'Akhmadou Bamba','Mbacké','comptable');
DROP TABLE IF EXISTS `Materiels`;
--  Création de table materiels
CREATE TABLE Materiels(
Id_Materiels int PRIMARY KEY,
Chambres  int NOT NULL,
Num_Lit int  NOT NULL,
Num_Armaoire int  NOT NULL,
Mat_Medicaux  VARCHAR(15) NOT NULL
);
DROP TABLE IF EXISTS `comptable`;
--  Création de table comptable
CREATE TABLE comptable(
Id_comptable int PRIMARY KEY,
Nom_comptable VARCHAR(15) NOT NULL,
Prenom_comptable VARCHAR(15) NOT NULL
);
DROP TABLE IF EXISTS `récéptioniste`;
--  Création de table récéptionistepatient
CREATE TABLE récéptioniste(
Id_récéptioniste int PRIMARY KEY,
Nom_récéptioniste VARCHAR(15) NOT NULL,
Prenom_récéptioniste VARCHAR(15) NOT NULL
);
DROP TABLE IF EXISTS `payement`;
--  Création de table payement
CREATE TABLE payement(
Id_payement  int PRIMARY KEY, 
Mottant int  NOT NULL,
Id_comptable VARCHAR(45)   NOT NULL REFERENCES  comptable(Id_comptable) ,
Mat_Medicaux  VARCHAR(15) NOT NULL
);
DROP TABLE IF EXISTS `hospitalisation`;
--  Création de table hospitalisation
CREATE TABLE hospitalisation(
Id_hospitalisé int PRIMARY KEY,
Nom_hospitalisé VARCHAR(15) NOT NULL,
Prenom_hospitalisé VARCHAR(15) NOT NULL,
med_en_charge  VARCHAR(15) NOT NULL,
Num_chambre_hospitalisation int NOT NULL,
Num_Salle_Entrée int NOT NULL,
Num_Lit_occupé int NOT NULL,
Medic_Prescrits VARCHAR(15) NOT NULL,
Id_Med VARCHAR(45)   NOT NULL REFERENCES  Medecin(Id_Med),
Date_Entrée date ,
Date_De_Sortie date
)

