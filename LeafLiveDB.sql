CREATE TABLE `classificacao` (
	`id`               INT(11) 			NOT NULL AUTO_INCREMENT,
	`nome`             VARCHAR(128) 	NOT NULL,
	`id_classificacao` INT(11) 			NULL,
	`ativo`            TINYINT(1) 		NOT NULL DEFAULT '1',
	PRIMARY            KEY (`id`),
	FOREIGN            KEY (`id_classificacao`) REFERENCES `classificacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8;

CREATE TABLE `taxon` (
	`id`               INT(11) 			NOT NULL AUTO_INCREMENT,
	`nome`             VARCHAR(128) 	NOT NULL,
	`id_classificacao` INT(11) 			NOT NULL,
	`id_taxonomia`     INT(11) 			NULL,
	`ativo`            TINYINT(1) 		NOT NULL DEFAULT '1',
	PRIMARY            KEY (`id`),
	FOREIGN            KEY (`id_classificacao`) REFERENCES `classificacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
	FOREIGN            KEY (`id_taxonomia`) REFERENCES `taxon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8;


CREATE TABLE `organismo` (
	`id`             INT(11) 			NOT NULL AUTO_INCREMENT,
	`nome`           VARCHAR(256) 		NOT NULL,
	`numero_petalas` INT(11) 			NOT NULL,
	`numero_estames` INT(11) 			NOT NULL,
	`posicao_ovario` VARCHAR(64) 		NOT NULL,
	`descricao`      TEXT 				NOT NULl,
	`id_last_taxon`  INT(11) 			NOT NULL,
	`localizador`    TEXT 				NOT NULL,
	`ativo`          TINYINT(1) 		NOT NULL DEFAULT '1',
	PRIMARY          KEY (`id`),
	FOREIGN          KEY (`id_last_taxon`) REFERENCES `taxon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8;

CREATE TABLE `nome_popular` (
	`id`             INT(11) 			NOT NULL AUTO_INCREMENT,
	`nome`           VARCHAR(128) 		NOT NULL,
	`id_organismo`   INT(11) 			NOT NULL,
	`ativo`          TINYINT(1) 		NOT NULL DEFAULT '1',
	PRIMARY          KEY (`id`),
	FOREIGN          KEY (`id_organismo`) REFERENCES `organismo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8;

CREATE TABLE `arquivo` (
	`id`       INT(11) 			NOT NULL AUTO_INCREMENT,
	`hash`     VARCHAR(32) 	NOT NULL,
	`nome`     VARCHAR(128) 	NOT NULL,
	`endereco` VARCHAR(256) 	NOT NULL,
	`tamanho`  DECIMAL	 		NOT NULL,
	`extensao` VARCHAR(16) 		NOT NULL,
	`ativo`    TINYINT(1) 		NOT NULL DEFAULT '1',
	PRIMARY    KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8;

CREATE TABLE `organismo_relaciona_imagem` (
	`id`             INT(11) 			NOT NULL AUTO_INCREMENT,
	`id_arquivo`     INT(11)	 		NOT NULL,
	`id_organismo`   INT(11) 			NOT NULL,
	`ativo`          TINYINT(1) 		NOT NULL DEFAULT '1',
	PRIMARY          KEY (`id`),
	FOREIGN          KEY (`id_organismo`) REFERENCES `organismo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
	FOREIGN          KEY (`id_arquivo`) REFERENCES `arquivo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8;