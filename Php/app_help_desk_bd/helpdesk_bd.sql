drop database helpdesk;
drop table chamados;
drop table usuarios;

create database helpdesk;
	
    create table usuarios (
    id_usuario int primary key auto_increment,
    nome varchar(120),
    email varchar(120),
    senha varchar(100),
    perfil varchar(50)
    );

    create table chamados (
	id_chamado int primary key auto_increment,
    titulo varchar(90),
	categoria varchar(90), 
    descricao longtext, 
    id_usuario int,
    Constraint fkChamadoUsuario foreign key (id_usuario) references usuarios (id_usuario)
    );
    
    select * from usuarios;
    select * from chamados;
    
    SELECT count(statuschamado) as 'Total' FROM chamados WHERE statuschamado ='Aberto';
    
alter table chamados
 add statuschamado varchar(50);
 
 alter table chamados
 add descricaotecnico longtext;
 
 alter table chamados
 add statuschamado varchar(50);
 
 ALTER TABLE chamados 
 ADD valor VARCHAR(50);
 
 ALTER TABLE chamados CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
    
    update usuarios
	set perfil = 'Adm'
    where id_usuario = 1;
    
    update chamados
	set statuschamado = 'Finalizado'
    where id_chamado in (8,9,11);