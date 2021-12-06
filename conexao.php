<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
/*
# Criando Tabela PHP *****
# Tabela Funcionarios (ID, CPF, Nome*, Departamento*, Email, RG, CEP, Endereço)
$query = "CREATE TABLE FUNCIONARIOS(
    id_funcionario int not null auto_increment,
    cpf varchar (11),
    nome_funcionario varchar(255) not null,
    departamento varchar (50) not null,
    email varchar (100),
    rg int(9),
    cep int(8),
    endereco varchar (100),
    primary key(id_funcionario)
    FOREIGN KEY (`departamento_FK`)
    REFERENCES `login`.`departamentos` (`nome_departamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
)";

$executar = mysqli_query($conexao, $query);

# Tabela DEPARTAMENTOS (ID, Nome*)
$query = "CREATE TABLE DEPARTAMENTOS(
    id_departamento int not null auto_increment,
    nome_departamento varchar(255) not null,
    primary key(id_departamento)
)";
ALTER TABLE `departamentos` ADD INDEX(`nome_departamento`);

$executar = mysqli_query($conexao, $query);

# Tabela Veiculos (ID, Departamento (FK)*, Placa*. Descrição*, Ano*, Tipo de Combustível*, Tipo de Veículo*, Valor IPVA, Modelo, Chassi, Renavam, Data da Compra, Valor Compra, NFCompra, Data Venda, Valor Venda, NFVenda)
$query = "CREATE TABLE VEICULOS(
    id_veiculo int not null auto_increment,
    departamento_FK varchar (255) not null,
    placa varchar (7) not null,
    descricao varchar(255) not null,
    ano int(4) not null,
    tipo_combustivel varchar(30) not null,
    tipo_veiculo varchar(30) not null,
    ipva varchar(30),
    renavam varchar(30),
    modelo varchar(30),
    chassi varchar(30),
    data_compra varchar(30),
    valor_compra varchar(30),
    data_venda varchar(30),
    valor_venda varchar(30),
    nf_comrpa varchar(30),
    nf_venda varchar(30),
    primary key(id_veiculo),
    FOREIGN KEY (`departamento_FK`)
    REFERENCES `login`.`departamentos` (`nome_departamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
)";

$executar = mysqli_query($conexao, $query);

ALTER TABLE `veiculos` ADD INDEX(`placa`);
ALTER TABLE `funcionarios` ADD INDEX(`nome_funcionario`);


CREATE TABLE FichaControle(
    id_ficha int not null auto_increment,
    placa_veiculo_fk varchar (7) not null,
    nome_funcionario_fk varchar(255) not null,
    data_saida DATE not null,
    hora_saida TIME not null,
    data_chegada DATE not null,
    hora_chegada TIME not null,
    primary key(id_ficha),
    FOREIGN KEY (`placa_veiculo_fk`)
    REFERENCES `login`.`veiculos` (`placa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`nome_funcionario_fk`)
    REFERENCES `login`.`funcionarios` (`nome_funcionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE MANUTENCAO(
    id_manutencao int not null auto_increment,
    placa_FK varchar(7) not null,
    numero_nota int(255) not null,
    servico varchar(255) not null,
    valor varchar(30) not null,
    primary key(id_manutencao),
	FOREIGN KEY (placa_FK)
    REFERENCES veiculos (placa)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

INSERT INTO manutencao (placa_FK, numero_nota, servico, valor) VALUES (1234567, 1234, 'pintura', '1000');
INSERT INTO veiculos (placa, departamento_FK, ano, tipo_combustivel, tipo_veiculo, ipva, renavam, modelo, chassi, data_compra, valor_compra, data_venda, valor_venda, nf_compra, nf_venda) VALUES (1234567, 'brasanitas', 2021, 'alcool', 'sedan', 1234567, '1234BWXCRYUO198783', 'ONIX', '12345678920BW34CX',  '2020/11/12', "78.000,00", '2021/01/12', "78.000,00", 123456, 654321);
INSERT INTO usuario (usuario_id, usuario, tipo, senha) VALUES (2, 'portaria1', 'usuário', MD5('portaria1'));
INSERT INTO funcionarios (nome_funcionario, rg, cep, cpf, departamento_FK, email, endereco) VALUES ('John', 487841999, 15802370, 50762446803, 'terceiro', 'john.frusciante@gmail.com', 'Centro')
INSERT INTO departamentos (id_departamento, nome_departamento) VALUES (1, 'Brasanitas'), (2,'Campo'), (3,'Compras'), (4,'Consultoria'), (5,'Controladoria'), (6,'Engenharia'), (7,'Frigoscandia'), (8,'Gerencia'), (9,'HSEA'), (10,'Industrial'), (11,'Informatica'), (12,'Marketing'), (13,'Piloto'), (14,'Planejamento'), (15,'Producao'), (16,'Qualidade'), (17,'Recebimento'), (18,'Recursos Humanos'), (19,'Servicos ILJE'), (20,'Servicos Labeler'), (21,'Terceiro');
*/

$query = "SELECT * FROM departamentos ORDER BY nome_departamento";
$consulta1 = mysqli_query($conexao, $query);

$query2 = "SELECT * FROM funcionarios ORDER BY nome_funcionario";
$consulta2 = mysqli_query($conexao, $query2);

$query3 = "SELECT * FROM veiculos";
$consulta3 = mysqli_query($conexao, $query3);

$query4 = "SELECT * FROM usuario";
$consulta4 = mysqli_query($conexao, $query4);

$query5 = "SELECT * FROM manutencao";
$consulta5 = mysqli_query($conexao, $query5);

$query6 = "SELECT * FROM fichacontrole WHERE hora_chegada = '00:00:00' ORDER BY data_saida DESC";
$consulta6 = mysqli_query($conexao, $query6); 


$query9 = "SELECT * FROM fichacontrole";
$consulta9 = mysqli_query($conexao, $query9); 

$query10 = "SELECT * FROM fichacontrole ORDER BY id_ficha DESC";
$consulta10 = mysqli_query($conexao, $query10); 
