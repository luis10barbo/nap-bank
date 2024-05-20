CREATE TABLE IF NOT EXISTS "usuario" (
	id_usuario INTEGER PRIMARY KEY AUTOINCREMENT,
	apelido_usuario VARCHAR(16) UNIQUE NOT NULL,
	email_usuario VARCHAR(48) UNIQUE NOT NULL,
	senha_usuario VARCHAR(255) NOT NULL,
	nome_usuario VARCHAR(128) NOT NULL,
	cpf_usuario VARCHAR(14),
	data_nascimento VARCHAR(11)
);
CREATE TABLE IF NOT EXISTS "sessao" (
	id_sessao VARCHAR(22) PRIMARY KEY,
	id_usuario INTEGER REFERENCES usuario(idUsuario)
);
INSERT INTO "usuario" VALUES (
	0,
	"teste",
	"teste@teste.com",
	"teste",
	"Teste da Silva Nunes",
	"111.222.333-44",
	"01/01/1990"
);