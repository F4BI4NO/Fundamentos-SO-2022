drop database if exists db_AnimalSupport;
create database db_AnimalSupport;
use db_AnimalSupport;


create table tb_usuarios(
usr_codigo int auto_increment primary key,
usr_nome varchar(45) not null,
usr_senha varchar(45) not null,
usr_telefone varchar (11) not null,
usr_ cidade varchar (45) not null,
usr_email varchar(45) not null
);


create table tb_racas(
rcs_codigo int auto_increment primary key,
rcs_raca varchar(45) not null
);

create table tb_sexos(
sxs_codigo int auto_increment primary key,
sxs_sexo char(1) not null
);

create table tb_animais(
anm_codigo int auto_increment primary key,
anm_idade int not null,
anm_teldoador varchar (15) not null,

anm_rcs_codigo int references tb_racas(rcs_codigo),
anm_sxs_codigo int references tb_sexos(sxs_codigo)
);

create table tb_adocoes(
adc_codigo int auto_increment primary key,
adc_data date not null,
adc_usr_codigo int references tb_usuarios(usr_codigo),
adc_anm_codigo int references tb_animais(anm_codigo)
);

create table tb_publicacoes(
pub_codigo int auto_increment primary key,
pub_titulo varchar(45) not null,
pub_texto varchar(500)
);
