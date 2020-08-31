/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  8/30/2020 10:45:27 AM                    */
/*==============================================================*/


drop table if exists Admin_locar;

drop table if exists Categorie;

drop table if exists Client;

drop table if exists Favoris;

drop table if exists Liste_Noir;

drop table if exists Marque;

drop table if exists Reservation;

drop table if exists Voiture;

/*==============================================================*/
/* Table : Admin_locar                                          */
/*==============================================================*/
create table Admin_locar
(
   id_Admin             int not null,
   Email_Ad             varchar(254),
   MP_Ad                varchar(254),
   Nom_Ad               varchar(254),
   Prenom_Ad            varchar(254),
   primary key (id_Admin)
);

/*==============================================================*/
/* Table : Categorie                                            */
/*==============================================================*/
create table Categorie
(
   id_cat               int not null,
   libelle              varchar(254),
   primary key (id_cat)
);

/*==============================================================*/
/* Table : Client                                               */
/*==============================================================*/
create table Client
(
   id_Utilisateur       int not null,
   Nom                  varchar(254),
   Prenom               varchar(254),
   Telephone            varchar(254),
   Email                varchar(254),
   Image_util           varchar(254),
   Type_util            varchar(254),
   Annee                int,
   Mois                 int,
   Jour                 int,
   MP                   varchar(254),
   primary key (id_Utilisateur)
);

/*==============================================================*/
/* Table : Favoris                                              */
/*==============================================================*/
create table Favoris
(
   id_Utilisateur       int,
   id_Admin             int,
   id_Fvr               int not null,
   primary key (id_Fvr)
);

/*==============================================================*/
/* Table : Liste_Noir                                           */
/*==============================================================*/
create table Liste_Noir
(
   id_Utilisateur       int,
   id_Admin             int,
   id_LN                int not null,
   primary key (id_LN)
);

/*==============================================================*/
/* Table : Marque                                               */
/*==============================================================*/
create table Marque
(
   id_Marque            int not null,
   libelle              varchar(254),
   primary key (id_Marque)
);

/*==============================================================*/
/* Table : Reservation                                          */
/*==============================================================*/
create table Reservation
(
   id_Utilisateur       int,
   id_V                 int,
   id_Res               int not null,
   date_Depart          datetime,
   date_Retour          datetime,
   Date_res             datetime,
   primary key (id_Res)
);

/*==============================================================*/
/* Table : Voiture                                              */
/*==============================================================*/
create table Voiture
(
   id_cat               int not null,
   id_Marque            int,
   id_V                 int not null,
   Modele               varchar(254),
   descrip              varchar(254),
   Nb_portes            int,
   bagage               int,
   clim                 varchar(254),
   transmission         varchar(254),
   prix                 int,
   carburant            varchar(254),
   img_v                varchar(254),
   primary key (id_V)
);

alter table Favoris add constraint FK_Association_5 foreign key (id_Utilisateur)
      references Client (id_Utilisateur) on delete restrict on update restrict;

alter table Favoris add constraint FK_Association_8 foreign key (id_Admin)
      references Admin_locar (id_Admin) on delete restrict on update restrict;

alter table Liste_Noir add constraint FK_Association_6 foreign key (id_Utilisateur)
      references Client (id_Utilisateur) on delete restrict on update restrict;

alter table Liste_Noir add constraint FK_Association_7 foreign key (id_Admin)
      references Admin_locar (id_Admin) on delete restrict on update restrict;

alter table Reservation add constraint FK_Association_1 foreign key (id_Utilisateur)
      references Client (id_Utilisateur) on delete restrict on update restrict;

alter table Reservation add constraint FK_Association_2 foreign key (id_V)
      references Voiture (id_V) on delete restrict on update restrict;

alter table Voiture add constraint FK_Association_3 foreign key (id_Marque)
      references Marque (id_Marque) on delete restrict on update restrict;

alter table Voiture add constraint FK_Association_4 foreign key (id_cat)
      references Categorie (id_cat) on delete restrict on update restrict;

