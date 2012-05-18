CREATE TABLE Lohko (LohkoID INTEGER NOT NULL AUTO_INCREMENT,
LohkoTunnus VARCHAR(8) NOT NULL,
PRIMARY KEY (LohkoID)
);

CREATE TABLE Joukkue (JoukkueID INTEGER NOT NULL AUTO_INCREMENT,
MaaTunnus VARCHAR(3) NOT NULL,
MaaNimi VARCHAR(20) NOT NULL,
LohkoID INTEGER NOT NULL,
PRIMARY KEY (JoukkueID),
FOREIGN KEY (LohkoID) REFERENCES Lohko (LohkoID)
);

CREATE TABLE LohkoTulos (LohkoTulosID INTEGER NOT NULL AUTO_INCREMENT,
LohkoSijoitus Integer NOT NULL,
JoukkueID Integer NOT NULL,
PRIMARY KEY (LohkoTulosID),
FOREIGN KEY (JoukkueID) REFERENCES Joukkue (JoukkueID)
);

CREATE TABLE VoittajaTulos (VoittajaTulosID INTEGER NOT NULL AUTO_INCREMENT,
LoppuSijoitus Integer NOT NULL,
JoukkueID Integer NOT NULL,
PRIMARY KEY (VoittajaTulosID),
FOREIGN KEY (JoukkueID) REFERENCES Joukkue (JoukkueID)
);

CREATE TABLE Veikkaaja (VeikkaajaID INTEGER NOT NULL AUTO_INCREMENT,
Nimi VARCHAR(40) NOT NULL,
NimiMerkki VARCHAR(30) NOT NULL,
SahkoPosti VARCHAR(50) NOT NULL,
PRIMARY KEY (VeikkaajaID),
UNIQUE(NimiMerkki)
);

CREATE TABLE Veikkaus (VeikkausID INTEGER NOT NULL AUTO_INCREMENT,
VeikkausNimi VARCHAR(40) NOT NULL,
PRIMARY KEY (VeikkausID),
UNIQUE(VeikkausNimi)
);

CREATE TABLE LohkoVeikkaus (LohkoVeikkausID INTEGER NOT NULL AUTO_INCREMENT,
LohkoSijoitusVeikkaus Integer NOT NULL,
JoukkueID Integer NOT NULL,
VeikkaajaID Integer NOT NULL,
VeikkausID Integer NOT NULL,
PRIMARY KEY (LohkoVeikkausID),
FOREIGN KEY (JoukkueID) REFERENCES Joukkue (JoukkueID),
FOREIGN KEY (VeikkaajaID) REFERENCES Veikkaaja (VeikkaajaID),
FOREIGN KEY (VeikkausID) REFERENCES Veikkaus (VeikkausID)
);

CREATE TABLE VoittajaVeikkaus (VoittajaVeikkausID INTEGER NOT NULL AUTO_INCREMENT,
LoppuSijoitusVeikkaus Integer NOT NULL,
JoukkueID Integer NOT NULL,
VeikkaajaID Integer NOT NULL,
VeikkausID Integer NOT NULL,
PRIMARY KEY (VoittajaVeikkausID),
FOREIGN KEY (JoukkueID) REFERENCES Joukkue (JoukkueID),
FOREIGN KEY (VeikkaajaID) REFERENCES Veikkaaja (VeikkaajaID),
FOREIGN KEY (VeikkausID) REFERENCES Veikkaus (VeikkausID)
);