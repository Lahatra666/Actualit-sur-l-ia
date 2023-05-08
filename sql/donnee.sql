Categorie(idcategorie,nomCategorie)
Article(idAricle,idcategorie,titre,image,description)

CREATE OR REPLACE VIEW v_infoarticle as select idAricle,Categorie.idcategorie,titre,image,description,nomCategorie
from Article join Categorie on Article.idcategorie=Categorie.idcategorie;

INSERT INTO admins(emailadmin,mdpadmin) VALUES
('admin@gmail.com','admin');

INSERT INTO Categories(nomCategorie) VALUES
('IA faible ou étroite'),
('IA forte (Strong AI)'),
('apprentissage automatique (Machine Learning)'),
('réseaux de neurones (Neural Networks)'),
('robotique')
;

INSERT INTO articles(idcategorie,titre,image,description) VALUES
(3,'Watson','articles/155843346208.png','C est un système d  IA développé par IBM pour répondre à des questions en langage naturel. Watson utilise des techniques d  apprentissage en profondeur et d  analyse de données pour comprendre les questions des utilisateurs et fournir des réponses précises. Il est utilisé dans plusieurs domaines, notamment la médecine, la finance et la vente au détail. Catégorie : Traitement du Langage Naturel (NLP) et Analyse de Données.');