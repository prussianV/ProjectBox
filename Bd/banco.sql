create database Banco_Armario;
use Banco_Armario;

create table tb_adm(
cd_adm int primary key auto_increment,
senha varchar(50),
username varchar(50)
);

create table tb_armario(
num_armario int primary key not null,
reservado boolean,
ocupado boolean,
validade date,
data_pagamento date,
tamanho enum('P','G')
);


create table tb_user(
rm int primary key not null,
id_armario int,
nome varchar(50) not null,
email varchar(70) not null,
turma char(4) not null,
foreign key (id_armario) references tb_armario (num_armario) 
);



SELECT * FROM tb_user;
SELECT * FROM tb_adm;
SELECT * FROM tb_armario;

INSERT INTO tb_adm (username, senha) VALUES("Bianca","0404");

