Categorie(idcategorie,nomCategorie)
Article(idAricle,idcategorie,titre,image,description)

CREATE OR REPLACE VIEW v_infoarticle as select idAricle,Categorie.idcategorie,titre,image,description,nomCategorie
from Article join Categorie on Article.idcategorie=Categorie.idcategorie;

INSERT INTO admins(emailadmin,mdpadmin) VALUES
('admin@gmail.com','admin');

INSERT INTO Categorie(nomCategorie) VALUES
('categorie1');