CREATE DATABASE AgendaDB
CREATE TABLE users(id int not null PRIMARY KEY AUTO_INCREMENT, nome varchar(100) not null, 
                    username varchar(50) not null, senha varchar(50) not null, sexo varchar(1) not null,
                    data_nascimento date, telefone varchar(15), email varchar(50), foto varchar(500))

CREATE TABLE agenda(idagenda int not null PRIMARY KEY AUTO_INCREMENT, titulo varchar(20) not null, 
                    data date not null, hora time, descricao varchar(500), local varchar(50), 
                    id_users int not null, FOREIGN KEY (id_users) REFERENCES users (id))