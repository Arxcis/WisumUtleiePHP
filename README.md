--------------------------------	
	File: README.md
	Author: Jonas Solsvik
	Created: 29/07/16 
-------------------------------

--------------
INTRODUCTION
--------------
	
	Dette er en app som skal brukes til å organisere utleievirksomhet av vilkårlige enheter
for å kunne generere inntekt. Appen bruker funksjonene - Create, Read, Update, Delete - CRUD på flere databaser.


---------------
DOCUMENTATION
---------------

A complete guide on flexbox - https://css-tricks.com/snippets/css/a-guide-to-flexbox/

When to use $this or self - http://stackoverflow.com/questions/151969/when-to-use-self-over-this
Include files from parent folder - http://stackoverflow.com/questions/8826567/include-files-from-parent-or-other-directory
Example excecute php-function - http://stackoverflow.com/questions/19323010/execute-php-function-with-onclick

PHP Class OOP       - http://www.tutorialspoint.com/php/php_object_oriented.htm

MYSQL UTF8 characters - http://dev.mysql.com/doc/refman/5.7/en/charset-national.html

Color picker         - http://www.w3schools.com/colors/colors_picker.asp
MySQL create table   - http://www.w3schools.com/php/php_mysql_create_table.asp
HTML input tag       - http://www.w3schools.com/tags/tag_input.asp
HTML semantic tags   - http://www.w3schools.com/html/html5_semantic_elements.asp
HTML img tag         - http://www.w3schools.com/tags/tag_img.asp
PHP include examples - http://www.w3schools.com/php/php_includes.asp

Google fonts   - https://www.google.com/fonts
Bootstrap CDN  - https://www.bootstrapcdn.com/
jQuery CDN     - https://developers.google.com/speed/libraries/

The people to beat - https://beta.easyrental.no/rental/


------------------
FILE HIERARCHY
------------------

index.php

login.php
--nybruker.php

	utleie.php
	--nyutleie.php
	--redigerutleie.php
	--detaljutleie.php

	enheter.php
	--nyenhet.php
	--redigerenhet.php
	--detaljenhet.php

	kunder.php
	--nykunde.php
	--redigerkunde.php
	--detaljkunde.php

	admin.php
	--nybruker.php

about.php
contact.php

-------------------
DATABASECONFIG
-------------------

Kunder - En database for å lagre kundeinformasjon, slik at en skal kunne holde oversikt over et 
          kundeforhold. Den skal også kunne brukes til å holde på kunder, skape stamkunder.
           Lagre informasjon slik at kunder som kommer igjen og igjen får en glattere kundeopplevelse.

        ID
        Navn
        Kontaktinfo
        Til gode å betale
        Aktive leieavtaler
        Historikk
           
Brukere - En database for brukerene av appen. Denne databasen skal håndtere brukernavn og passord
            og historikk, prestasjon, kontaktinformasjon.

        ID
        Navn 
        Brukernavn
        Passord
        Kontakt
        Rangering

Enheter - Database som har oversikt over alle tilgjengelige utleieenheter.
		  
	  	ID
	    Navn
	    Antall
	    Produsentens serienummer
	    ID-nummer
	    Beskrivelse
	    Gruppe
	    Undergruppe
	    Pris per døgn

Kontrakter - Database med alle mulige standardkontrakter
		
		ID
		Dokument


Utleieavtaler - Database med oversikt over alle aktive utleieavtaler.
		
		ID
		KundeID - Pointer
		BrukerID - Pointer
		EnheterID - Pointer
		KontraktID - Pointer

		Tidsrom
		Totalpris
		Utleiested
		Tilbakeleveringsted
		

