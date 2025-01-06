create database CareerLink ;
use CareerLink ;


CREATE TABLE Utilisateur (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    email VARCHAR(100),
    mot_de_passe VARCHAR(255),
    user_role VARCHAR(50)
);

-- Creating the Candidate table
CREATE TABLE Candidate (
    id INT PRIMARY KEY,
    cv TEXT,
    profil TEXT,
    FOREIGN KEY (id) REFERENCES Utilisateur(id)
);

-- Creating the Recruiter table
CREATE TABLE Recruiter (
    id INT PRIMARY KEY,
    nom_entreprise VARCHAR(100),
    email_professionnel VARCHAR(100),
    FOREIGN KEY (id) REFERENCES Utilisateur(id)
);

-- Creating the Administrator table
CREATE TABLE Administrator (
    id INT PRIMARY KEY,
    FOREIGN KEY (id) REFERENCES Utilisateur(id)
);

-- Creating the OffreEmploi table
CREATE TABLE OffreEmploi (
    id INT PRIMARY KEY AUTO_INCREMENT,
    poste VARCHAR(100),
    salaire FLOAT,
    qualifications TEXT,
    lieu VARCHAR(100),
    date_publication DATE,
    recruiter_id INT,
    categorie_id INT,
    FOREIGN KEY (recruiter_id) REFERENCES Recruiter(id),
    FOREIGN KEY (categorie_id) REFERENCES Categorie(id)
);

-- Creating the Tag table
CREATE TABLE Tag (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
);

-- Creating the Categorie table
CREATE TABLE Categorie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
);

-- Creating a many-to-many relationship between OffreEmploi and Tag
CREATE TABLE OffreEmploi_Tag (
    offre_emploi_id INT,
    tag_id INT,
    PRIMARY KEY (offre_emploi_id, tag_id),
    FOREIGN KEY (offre_emploi_id) REFERENCES OffreEmploi(id),
    FOREIGN KEY (tag_id) REFERENCES Tag(id)
);


-- Inserting data into the Utilisateur table
INSERT INTO Utilisateur (nom, email, mot_de_passe, user_role) VALUES
('John Doe', 'john.doe@example.com', 'password123', 'Candidate'),
('Jane Smith', 'jane.smith@example.com', 'password456', 'Recruiter'),
('Alice Johnson', 'alice.johnson@example.com', 'password789', 'Admin');

-- Inserting data into the Candidate table
INSERT INTO Candidate (id, cv, profil) VALUES
(1, 'John Doe CV content', 'John Doe profile content');

-- Inserting data into the Recruiter table
INSERT INTO Recruiter (id, nom_entreprise, email_professionnel) VALUES
(2, 'Tech Solutions Inc.', 'recruiter@techsolutions.com');

-- Inserting data into the Administrator table
INSERT INTO Administrator (id) VALUES
(3);

-- Inserting data into the Categorie table
INSERT INTO Categorie (nom) VALUES
('Software Engineering'),
('Marketing'),
('Sales');

-- Inserting data into the OffreEmploi table
INSERT INTO OffreEmploi (poste, salaire, qualifications, lieu, date_publication, recruiter_id, categorie_id) VALUES
('Software Engineer', 80000, 'Bachelor\'s degree in Computer Science', 'San Francisco', '2025-01-01', 2, 1),
('Marketing Specialist', 60000, 'Bachelor\'s degree in Marketing', 'New York', '2025-01-02', 2, 2);

-- Inserting data into the Tag table
INSERT INTO Tag (nom) VALUES
('Full-time'),
('Remote'),
('Entry-level');

-- Inserting data into the OffreEmploi_Tag table
INSERT INTO OffreEmploi_Tag (offre_emploi_id, tag_id) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3);
 
 select * from Utilisateur ;