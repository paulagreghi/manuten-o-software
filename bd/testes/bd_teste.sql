create table fonte(
	fon_id int(11) NOT NULL AUTO_INCREMENT,
	fon_nome varchar(45) NOT NULL,
	PRIMARY KEY(fon_id)
);

create table programa(
    pro_id int(11) NOT NULL AUTO_INCREMENT,
    pro_nome varchar(50) NOT NULL,
    fon_id int(11) NOT NULL,
    PRIMARY KEY (pro_id),
    FOREIGN KEY (fon_id) REFERENCES fonte (fon_id)
);

create table departamento(
	id int(11) NOT NULL AUTO_INCREMENT,
	dep_nome varchar(100) NOT NULL,
	dep_sigla varchar(50) NOT NULL,
	PRIMARY KEY (id)
);


create table docente(
	doc_id 	int(11) NOT NULL AUTO_INCREMENT,
	doc_nome varchar(50) NOT NULL,
	doc_cpf	int(11) NOT NULL,
	doc_rg int(11) NOT NULL,
	doc_email varchar(50) NOT NULL,
	id int(11) NOT NULL,
	PRIMARY KEY (doc_id),
	FOREIGN KEY (id) REFERENCES departamento(id)
);

create table discente(
	dis_id int(11) NOT NULL AUTO_INCREMENT,
	dis_nome varchar(50) NOT NULL,
	dis_email varchar(50),
	dis_banco varchar(50),
	dis_agencia varchar(20),
	dis_conta varchar(20),
	dis_cpf varchar(20) UNIQUE,
	dis_rg varchar(20),
	dis_celular int(11) NOT NULL,
	PRIMARY KEY (dis_id)
);

create table iniciacao(
	ini_id int(11) NOT NULL AUTO_INCREMENT,
	ini_tituloPlano varchar(50) NOT NULL,
	ini_tituloProjeto text NOT NULL,
	ini_periodo varchar(50) NOT NULL,
	ini_vigencia int(4) NOT NULL,
	ini_observacoes text,
	ini_cancelamento date,
	dis_id int(11) NOT NULL,
	doc_id int(11) NOT NULL,
	pro_id int(11) NOT NULL,
	PRIMARY KEY (ini_id),
	FOREIGN KEY (dis_id) REFERENCES discente(dis_id),
	FOREIGN KEY (doc_id) REFERENCES docente(doc_id),
	FOREIGN KEY (pro_id) REFERENCES programa(pro_id)
);
ALTER TABLE fonte
 MODIFY fon_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE programa
 MODIFY pro_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE departamento
 MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE docente
 MODIFY doc_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE discente
 MODIFY dis_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE iniciacao
 MODIFY ini_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
