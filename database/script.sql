create database controlassistance;
use controlassistance;

create table tusers(
    idUser varchar(8) primary key,
    name varchar(40) not null,
    lastname varchar(40) not null,
    email varchar(40) not null,
    password varchar(40) not null,
    rol char(30) not null,
    created_at datetime not null,
    updated_at datetime not null
) engine=innodb;

create table tevents(
    idEvent varchar(8) primary key,
    nameEvent varchar(80) not null,
    description varchar(40) not null,
    date datetime not null,
    price decimal(10,2) not null,  
    created_at datetime not null,
    updated_at datetime not null
) engine=innodb;

create table tparticipants(
    idParticipant varchar(8) primary key,
    name varchar(40) not null,
    lastname varchar(40) not null,
    email varchar(40) not null,
    phone varchar(40) not null,
    idEvent varchar(8) not null,
    created_at datetime not null,
    updated_at datetime not null,
    foreign key (idEvent) references tevents(idEvent)
) engine=innodb;

create table tpayments(
    idPayment varchar(8) primary key,
    idParticipant varchar(8) not null,
    idEvent varchar(8) not null,
    amount decimal(10,2) not null,
    extensionImage varchar(10) not null,
    created_at datetime not null,
    updated_at datetime not null,
    foreign key (idParticipant) references tparticipants(idParticipant),
    foreign key (idEvent) references tevents(idEvent)
) engine=innodb;
