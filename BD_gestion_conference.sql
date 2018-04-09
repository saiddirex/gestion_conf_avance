




create table conference(
    id_conference int(11) not null primary key auto_increment,                  
  theme varchar(200) NOT NULL,                            
  date_debut datetime NOT NULL,
  date_fin datetime NOT NULL,
  lieu varchar(50) NOT NULL, 
  ville varchar(50) NOT NULL,
  pays varchar(50) NOT NULL,
  site_web varchar(100) NOT NULL,
  description varchar(1000),
  est_valide  smallint
);


CREATE TABLE conferencier(
  id_conferencier int(11) not null primary key auto_increment,                         
  nom varchar(50) not null,                                      
  prenom varchar(50) not null,  
  fonction varchar(100),                                                           
  email varchar(100) not null,
  tel varchar(20), 
  site_web varchar(100)
);


CREATE TABLE animer (
  id_conference int(11),                  
  id_conferencier int(11),
  CONSTRAINT PK_ANIMER PRIMARY KEY (id_conference,id_conferencier),
  CONSTRAINT FK_ANIMER_CONFERENCE FOREIGN KEY (id_conference) REFERENCES CONFERENCE(id_conference),
  CONSTRAINT FK_ANIMER_CONFERENCIER FOREIGN KEY (id_conferencier) REFERENCES CONFERENCIER(id_conferencier)
);


CREATE TABLE membre(
  id_membre int(11) not null primary key auto_increment,                           
  nom varchar(50) not null,                                      
  prenom varchar(50) not null,                                                  
  email varchar(100) not null,
  tel varchar(20),
  login varchar(50),                                                         
  mdp varchar(200) NOT NULL,
  est_admin smallint
);


CREATE TABLE suivre (
  id_conference int(11),                  
  id_membre int(11),
  CONSTRAINT PK_suivre PRIMARY KEY (id_conference,id_membre),
  CONSTRAINT FK_suivre_CONFERENCE FOREIGN KEY (id_conference) REFERENCES CONFERENCE(id_conference),
  CONSTRAINT FK_suivre_membre FOREIGN KEY (id_membre) REFERENCES membre(id_membre)
);