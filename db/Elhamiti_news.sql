<<<<<<< HEAD
=======
DROP DATABASE IF EXISTS elhamiti_news;
Create Database elhamiti_news;
Use elhamiti_news;

/*Create User elhamiti_news@localhost IDENTIFIED BY '1234';
Grant ALL Privileges ON elhamiti_news.* TO elhamiti_news@localhost;
*/
Drop table IF exists Secciones;

Create Table Secciones (
ID_seccion int auto_increment primary key,
Seccion_noticia ENUM('Ciberseguridad','Tecnologia','IA','Hardware','Software', 'Todos')
);

DROP table  IF EXISTS Noticias;

Create Table Noticias (
	ID_noticia int auto_increment primary key,
    Contenido_noticia text,
    Fecha_noticia date,
    ID_seccion int,
    Titulo_noticia Char(100),
    FOREIGN KEY(ID_seccion) REFERENCES Secciones(ID_Seccion) ON UPDATE CASCADE ON DELETE SET NULL 
    );








>>>>>>> refs/remotes/origin/main
