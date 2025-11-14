drop database if exists e_courrier;
create database e_courrier;
use e_courrier;

create table service(
    id serial primary key,
    lib varchar(100),
    service_id int references service(id),
    create_at datetime default current_timestamp,
    update_at datetime default current_timestamp on update current_timestamp
);
create table user(
    id serial primary key,
    service_id int references service(id),
    nom varchar(100),
    email varchar(100),
    pwd varchar(100),
    detail text
);
create table classeur(
    id serial primary key,
    service_id int references service(id),
    lib varchar(100),
    create_at datetime default current_timestamp,
    update_at datetime default current_timestamp on update current_timestamp
);
create table nature(
    id serial primary key,
    lib varchar(100)
);
create table courrier(
    id serial primary key,
    user_id int references user(id),
    nature_id int references nature(id),
    num int,
    annee int,
    subjet varchar(100),
    contact text,
    objet text,
    mouvement varchar(100),
    obs text,
    etat varchar(100),
    create_at datetime default current_timestamp,
    update_at datetime default current_timestamp on update current_timestamp
);
create table refs(
    id serial primary key,
    lib varchar(100),
    create_at datetime default current_timestamp,
    update_at datetime default current_timestamp on update current_timestamp
);
create table ref(
    refs_id int,
    courrier_id int,
    primary key(refs_id,courrier_id)
);
create table annotation(
    id serial primary key,
    courrier_id int references courrier(id),
    user_id int references user(id),
    contenu text,
    create_at datetime default current_timestamp,
    update_at datetime default current_timestamp on update current_timestamp
);
create table attache(
    id serial primary key,
    courrier_id int references courrier(id),
    obj varchar(100),
    obj_id int,
    lib varchar(100)
);