




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

insert into membre(nom,prenom,email,tel,login,mdp,est_admin) values
("elfarkh","said","said@gmail.com","0656457851","user","user",0),
("elfarkh","younes","younes@gmail.com","0656457851","admin","admin",1);

insert into conference(theme ,date_debut ,date_fin , lieu , ville ,pays , site_web, description , est_valide ) values 
("theme1",2000-04-12,2000-04-12,"paris","universite","france","www.theme1.fr","blablablablabbbbb",1),
("theme2",2000-04-12,2000-04-12,"clermont","universite","france","www.theme2.fr","blablablablabbbbb",1),
("theme3",2000-04-12,2000-04-12,"jaude","universite","france","www.theme3.fr","blablablablabbbbb",1),
("theme4",2000-04-12,2000-04-12,"lyon","universite","france","www.theme4.fr","blablablablabbbbb",1);


insert into  conferencier( nom , prenom , fonction , email ,tel ,  site_web ) values 
("elùmkoudi","anass","directeur","anas@gmail.com","0624518495","www.theme.fr"),
("elfarkh","said","directeur","said@gmail.com","0624518495","www.theme.fr"),
("minouar","hamza","directeur","hamza@gmail.com","0624518495","www.theme.fr"),
("bouchefra","khalil","directeur","anakhalils@gmail.com","0624518495","www.theme.fr");

insert into animer values (1,1),(2,2),(3,3),(4,4);

insert into suivre values(1,1),(1,2),(2,1),(2,2),(3,1),(3,2),(4,1),(4,2);