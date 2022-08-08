# CORE-PHP-PROGRAMMING-ASS2
Assignment 2 for the "Core PHP Programming" course

SQL
---
Baza de date: employee;

Tabela: employee;

Structura tabelei 'employee':
1. id, int(10), AUTO_INCREMENT;
2. firstname, varchar(100), utf8_unicode_ci;
3. lastname, varchar(100), utf8_unicode_ci;
4. birthdate, date;
5. phonenumber, char(10), utf8_unicode_ci;
6. email, varchar(100), utf8_unicode_ci;

PHP
---
Fisiere PHP si rol:
1.  'bottom.php' - footerul aplicatiei;
2.  'connect.php' - asigura conexiunea la BD;
3.  'delete.php' - afiseaza toate inregistrarile cu checkbox pentru stergere;
4.  'deletepost.php' - sterge inregistrarile marcate prin 'delete.php';
5.  'index.php' - formularul de introducere date;
6.  'post.php' - valideaza si introduce datele in BD;
7.  'select.php' - afiseaza inregistrarile din BD;
8.  'top.php' - headerul care contine stilizarea si consola principala;

FUNCTIONALITATE
---------------
- Aplicatia se deschide prin index.php in sectiunea INSERT;
- Se introduc date in aplicatie cu ajutorul formularului;
- Dupa introducere se pot vizualiza datele prin click pe butonul SELECT;
- Daca se doreste stergerea se da click pe DELETE, se marcheaza randurile si se da click pe butonul de stergere;
- Cele 3 butoane INSERT, SELECT si DELETE au rol de consola centrala de navigare intre sectiuni;


