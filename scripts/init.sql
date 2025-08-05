USE netspeak;

CREATE TABLE `usuarios` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(100) NOT NULL,
    `nome_completo` varchar(150) DEFAULT NULL,
    `data_nascimento` date NOT NULL,
    `genero` varchar(20) DEFAULT NULL,
    `grau_formacao` enum('1','2','3','4') DEFAULT NULL,
    `dificuldade` enum('1','2','3') DEFAULT NULL,
    `senha` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `email_secundario` varchar(100) DEFAULT NULL,
    `foto_perfil` varchar(255) DEFAULT 'perfil1.png', 
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`),
    UNIQUE KEY `unique_email_secundario` (`email_secundario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `avaliacao` (
    `p1` enum('1', '2', '3') DEFAULT NULL,
    `p2` enum('1', '2', '3') DEFAULT NULL,
    `p3` enum('1', '2', '3') DEFAULT NULL,
    `p4` enum('1', '2', '3') DEFAULT NULL,
    `p5` enum('1', '2', '3') DEFAULT NULL,
    `p6` enum('1', '2', '3') DEFAULT NULL,
    `p7` enum('1', '2', '3') DEFAULT NULL,
    `p8` varchar(100) DEFAULT NULL,
    `email` varchar(255) DEFAULT NULL
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios (id, nome, senha, email, data_nascimento) VALUES (1, 'Felipe Caue Machado', '$2y$10$Wn1S5fSAEKnPztsjkLNS3.f7tHJ/yYeckta1ZoMdTWogNkkmAALki', 'fmachad6@gmail.com', '1998-08-15');
INSERT INTO usuarios (id, nome, senha, email, data_nascimento) VALUES (2, 'Bianca Jussara Wolff', '$2y$10$Wn1S5fSAEKnPztsjkLNS3.f7tHJ/yYeckta1ZoMdTWogNkkmAALki', 'bibi@gmail.com', '2008-06-01');


