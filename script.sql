-- Drop schema if it exists and create it again
DROP SCHEMA IF EXISTS prontuario_vet;
CREATE SCHEMA prontuario_vet;
USE prontuario_vet;

-- Create the 'especie' table
CREATE TABLE especie (
    cd_especie INT,
    nm_especie VARCHAR(50),
    CONSTRAINT pk_especie PRIMARY KEY (cd_especie)
);

-- Create the 'animal' table
CREATE TABLE animal (
    cd_animal INT,
    nm_animal VARCHAR(100),
    cd_especie INT,
    CONSTRAINT pk_animal PRIMARY KEY (cd_animal),
    CONSTRAINT fk_animal_especie FOREIGN KEY (cd_especie) REFERENCES especie (cd_especie)
);

-- Create the 'tratamento' table
CREATE TABLE tratamento (
    cd_tratamento INT,
    nm_tratamento VARCHAR(100),
    ds_tratamento TEXT,
    CONSTRAINT pk_tratamento PRIMARY KEY (cd_tratamento)
);

-- Create the 'prontuario' table (fixed spelling and added foreign keys)
CREATE TABLE prontuario (
    cd_animal INT,
    cd_tratamento INT,
    dt_tratamento DATETIME,
    ds_observacao TEXT,
    CONSTRAINT pk_prontuario PRIMARY KEY (cd_animal, cd_tratamento, dt_tratamento),
    CONSTRAINT fk_prontuario_animal FOREIGN KEY (cd_animal) REFERENCES animal (cd_animal),
    CONSTRAINT fk_prontuario_tratamento FOREIGN KEY (cd_tratamento) REFERENCES tratamento (cd_tratamento)
);
