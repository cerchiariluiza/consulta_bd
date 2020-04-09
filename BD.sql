create database text;
use test;

create table produtos (
produtoID int(11) not null auto_increment,
nomeproduto varchar(50) default null,
tempoentrega tinyint(3) default null,
precovenda decimal(10,2) default null,
imagempequena varchar(100),
primary key (produtoID))
engine=Innodb;

insert into produtos VALUES ('1', 'Chocolate Cookie', '15', '10', 'images/chocolate_cookies.jpg');
insert into produtos VALUES ('2', 'Menta Tie  ', '10', '10', 'images/cha_menta.jpg');
insert into produtos VALUES ('3', 'Baunilha Cream  ', '25', '10', 'images/creme.jpg');

