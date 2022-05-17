-- création de la  base de données: --
create database PizzaJeff;
-- utilisation de la BDD --
use PizzaJeff;
-- création des entitées: --
create table Produits(
	id_prod int auto_increment not null primary key,
    nom_prod varchar(50),
    ingredient_prod varchar(50) null,
    prix_prod varchar(10),
    cat_prod varchar(50) null,
    image_prod varchar(100) null,
    id_pate int null,
    id_taille int null
)engine=innodb;

create table Ingredients(
	id_ingredient int auto_increment not null primary key,
	nom_ingredient varchar(50),
	id_prod int null
)engine=InnoDB;

create table Pates(
	id_pate int auto_increment not null primary key,
    nom_pates varchar (15)
)engine=InnoDB;
    
create table Tailles(
	id_taille int auto_increment not null primary key,
	nom_taille varchar(15)
)engine=InnoDB;

create table Livraisons(
	id_livraison int auto_increment not null primary key,
    type_livraison varchar(15)
)engine=InnoDB;

create table Commandes(
	id_commande int auto_increment not null primary key,
    mail_commande varchar(100),
    tel_compte varchar(50),
    adresse_commande varchar(100),
    date_commande datetime,
	id_livraison int
)engine=InnoDB;
	
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

create table Articles(
	id_article int auto_increment not null primary key,
    titre_article varchar(50),
    contenu_article text,
    img_article varchar(100) null
)engine=InnoDB;

create table Commentaires(
	id_commentaires int auto_increment not null primary key,
    auteur_commentaire varchar(20) not null,
    contenu_commentaire text,
    id_article int null
)engine=InnoDB;

-- création des table d'association --
create table Contenir(
	id_prod int,
    id_ingredient int,
    primary key(id_prod, id_ingredient)
)engine=Innodb;

create table Commander(
	id_prod int,
    id_commande int, 
    qtx smallint,
    primary key(id_commande, id_prod)
)engine=InnoDB;

-- contrainte et foreign key --
alter table Produits
add constraint Produits_fk_Tailles
foreign key(id_taille)
references Tailles(id_taille); 

alter table Produits
add constraint Produits_fk_Pates
foreign key(id_pate)
references Pates(id_pate); 

alter table Ingredients
add constraint Ingredients_fk_Produits
foreign key(id_prod)
references Produits(id_prod); 

alter table Commandes 
add constraint Commande_fk_Livraisons
foreign key(id_livraison)
references Livraisons(id_livraison);

alter table Comptes
add constraint Comptes_fk_Droits
foreign key(id_droit)
references Droits(id_droit);

alter table Commentaires
add constraint Comommentaires_fk_Articles
foreign key(id_article)
references Articles(id_article);

alter table Commander
add constraint Commander_fk_Produits
foreign key(id_prod)
references Produits(id_prod);

alter table Commander
add constraint Commander_fk_Commandes
foreign key(id_commande)
references Commandes(id_commande);

alter table Contenir
add constraint Contenir_fk_Ingredients
foreign key(id_ingredient)
references Ingredients(id_ingredient);

alter table Contenir
add constraint Contenir_fk_Produits
foreign key(id_prod)
references Produits(id_prod);

