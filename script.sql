-- Criar banco de dados
CREATE DATABASE tarefa_evento;
USE tarefa_evento;

-- ========================
-- Tabela: Palestrante
-- ========================
CREATE TABLE Palestrante (
    id_palestrante INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    formacao VARCHAR(150),
    empresa VARCHAR(150),
    bio_resumida VARCHAR(300),
    email VARCHAR(120) UNIQUE NOT NULL
);

-- ========================
-- Tabela: Area_Tematica
-- ========================
CREATE TABLE Area_Tematica (
    id_area INT AUTO_INCREMENT PRIMARY KEY,
    nome_area VARCHAR(100) NOT NULL
);

-- ========================
-- Tabela: Palestra
-- ========================
CREATE TABLE Palestra (
    id_palestra INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    descricao VARCHAR(300),
    horario_inicio DATETIME NOT NULL,
    duracao_minutos INT NOT NULL,

    id_palestrante INT,
    id_area INT,

    FOREIGN KEY (id_palestrante) REFERENCES Palestrante(id_palestrante),
    FOREIGN KEY (id_area) REFERENCES Area_Tematica(id_area)
);

-- ========================
-- Tabela: Participante
-- ========================
CREATE TABLE Participante (
    id_participante INT AUTO_INCREMENT,
    cpf_participante CHAR(11) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL,
    tipo_ingresso ENUM('Estudante', 'Profissional') NOT NULL,
    data_inscricao DATE NOT NULL,

    id_palestra INT NOT NULL,  -- participante inscrito em uma palestra específica
    data_registro DATE DEFAULT CURRENT_DATE,

    PRIMARY KEY (id_participante, cpf_participante, id_palestra),
    FOREIGN KEY (id_palestra) REFERENCES Palestra(id_palestra)
);
