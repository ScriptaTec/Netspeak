USE netspeak;

CREATE TABLE `usuarios` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(100) NOT NULL,
    `nome_completo` varchar(150) DEFAULT NULL,
    `data_nascimento` date NOT NULL,
    `genero` varchar(20) DEFAULT NULL,
    `grau_formacao` enum('1','2','3') DEFAULT NULL,
    `dificuldade_tecnologia` enum('1','2','3') DEFAULT NULL,
    `senha` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `email_secundario` varchar(100) DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`),
    UNIQUE KEY `unique_email_secundario` (`email_secundario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO usuarios (id, nome, senha, email, data_nascimento) VALUES (1, 'Felipe Caue Machado', '$2y$10$Wn1S5fSAEKnPztsjkLNS3.f7tHJ/yYeckta1ZoMdTWogNkkmAALki', 'fmachad6@gmail.com', '1998-08-15');
INSERT INTO usuarios (id, nome, senha, email, data_nascimento) VALUES (2, 'Bianca Jussara Wolf', '$2y$10$Wn1S5fSAEKnPztsjkLNS3.f7tHJ/yYeckta1ZoMdTWogNkkmAALki', 'bibi@gmail.com', '2008-06-01');


