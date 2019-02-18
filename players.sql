CREATE DATABASE Players;
USE Players;

CREATE TABLE Players(
	Username varchar(20) PRIMARY KEY,
	Password varchar(20) NOT NULL,
	ID float,
	Email varchar(50),
	Name varchar(20),
	Score int
);
Insert into Players Values ('test','pass',1,'mas2g2@mail.missouri.edu','Test',0);
SELECT * FROM Players;

