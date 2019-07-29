create database loja;
use loja;
create table usuario 
(
	id int auto_increment not null primary key,
	nome nvarchar(100) not null,
	login nvarchar(20) unique not null,
	senha nvarchar(32) not null,
	situacao enum ('Ativo','Inativo')
)engine=InnoDB;

create table categorias
(
   cod_categoria int auto_increment not null primary key,
   nome nvarchar(100) not null unique
)engine=InnoDB; 

insert into categorias (nome)
values('Camisetas');

insert into categorias (nome)
values('Informática');

insert into categorias (nome)
values('Bonés');

insert into categorias (nome)
values('Para Bebês');

insert into categorias (nome)
values('Posters');


create table produtos
(
   cod_produto int auto_increment not null primary key,
   cod_categoria int not null,
   nome nvarchar(100) not null unique,
   valor float(6,2) not null,
   destaque char(1),
   foto_principal nvarchar(500),
   quantidade int,
   descricao text,
   disponivel char(1)
)engine=InnoDB;

insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (2,'Samsung Galaxy S5',1599.99,'S',
'galaxy.jpg',10,'Celular Samsung Galaxy S5','S');

insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (2,'LG Nexus 4',1199.99,'S',
'nexus4.jpg',10,'Celular LG Nexus4 o celular oficial do Google','S');

insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (2,'LG Lg4',199.99,'S',
'lg4.jpg',10,'Celular LG L4 o celular mais barato do mercado','S');

insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (2,'Nokia N630',399.99,'S',
'nokia.jpg',10,'Celular Nokia com windows Phone.','S');

insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (1,'Guns n Roses',50.99,'S','guns_n_roses.jpg',20,'Camiseta da banda de Hard Rock Guns n Roses.','S');

insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (1,'Metalica',48.99,'S','metalica.jpg',20,'Camiseta da banda de Rock Metallica.','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (3,'Boné BMW',128.99,'S','bmw_bone.jpg',20,'Boné oficial da nossa loja BMW.','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (1,'Gren Day',48.99,'S','green_day.jpg',20,'Camiseta da banda de Rock Gren Day.','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (1,'Bob Marley',32.99,'S','bob_marley_110.jpg',50,'Camiseta da lenda Bob Marley com estampa com as cores da Jamaica.','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (1,'Red Hot Chili Peppers',38.99,'S','RHCP.jpg',90,'Camiseta da banda de Rock Red Hot Chilli Peppers.','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (1,'Nirvana Bart Simpson',72.59,'S','nirvana.jpg',10,'Camiseta do álbum nevermind com Bart Simpson da antiga banda de rock Nirvana.','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel)  
values (1,'Lemmy Motorhead',26.99,'S','lemmy.jpg',150,'Camiseta do vocalista Lemmy da banda Motorhead.','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (1,'Game of Thrones',53.29,'S','game_of_thrones.jpg',20,'Camiseta da renomada série de televisão Game of Thrones','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel)  
values (1,'Logo Harley Davidson',18.99,'S','moto_harley_davidson.jpg',4,'Camiseta do logo do famoso modelo de motos Harley Davidson','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values(5,'Poster Chorão',48.99,'S','chorao_poster.jpg',13,'Poster do falecido cantor brasileiro Chorão.','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values(1,'Black Sabbath',48.99,'S','black_sabbath.jpg',150,'Camiseta da banda de Rock Black Sabbath.','S');
insert into produtos (cod_categoria,nome,valor,destaque,foto_principal,quantidade,descricao,disponivel) 
values (3,'Bandana Iron Maiden',48.99,'S','bandana_iron.jpg',20,'Bandana da banda de rock Iron Maiden.','S');

insert into usuario (nome,login,senha,situacao) values ('admin','admin','123','Ativo');





 
 