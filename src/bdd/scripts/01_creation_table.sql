
drop table if exists PLANETE;
create table PLANETE(
    id int(6) not null auto_increment,
    nom varchar(50) not null,
    mass float (20),
    diameter float (20),
    density float (20),
    gravity float (20),
    escapeVelocity float (20),
    rotationPeriod float (20),
    lengthDay float (20),
    distanceFromSun float (20),
    meanTemperature float (20),
    surfacePressure float (20),
    numberMoons float (20),
    tags  varchar(100),
    primary key (id)
);

drop table if exists CONSTELLATION;
create table CONSTELLATION(
  id int(6) not null auto_increment,
  abv varchar(50) not null,
  nom varchar(50) not null,
  nomLatin varchar(50),
  ascensionDroite varchar (50),
  declinaison varchar (50),
  visibilite varchar (50),
  meridien varchar (50),
  nombreEtoile int(6),
  nombreEtoileBrillante int(6),
  etoileLaPlusBrillante varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci,
  etoileLaPlusProche varchar(50),
  tags  varchar(100),
  primary key (id)

);

drop table if exists UTILISATEUR;
create table UTILISATEUR(
	id int(6) not null auto_increment,
	identifiant varchar(50) not null,
	mdp varchar(50) not null,
	primary key (id)
);

drop table if exists FAVORIS;
create table FAVORIS(
	id int(10)  not null auto_increment,
	id_utilisateur int(6) not null,
	date_creation DATETIME,
	id_planete int(6) null,
	id_constellation int(6) null,
	primary key (id)
);


