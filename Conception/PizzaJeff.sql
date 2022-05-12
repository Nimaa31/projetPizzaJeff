-- création de la  base de données: --
create database PizzaJeff;
-- utilisation de la BDD --
use PizzaJeff;
-- création des entitées: --
create table Produit(
	id_prod int auto_increment not null primary key,
    nom_prod varchar(50),
    ingredient_prod varchar(50) null,
    prix_prod decimal(15.2),
    cat_prod varchar(50) null
)engine=innodb;

create table Ingredients(
	id_ingredient int auto_increment not null primary key,
	nom_ingredient varchar(50),
	id_prod int null
)engine=InnoDB;

create table Commandes(
	id_commande int auto_increment not null primary key,
    mail_commande varchar(100),
    tel_compte varchar(50),
    adresse_commande varchar(100),
    date_commande datetime
)engine=innodb;
	
create table Comptes(
	id_compte int auto_increment not null primary key,
    mail_compte varchar(50) null,
    tel_compte varchar(50) null,
    adresse_compte varchar(100),
    id_droit int null
)engine=InnoDB;

create table Droits(
	id_droit int auto_increment not null primary key,
    nom_droit varchar(50) null
)engine=InnoDB;

create table Reservations(
	id_reservation int auto_increment not null primary key,
    nom_reservation varchar(50),
    nbr_reservation smallint,
    date_reservation datetime,
    detail_reservation varchar(255) null
)engine=InnoDB;