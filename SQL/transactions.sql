select * from dept;
delete from employe;

start transaction;

delete from dept where nodept=50;

commit;
rollback;