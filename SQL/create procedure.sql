-- Active: 1664351913126@@127.0.0.1@3306@exemple

create view toto
as
select * from employe;

select noemp, nom, prenom 
from toto
where noemp=1;

delimiter $

create procedure titi()
begin
select * from employe;
end$

delimiter;

call titi();


drop procedure liste_employe;

create procedure liste_employe(ti varchar(50))
begin
    select * from employe where titre=ti;
end;

call liste_employe('secretaire');


