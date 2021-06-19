create database Universitati;
USE `Universitati`;

create table Universitate
(
	id_universitate integer primary key,
    nume_universitate varchar(100) not null,
    judet varchar(100) not null,
    oras varchar(100) not null
);
insert into Universitate(id_universitate,nume_universitate,judet,oras) values (1,'Universitatea București','București','București');
insert into Universitate(id_universitate,nume_universitate,judet,oras) values (2,'Universitatea Babes-Bolyai','Cluj','Cluj-Napoca');
insert into Universitate(id_universitate,nume_universitate,judet,oras) values (3,'Universitatea Transilvania','Brașov','Brașov');
insert into Universitate(id_universitate,nume_universitate,judet,oras) values (4,'Universitatea de Vest din Timișoara','Timiș','Timișoara');
create table Facultate
(
	id_facultate integer primary key,
    domeniu_facultate varchar(200),
    adresa varchar(200) not null,
    nrSali int not null,
    id_universitate integer not null,
    FOREIGN KEY (id_universitate) REFERENCES Universitate(id_universitate)universitate
);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (1,'Facultatea de Matematica-Informatica','Strada Academiei 14',50,1);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (2,'Facultatea de Biologie','Grădina Botanică, Intrarea Portocalelor 3',45,1);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (3,'Facultatea de Istorie','Bulevardul Regina Elisabeta 4-12',35,1);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (4,'Facultatea de Matematica-Informatica','Str. Mihail Kogălniceanu, nr. 1',50,2);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (5,'Facultatea de Biologie și Geologie','Str. Republicii (Gh. Bilașcu) nr.44',25,2);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (6,'Facultatea de Litere','Str. Horea nr. 31',32,2);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (7,'Facultatea de Inginerie mecanică','Str. Politehnicii nr. 1',23,3);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (8,'Facultatea de Drept','Str. Eroilor nr. 25',30,3);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (9,'Facultatea de Matematică și Informatică','Str. Iuliu Maniu, nr. 50',27,3);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (10,'Facultatea de Drept','Blvd. Eroilor 9A Timisoara',40,4);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (11,'Facultatea de Chimie, Biologie, Geografie','Str. Pestalozzi 16A',37,4);
insert into Facultate(id_facultate,domeniu_facultate,adresa,nrSali,id_universitate) values (12,'Facultatea de Litere si Istorie','Bd. Vasile Pârvan, nr 4',35,4);

create table Domeniu
(
	id_domeniu integer primary key,
    nume_domeniu varchar(50) not null,
    NRlocuri_domeniu int not null,
    locuriTaxa_domeniu int not null,
    locuriBuget_domeniu int not null,
    durata_licenta int not null,
    id_facultate integer not null,
    FOREIGN KEY (id_facultate) REFERENCES Facultate(id_facultate)
);

insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (1,'Matematica',200,80,120,4,1);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (2,'Informatica',250,100,150,3,1);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (3,'Biochimie si Biologie Moleculara',150,60,90,4,2);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (4,'Botanică și Microbiologie',130,50,80,3,2);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (5,'Istorie Antică, Arheologie și Istoria Artei',210,80,130,4,3);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (6,'Relații Internaționale şi Istorie Universală',230,100,130,3,3);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (7,'Matematica-Informatica',300,100,200,4,4);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (8,'Informatica',280,100,180,3,4);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (9,'Taxonomie şi Ecologie',200,60,140,4,5);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (10,'Biologie Moleculara si Biotehnologie',120,40,80,3,5);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (11,'Limbi și literaturi moderne',150,50,100,4,6);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (12,'Studii românești',125,45,80,3,6);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (13,'Autovehicule rutiere',200,80,120,4,7);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (14,'Ingineria transporturilor si traficului',150,50,100,3,7);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (15,'Drept privat',100,25,75,4,8);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (16,'Drept public',120,40,80,4,8);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (17,'Informatica aplicata',250,80,170,4,9);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (18,'Matematica-Informatica',300,100,200,3,9);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (19,'Drept public',110,30,80,4,10);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (20,'Drept privat',80,20,60,4,10);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (21,'Biologie - Chimie',185,80,105,4,11);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (22,'Geografie',215,75,140,3,11);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (23,'Limbi și literaturi moderne',155,55,100,4,12);
insert into Domeniu(id_domeniu,nume_domeniu,NRlocuri_domeniu,locuriTaxa_domeniu,locuriBuget_domeniu,durata_licenta,id_facultate) values (24,'Studii românești',130,30,100,3,12);

create table Profesor
(
	id_profesor integer primary key,
    nume_profesor varchar(50) not null,
    telefon_profesor varchar(50) not null unique,
    email_profesor varchar(50) not null unique,
    salariu_profesor int not null,
    id_facultate integer not null,
    FOREIGN KEY (id_facultate) REFERENCES Facultate(id_facultate)
);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (1,'Dragoiu Marcel','0768 194 196','drg.marc@gmail.com',5000,1);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (2,'Ilin Dana','0763 213 196','ili.dana@gmail.com',5000,1);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (3,'Mihai Dorin','0768 214 196','m.dorin@gmail.com',5000,2);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (4,'Serbei Andreea','07631 231 196','serb.and@gmail.com',4000,2);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (5,'Serban Alexandru','0721 412 132','serb.alx@gmail.com',10000,3);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (6,'Ionel Mircea','0768 194 214','ionel.m@gmail.com',6500,3);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (7,'Dragnea Cornel','0768 421 146','cor.drg@gmail.com',5500,4);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (8,'Mituc Ion','0768 114 194','mi.ion@gmail.com',5000,4);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (9,'Napar Ana','0768 414 196','napar.ana@gmail.com',5200,5);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (10,'Panescu Alexandra','0742 194 106','pnc.ale@gmail.com',5300,5);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (11,'Pancescu Ioana','0768 214 176','panc.ioana@gmail.com',5000,6);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (12,'Ludovic Bogdan','0764 124 166','ldv.bogdan@gmail.com',5000,6);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (13,'Chelu Laurentiu','0764 156 154','chelu.flv@gmail.com',5500,7);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (14,'Badea Mihai','0765 819 416','bdea.mihai@gmail.com',4500,7);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (15,'Muntean Radu','0768 194 196','munt.radu@gmail.com',6000,8);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (16,'Costana Gabriela','0715 194 196','costea.gab@gmail.com',5700,8);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (17,'Mustea Eugen','0768 352 186','must.eug@gmail.com',4500,9);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (18,'Tinca Alin','0768 532 153','tinca.alin@gmail.com',5000,9);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (19,'Caciula Eugenia','0768 525 174','caciula.e@gmail.com',5800,10);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (20,'Cojocaru Adelina','0715 254 196','cojo.a@gmail.com',5000,10);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (21,'Sorescu Alexandra','0765 254 196','soresc.alexa@gmail.com',5400,11);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (22,'Marian Ovidiu','0766 852 596','marian.ovid@gmail.com',4300,11);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (23,'Aluas Marius','0763 144 196','al.marius@gmail.com',4800,12);
insert into Profesor(id_profesor,nume_profesor,telefon_profesor,email_profesor,salariu_profesor,id_facultate) values (24,'Antonescu Antonia','0768 131 196','ant.ant@gmail.com',4600,12);
create table Curs
(
	id_curs integer primary key not null,
    nume_curs varchar(50) not null,
    sala_curs varchar(50) not null,
    id_profesor integer not null,
    FOREIGN KEY (id_profesor) REFERENCES Profesor(id_profesor)
);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (1,'Analiza Matematica','1',1);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (2,'Algoritmi elementali','4',1);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (3,'Programarea Calculatoarelor','23',2);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (4,'Biologie generala','2',3);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (5,'Chimie generala','42',4);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (6,'Istoria antică a României','12',5);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (7,'Pre şi protoistoria României','21',6);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (8,'Istoria universală sec. XV-XVI','25',6);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (9,'Algebra si trigonometrie','2',7);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (10,'Programare orientata pe obiecte','12',7);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (11,'Baze de date','14',8);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (12,'Geologie ','3',9);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (13,'Biologie generala','6',10);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (14,'Citologie generală','17',11);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (15,'Literatura universala','7',12);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (16,'Electronică','9',13);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (17,'Bazele Ingineriei Electrice','5',14);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (18,'Drept civil. Teoria generala','11',15);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (19,'Drept constitutional','14',15);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (20,'Institutii publice','18',16);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (21,'Matematici Speciale','10',17);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (22,'Calcul numeric','20',18);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (23,'Utilizarea sistemelor de operare','13',18);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (24,'Sociologie juridica','2',19);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (25,'Etica si integritate academica','4',20);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (26,'Citologie vegetala','9',21);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (27,'Chimie generala','14',22);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (28,'Biologie animala','15',22);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (29,'Ecologie generală','19',22);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (30,'Istoria integrării europene','6',23);
insert into Curs(id_curs,nume_curs,sala_curs,id_profesor) values (31,'Literatura romana veche','7',24);

create table Student
(
	id_student integer primary key not null,
    nume_student varchar(50) not null,
    prenume_student varchar(50) not null,
    telefon_student varchar(50) not null unique,
    email_student varchar(50) not null unique,
    venitLunar_student int not null,
    id_domeniu integer not null,
    id_bursa integer not null,
    id_grupa integer not null,
    FOREIGN KEY (id_domeniu) REFERENCES Domeniu(id_domeniu),
    FOREIGN KEY (id_bursa) REFERENCES Bursa(id_bursa),
    FOREIGN KEY (id_grupa) REFERENCES Grupa(id_grupa)
);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'Mihai','Mihai','0792 234 421','mihai.mihai@gmail.com',700,1,11);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'Ionescu','Theodor','0723 241 421','ionescu.th@gmail.com',1500,1,12);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'William','Radu','0792 241 451','will.radu@gmail.com',2000,2,21);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'Pascu','Andrei','0782 291 421','pascu.andrei@gmail.com',1000,3,22);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'Andrescu','Ana','0792 241 401','and.ana@gmail.com',900,4,12);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'Stelian','Ionela','0711 266 421','stelian.i@gmail.com',800,6,31);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'Stramb','Cosmin','0796 246 421','stb.cosmin@gmail.com',700,5,21);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'Dabijescu','Stefan','0797 241 481','dbj.stefan@gmail.com',1100,8,11);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'Jigau','Stefania','0756 241 231','jig.stefania@gmail.com',1200,8,13);
insert into Student(id_student,nume_student,prenume_student,telefon_student,email_student,venitLunar_student,id_domeniu,id_grupa) 
values (1,'Mitulca','Robert','0733 241 411','mit.robert@gmail.com',1050,9,12);
create table Grupa
(
	id_grupa integer primary key not null,
    anul integer not null,
    nr_grupa int not null
);
select * from Grupa;
insert into Grupa(id_grupa,anul,nr_grupa) values (11,1,1);
insert into Grupa(id_grupa,anul,nr_grupa) values (12,1,2);
insert into Grupa(id_grupa,anul,nr_grupa) values (13,1,3);
insert into Grupa(id_grupa,anul,nr_grupa) values (14,1,4);

insert into Grupa(id_grupa,anul,nr_grupa) values (21,2,1);
insert into Grupa(id_grupa,anul,nr_grupa) values (22,2,2);
insert into Grupa(id_grupa,anul,nr_grupa) values (23,2,3);
insert into Grupa(id_grupa,anul,nr_grupa) values (24,2,4);

insert into Grupa(id_grupa,anul,nr_grupa) values (31,3,1);
insert into Grupa(id_grupa,anul,nr_grupa) values (32,3,2);
insert into Grupa(id_grupa,anul,nr_grupa) values (33,3,3);
insert into Grupa(id_grupa,anul,nr_grupa) values (34,3,4);

insert into Grupa(id_grupa,anul,nr_grupa) values (41,4,1);
insert into Grupa(id_grupa,anul,nr_grupa) values (42,4,2);
insert into Grupa(id_grupa,anul,nr_grupa) values (43,4,3);
insert into Grupa(id_grupa,anul,nr_grupa) values (44,4,4);
create table Bursa
(
	id_bursa integer primary key not null,
    tip_bursa varchar(50) not null,
    suma_bursa int not null
);
insert into Bursa (id_bursa,tip_bursa,suma_bursa) values(1,'Merit I',800);
insert into Bursa (id_bursa,tip_bursa,suma_bursa) values(2,'Merit II',750);
insert into Bursa (id_bursa,tip_bursa,suma_bursa) values(3,'Merit III',700);
insert into Bursa (id_bursa,tip_bursa,suma_bursa) values(4,'Sociala',1000);
select * from Bursa;
create table Sesiune
(
	id_sesiune integer primary key not null,
    an_sesiune int not null,
    id_examen integer not null,
    id_student integer not null,
    FOREIGN KEY (id_examen) REFERENCES Examen(id_examen),
    FOREIGN KEY (id_student) REFERENCES Student(id_student)
);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20202,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20202,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20202,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20202,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20202,2020,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2021,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2021,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2021,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2021,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20201,2021,1,1);
insert into Sesiune(id_sesiune,an_sesiune,id_examen,id_student) values(20202,2021,1,1);
create table Examen
(
	id_examen integer primary key not null,
    nume_examen varchar(50) not null,
    sala_examen varchar(50) not null,
    dataOra_examen  datetime not null
);
insert into Examen(/id_sesiune/id_examen,nume_examen,sala_examen,dataOra_examen) values(1,'Matematici Speciale','Amfiteatru parter','2020-02-19 9:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(2,'Algoritmi elementali','Amfiteatru etaj 2','2020-02-18 9:30:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(3,'Chimie generala','Amfiteatru etaj 1','2020-02-20 10:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(4,'Biologie generala','Sala 20','2020-02-05 9:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(5,'Ecologie generală','Sala 20','2020-02-07 8:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(6,'Geologie','Amfiteatru parter','2020-02-08 11:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(7,'Programare orientata pe obiecte','Sala 10','2020-02-11 9:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(8,'Baze de date','Sala 15','2020-02-15 13:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(9,'Electronică','Amfiteatru etaj 1','2020-02-15 9:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(10,'Bazele Ingineriei Electrice','Sala 20','2020-02-01 9:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(11,'Drept civil. Teoria generala','Amfiteatru parter','2020-01-08 13:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(12,'Drept constitutional','Sala 10','2020-02-19 9:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(13,'Sociologie juridica','1','2020-02-10 12:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(14,'Etica si integritate academica','Sala 20','2020-02-14 8:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(15,'Istoria antică a României','Sala 20','2020-02-13 9:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(16,'Pre şi protoistoria României','Amfiteatru etaj 2','2020-02-13 11:30:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(17,'Utilizarea sistemelor de operare','1','2020-02-11 14:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(18,'Calcul numeric','Sala 15','2020-02-17 18:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(19,'Istoria integrării europene','Sala 10','2020-02-22 15:00:00');
insert into Examen(id_examen,nume_examen,sala_examen,dataOra_examen) values(20,'Literatura romana veche','Amfiteatru etaj 1','2020-02-27 16:00:00');


