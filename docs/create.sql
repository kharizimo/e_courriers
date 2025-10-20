create table groupe_user(
    id serial primary key,
    lib varchar(100),
    create_at datetime default current_timestamp
);
create table user(
    id serial primary key,
    nom varchar(100),
    prenom varchar(100),
    pwd varchar(100),
    strategies text,
    statut varchar(100),
    etat varchar(100),
    create_at datetime default current_timestamp
);
create table GU(
    groupe_id int references groupe_user(id),
    user_id int references user(id),
    create_at datetime default current_timestamp
);
create table type_courrier(
    id serial primary key,
    lib varchar(100)
);
create table courrier(
    id serial primary key,
    type_id int references type_courrier(id),
    create_at datetime default current_timestamp,
    update_at datetime default current_timestamp on update current_timestamp,
    num_ext int,
    num_int int,
    annexe boolean,
    sujet varchar(100),
    resume text,
    obs text
);
create table groupe_courrier(
    id serial primary key,
    lib varchar(100)
);
create table GC(
    courrier_id int references courrier(id),
    groupe_id int references groupe_courrier(id),
    create_at datetime default current_timestamp
);
create table submits(
    id serial primary key,
    courrier_id int references courrier(id),
    submit_id int,
    submit_type varchar(100), -- groupe/user
    obs text
);
create table notes(
    id serial primary key,
    courrier_id int references courrier(id),
    user_id int references user(id),
    create_at datetime default current_timestamp,
    texte text
);
create table vues(
    id serial primary key,
    courrier_id int references courrier(id),
    user_id int references user(id),
    create_at datetime default current_timestamp

);
create table ref_courrier(
    id serial primary key,
    courrier_id int references courrier(id),
    ref_id int references courrier(id),
    create_at datetime default current_timestamp
);