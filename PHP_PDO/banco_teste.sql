create database banco_teste;
drop database banco_teste;

CREATE TABLE tb_usuario ( 
id INT PRIMARY KEY, 
usuario VARCHAR(50), 
senha VARCHAR(50) 
);

select * from tb_usuario;

insert into tb_usuario (id, usuario, senha) values
(1, 'Maria' , 123),
(2, 'Joao', 321),
(3, 'Marcio' , 555),
(4, 'Laura' , 456),
(5, 'Marina' , 654);