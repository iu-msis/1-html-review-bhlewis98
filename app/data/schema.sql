CREATE DATABASE IF NOT EXISTS msishw;
USE msishw;

DROP TABLE IF EXISTS books;
CREATE TABLE books (
	Title varchar(48)  NOT NULL,
    Author varchar(48) NOT NULL,
    Pub_Year INT NOT NULL, 
    Publisher varchar(48) NOT NULL,
    Page_num INT NOT NULL,
   MSRP varchar(48) NOT NULL);

INSERT INTO books (Title, Author, Pub_Year, Publisher, Page_num, MSRP) VALUES 
('Hunger Games','Suzanne Collins',2008,'Scholastic',374,'$25'),
('Fallen Angels','Walter Myers',1998,'Scholastic',323,'$20'),
('Rich Dad Poor Dad','Robert Kiyosaki',2000,'Warner',336,'$18'),
('Bomber Mafia','Malcom Gladwell',2021,	'Little, Brown & C0',256,'$28');