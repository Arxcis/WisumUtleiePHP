/* 
	File: sqlconfig.sql
	Author: Jonas
	Description:
		This is a configsheet for MySQL.
	
	INT(11) - a normal unsigned/signed INT can only hold 10 digits.
	 0 to 4294967295 unsigned
	 -2147483648 to 2147483647 signed.
	BIGINT(21) - can hold a 20 digit integer.
	 0 to 18446744073709551615 unsigned
	

	CHAR(n)    - Fixed size character string. n is the size
	VARCHAR(n) - character string - variable length.
	             n is maximum size. 8-bit ASCI characters.
				
				VARCHAR supports storing up to 65,535 bytes.
				ASCII USES 1 byte per character = 65,535 characters
				UTF-8 can use 3 bytes per character = 21,844 characters.

	NVARCHAR() - shorthand for NATIONAL VARCHAR - Indicates a predefined character set
	               MYSQL uses utf8 as this predefined character set.

	              name NVARCHAR(50); === name VARCHAR(50) CHARACTER SET utf8;
	
	TINYINT(1) - stores just 1 digit with 1 byte.
	             Is just to store boolean true/false. 0 is false, any other 
	              number equals true.

	DATETIME - stores datetime values like this example: "2010-02-06 19:30:13".
*/

# ---------- MYSQL-wisumutleie table model -----------------


CREATE DATABASE wisutleie;


CREATE TABLE kunder (
	ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fornavn VARCHAR(30) CHARACTER SET utf8,
	etternavn VARCHAR(30) CHARACTER SET utf8, 
	telefon VARCHAR(15),
	epost VARCHAR(100),
	gate VARCHAR(100) CHARACTER SET utf8,
	poststed VARCHAR(50) CHARACTER SET utf8,
	postnummer VARCHAR(10),
	historie VARCHAR(10000) CHARACTER SET utf8
);

CREATE TABLE enheter (
	ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	antall INT(11) UNSIGNED,
	navn VARCHAR(100) CHARACTER SET utf8,
	qrkode VARCHAR(256) CHARACTER SET utf8,
	serienummer VARCHAR(100),
	gruppe VARCHAR(20) CHARACTER SET utf8,
	undergruppe VARCHAR(20) CHARACTER SET utf8,
	pris VARCHAR(10),
	beskrivelse VARCHAR(10000) CHARACTER SET utf8
	-- valuta VARCHAR(4);
);

CREATE TABLE brukere (
	ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	brukernavn VARCHAR(30) CHARACTER SET utf8,
	passord CHAR(64), -- CHAR(64) implies a SHA 256bit hash, CHAR(128) -> SHA 512bit hash.
	epost VARCHAR(100)
);

CREATE TABLE kontrakter (
	ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	tittel VARCHAR(100) CHARACTER SET utf8,
	forfatter VARCHAR(100) CHARACTER SET utf8,
	dokument VARCHAR(10000) CHARACTER SET utf8
);

CREATE TABLE utleie (
	ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,

	-- FOREIGN KEYS --
	kund_ID INT UNSIGNED,
	enhe_ID INT UNSIGNED,
	bruk_ID INT UNSIGNED,
	kont_ID INT UNSIGNED, 

	utlevert TINYINT(1) UNSIGNED,
	tilbakelevert TINYINT(1) UNSIGNED,
	datout DATETIME,
	datotilbake DATETIME
);

/* Example insert:
 INSERT INTO `wisutleie`.`kunder` (
`ID`, `fornavn`, `etternavn`, `telefon`, 
`epost`, `gate`, `poststed`, `postnummer`, `historie`) 
VALUES (NULL, 'Jonas', 'test', '45200864', 'jonas.solsvik@gmail.com', 'Arsettunet 11', 'RONG', '5337', 'Hadde det fett');