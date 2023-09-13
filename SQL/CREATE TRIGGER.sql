CREATE TRIGGER insert_employe AFTER INSERT ON employe
    FOR EACH ROW
    BEGIN
        DECLARE salaire INT;
        SET salaire = NEW.salaire;
        IF salaire<10000 THEN
            SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Un problème est survenu. Règle de gestion altitude !';
        END IF;
END;

insert into employe (noemp, nom, prenom, salaire, dateemb, titre, nodep)
values (101, 'toto', 'toto', 800, '2023-09-01', 'chef', 45);