create or replace table courrier(
    id int auto_increment primary key,
    n varchar(100) default '',
    reference varchar(100) default '',
    annexe varchar(100) default '',
    mvt varchar(1),
    expediteur varchar(500) default '',
    destinataire varchar(500) default '',
    resume text,
    obs text,
    creation varchar(100) default '',
    create_at datetime default current_timestamp,
    update_at datetime default current_timestamp on update current_timestamp
);


INSERT INTO courrier(n,REFERENCE,annexe,mvt,expediteur,RESUME, obs,creation)
SELECT n,REFERENCE,annexes,'E',expediteur,RESUME, observation,creation FROM e_juin;

INSERT INTO courrier(n,REFERENCE,annexe,mvt,destinataire,RESUME, obs,creation)
SELECT n,REFERENCE,annexes,'S',destinataire,RESUME, observation,creation FROM s_juin;

INSERT INTO courrier(n,REFERENCE,annexe,mvt,expediteur,RESUME, obs,creation)
SELECT n,REFERENCE,annexes,'E',expediteur,RESUME, observation,creation FROM e_juillet;

INSERT INTO courrier(n,REFERENCE,annexe,mvt,destinataire,RESUME, obs,creation)
SELECT n,REFERENCE,annexes,'S',destinataire,RESUME, observation,creation FROM s_juillet;