create database controlassistance;
use controlassistance;

create table users(
    idUser varchar(8) primary key,
    name varchar(40) not null,
    lastname varchar(40) not null,
    email varchar(40) not null,
    password varchar(40) not null,
    rol char(30) not null,
    created_at datetime not null,
    updated_at datetime not null
) engine=innodb;

create table events(
    idEvent varchar(8) primary key,
    nameEvent varchar(80) not null,
    description varchar(40) not null,
    date datetime not null,
    price decimal(10,2) not null,  
    created_at datetime not null,
    updated_at datetime not null
) engine=innodb;

create table participants(
    idParticipant varchar(8) primary key,
    name varchar(40) not null,
    lastname varchar(40) not null,
    email varchar(40) not null,
    phone varchar(40) not null,
    idEvent varchar(8) not null,
    created_at datetime not null,
    updated_at datetime not null,
    foreign key (idEvent) references events(idEvent)
) engine=innodb;

create table payments(
    idPayment varchar(8) primary key,
    idParticipant varchar(8) not null,
    idEvent varchar(8) not null,
    amount decimal(10,2) not null,
    extensionImage varchar(10) not null,
    created_at datetime not null,
    updated_at datetime not null,
    foreign key (idParticipant) references participants(idParticipant),
    foreign key (idEvent) references events(idEvent)
) engine=innodb;
