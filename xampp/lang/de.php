<?php
    // ---------------------------------------------------------------------
    // GLOBAL
    // ---------------------------------------------------------------------

    $TEXT['global-xampp'] = "XAMPP f�r Windows";
    $TEXT['global-showcode']="Quellcode zeigen";
    $TEXT['global-sourcecode']="Quellcode";

    // ---------------------------------------------------------------------
    // NAVIGATION
    // ---------------------------------------------------------------------

    $TEXT['navi-xampp'] = "XAMPP";
    $TEXT['navi-welcome'] = "Willkommen";
    $TEXT['navi-status'] = "Status";
    $TEXT['navi-security'] = "Sicherheitscheck";
    $TEXT['navi-doc'] = "Dokumentation";
    $TEXT['navi-components'] = "Komponenten";
    $TEXT['navi-about'] = "�ber XAMPP";

    $TEXT['navi-demos'] = "Demos";
    $TEXT['navi-cdcol'] = "CD-Verwaltung";
    $TEXT['navi-bio'] = "Biorhythmus";
    $TEXT['navi-guest'] = "G�stebuch";
    $TEXT['navi-perlenv'] = "MiniPerl";
    $TEXT['navi-iart'] = "Instant Art";
    $TEXT['navi-iart2'] = "Flash Art";
    $TEXT['navi-phonebook'] = "Telefonbuch";
    $TEXT['navi-perlasp'] = "Perl:ASP";
    $TEXT['navi-pear'] = "Excel_Writer";
    $TEXT['navi-adodb'] = "ADOdb";
    $TEXT['navi-perl'] = "Perl";
    $TEXT['navi-python'] = "Python";
    $TEXT['navi-jsp'] = "Java";
    $TEXT['navi-phpswitch'] = "PHP Umschalter";

    $TEXT['navi-tools'] = "Tools";
    $TEXT['navi-phpmyadmin'] = "phpMyAdmin";
    $TEXT['navi-webalizer'] = "Webalizer";
    $TEXT['navi-mercury'] = "Mercury Mail";
    $TEXT['navi-filezilla'] = "FileZilla FTP";
    $TEXT['navi-jpgraph'] = "JpGraph";

    $TEXT['navi-specialguest'] = "Current Guest";
    $TEXT['navi-guest1'] = "FCKeditor";

    $TEXT['navi-languages'] = "Sprachen";
    $TEXT['navi-english'] = "English";
    $TEXT['navi-german'] = "Deutsch";
    $TEXT['navi-french'] = "Francais";
    $TEXT['navi-dutch'] = "Nederlands";
    $TEXT['navi-polish'] = "Polski";
    $TEXT['navi-slovenian'] = "Slovene";
    $TEXT['navi-italian'] = "Italiano";
    $TEXT['navi-norwegian'] = "Norsk";
    $TEXT['navi-spanish'] = "Espa&ntilde;ol";
    $TEXT['navi-chinese'] = "&#20013;&#25991;";
    $TEXT['navi-portuguese'] = "Portugu&ecirc;s";
    $TEXT['navi-portuguese-brasil'] = "Portugu&ecirc;s (Brasil)";
    $TEXT['navi-japanese'] = "&#26085;&#26412;&#35486;";

    // ---------------------------------------------------------------------
    // STATUS
    // ---------------------------------------------------------------------

    $TEXT['status-head'] = "XAMPP-Status";
    $TEXT['status-text1'] = "Auf dieser �bersicht kann man sehen welche XAMPP-Komponenten gestartet sind bzw. welche funktionieren. Sofern nichts an der Konfiguration von XAMPP ge�ndert wurde, sollten MySQL, PHP, Perl, CGI und SSI aktiviert sein.";
    $TEXT['status-text2'] = "Dieser Check funktioniert nur zuverl�ssig solange nichts an der Konfiguration des Apache ge�ndert wurde. Durch bestimmte �nderungen kann das Ergebnis dieses Tests verf�lscht werden. Mit SSL (https://localhost) funktionieren die Statuschecks nicht!";

    $TEXT['status-mysql'] = "MySQL-Datenbank";
    $TEXT['status-ssl'] = "HTTPS (SSL)";
    $TEXT['status-php'] = "PHP";
    $TEXT['status-perl'] = "Perl mit mod_perl";
    $TEXT['status-cgi'] = "Common Gateway Interface (CGI)";
    $TEXT['status-ssi'] = "Server Side Includes (SSI)";
    $TEXT['status-python'] = "Python mit mod_python";
    $TEXT['status-smtp'] = "SMTP Server";
    $TEXT['status-ftp'] = "FTP Server";
    $TEXT['status-tomcat'] = "Tomcat Server";
    $TEXT['status-named'] = "Domain Name Server (DNS)";
    $TEXT['status-mmcache'] = "PHP-Erweiterung �Turck MMCache�";
    $TEXT['status-mmcache-url'] = "http://www.apachefriends.org/faq-wampp.html#mmcache";
    $TEXT['status-oci8'] = "PHP-Erweiterung �OCI8/Oracle�";
    $TEXT['status-oci8-url'] = "http://www.apachefriends.org/faq-lampp.html#oci8";

    $TEXT['status-lookfaq'] = "siehe FAQ";
    $TEXT['status-ok'] = "AKTIVIERT";
    $TEXT['status-nok'] = "DEAKTIVIERT";

    $TEXT['status-tab1'] = "Komponente";
    $TEXT['status-tab2'] = "Status";
    $TEXT['status-tab3'] = "Hinweis";

    // ---------------------------------------------------------------------
    // SECURITY
    // ---------------------------------------------------------------------

    $TEXT['security-head'] = "XAMPP SICHERHEIT";
    $TEXT['security-text1'] = "Anhand dieser �bersicht kann man sehen welche Punkte an der XAMPP-Installation noch unsicher sind und noch �berpr�ft werden m�ssten. (Bitte unter der Tabelle weiterlesen.)";
    $TEXT['security-text2'] = "Die gr�n markierten Punkte sind sicher; die rot marktierten Punkte sind definitiv unsicher und bei den gelb martierten Punkten konnte die Sicherheit nicht �berpr�ft werden (zum Beispiel weil das zu testende Programm gar nicht l�uft).<br>&nbsp;<br><b>Diese Sicherheitsl�cken im XAMPP Verzeichnis, dem ROOT Passwort f�r MySQL und der Sicherung von PHPMyAdmin k�nnen nun einfach �ber den folgenden Link geschlossen werden:</b><p>=> <a href=\"/security/xamppsecurity.php\"><b>http://localhost/security/xamppsecurity.php</b></a> <= &nbsp;&nbsp;[nur �ber localhost m�glich]<br>&nbsp;<br>&nbsp;<br>
    Weitere wichtige Hinweise:<ul>
    <li>Alle XAMPP Pr�fungen beziehen sich nur auf den Host \"localhost\" (127.0.0.1).</li>
    <li><i><b>Der FileZilla FTP und der Mercury Mail Server m�sst ihr selbst absichern !!</b></i></li>
    <li>Ein Rechner, der nicht von aussen via Internet oder Intranet angreifbar ist<br>(z.B. weil eine Firewall alle wichtigen Ports nach aussen blockt) ist generell SICHER gegen Angriffe von aussen.</li>
    <li>Ein Server, der gar nicht \"an ist\" und damit l�uft ist immer SICHER!</li></ul>";
    $TEXT['security-text3'] = "<b>Bitte unbedingt beachten: Je mehr Sicherheit der XAMPP hat, desto weniger Beispiele werden fehlerfrei angezeigt. Wer beispielsweise PHP im \"safe mode\" f�hrt, wird nicht mehr vollst�ndig auf alle Funktionen dieses Security Frondends zugreifen k�nnen. Oft bedeutet mehr Sicherheit gleichzeitig weniger Funktionalit�t.</b>";
    $TEXT['security-text4'] = "Die XAMPP Standard Ports:";

    $TEXT['security-ok'] = "SICHER";
    $TEXT['security-nok'] = "UNSICHER";
    $TEXT['security-noidea'] = "UNBEKANNT";

    $TEXT['security-tab1'] = "Betreff";
    $TEXT['security-tab2'] = "Status";

    $TEXT['security-checkapache-nok'] = "Diese XAMPP-Seiten sind �ber's Netzwerk erreichbar";
    $TEXT['security-checkapache-ok'] = "Diese XAMPP-Seiten sind nicht �ber's Netzwerk erreichbar";
    $TEXT['security-checkapache-text'] = "Alles was Du hier sehen kannst, kann potentiell auch jeder Aussenstehender sehen und nutzen, der Deinen Rechner �ber's Netzwerk erreichen kann. Wenn Du zum Beispiel mit diesem Rechner ins Internet geht, dann kann jeder im Internet, der Deine IP-Adresse kennt oder r�t auf diese Seiten zugreifen.";

    $TEXT['security-checkmysqlport-nok'] = "MySQL ist �ber's Netzwerk erreichbar";
    $TEXT['security-checkmysqlport-ok'] = "MySQL ist nicht �ber's Netzwerk erreichbar";
    $TEXT['security-checkmysqlport-text'] = "Auf die MySQL-Datenbank kann potentiell �ber's Netzwerk zugegriffen werden. Zwar ist es in der Standardinstallation von XAMPP trotzdem nicht m�glich von au�en Zugriff zur Datenbank zu bekommen. Aber um eine absolute Sicherheit zu bekommen sollte der Netzwerkzugriff auf MySQL abgeschaltet werden.";

    $TEXT['security-checkpmamysqluser-nok'] = "Der phpMyAdmin-Benutzer pma hat kein Passwort";
    $TEXT['security-checkpmamysqluser-ok'] = "Der phpMyAdmin-Benutzer hat ein Passwort";
    $TEXT['security-checkpmamysqluser-text'] = "phpMyAdmin speichtert seine eigenen Einstellungen in der MySQL-Datenbank. phpMyAdmin benutzt dazu den MySQL-Benutzer pma. Damit sonst niemand anderes als phpMyAdmin �ber diesen Benutzer auf die Datenbank zugreifen kann, sollte diesem Benutzer ein Passwort gesetzt werden.";

    $TEXT['security-checkmysql-nok'] = "MySQL Admin User \"root\" hat kein Passwort";
    $TEXT['security-checkmysql-ok'] = "MySQL Admin User \"root\" hat ein Passwort";
    $TEXT['security-checkmysql-out'] = " Ein MySQL Server l�uft nicht oder wird von einer Firewall geblockt!";
    $TEXT['security-checkmysql-text'] = "Der MySQL Admin User \"root\" hat noch kein Passwort gesetzt bekommen. Jeder Benutzer auf dem Rechner kann so auf der MySQL-Datenbank machen was er will. Der MySQL-root sollte also auf alle F�lle ein Passwort gesetzt bekommen.";

    $TEXT['security-pop-nok'] = "Der Testuser (newuser) f�r den Mercury Mail Server (POP3) hat ein altes Passwort (wampp)";
    $TEXT['security-pop-ok'] = "Der Testuser \"newuser\" f�r den POP3 Server (Mercury Mail?) existiert nicht mehr oder hat ein neues Passwort";
    $TEXT['security-pop-out'] = "Ein POP3 Server wie Mercury Mail l�uft nicht oder wird von einer Firewall geblockt!";
    $TEXT['security-pop-notload'] = "<i>Die f�r eine Pr�fung notwendige IMAP Extension (php.ini) ist nicht geladen!</i><br>";
    $TEXT['security-pop-text'] = "Bitte UNBEDINGT den Mercury Mail Server auf alle User mit deren Passw�rtern �berpr�fen und ggf. auch ver�ndern!";

    $TEXT['security-checkftppassword-nok'] = "Das FileZilla FTP-Passwort ist noch immer 'wampp'";
    $TEXT['security-checkftppassword-ok'] = "Das FileZilla FTP-Passwort wurde ge�ndert";
    $TEXT['security-checkftppassword-out'] = "Ein FTP Server l�uft nicht  oder wird von einer Firewall geblockt!";
    $TEXT['security-checkftppassword-text'] = "Wenn Du den FileZilla FTP Server gestartet hast, kannst Du standardm��ig mit dem Benutzernamen 'newuser' und dem Passwort 'wampp' Dateien f�r Deinen Webserver hochladen. Potentiell kann das nat�rlich jeder und daher sollte hier unbeding ein anderes Passwort gesetzt werden.";

    $TEXT['security-phpmyadmin-nok'] = "PhpMyAdmin ist �ber das Netzwerk erreichbar";
    $TEXT['security-phpmyadmin-ok'] = "PhpMyAdmin Passwort Schutz wurde aktiviert";
    $TEXT['security-phpmyadmin-out'] = "PhpMyAdmin: Kann die 'config.inc.php' NICHT finden ...";
    $TEXT['security-phpmyadmin-text'] = "PhpMyAdmin ist ohne Passwort �ber das Netz erreichbar. Die Einstellung 'httpd' oder 'cookie' in der config.inc.php kann hier abhelfen.";

    $TEXT['security-checkphp-nok'] = "PHP l�uft NICHT im \"Safe Mode\"";
    $TEXT['security-checkphp-ok'] = "PHP l�uft im \"Safe Mode\"";
    $TEXT['security-checkphp-out'] = "Der PHP Status kann nicht kontrolliert werden!";
    $TEXT['security-checkphp-text'] = "Wer auf seinem Server die Ausf�hrung von PHP auch f�r Aussenstehende zul��t, sollte sich aus Gr�nden der Sicherheit �berlegen, ob er PHP im sog. \"Safe Mode\" konfiguriert. F�r reine Entwickler ist allerdings der \"Safe Mode\" nicht zu empfehlen, da manche Funktionen eingeschr�nkt oder �berhaupt nicht mehr ausgef�hrt werden. <a href=\"http://www.php.net/features.safe-mode\" target=\"_new\"><font size=1>Mehr Info</font></a>";

    $TEXT['security-checktomcat-nok'] = "Der Admin/Config User (xampp) f�r den Tomcat Server hat ein altes Passwort (xampp)";
    $TEXT['security-checktomcat-ok'] = "Der Admin/Config User \"xampp\" f�r den Tomcat Server existiert nicht mehr oder hat ein neues Passwort";
    $TEXT['security-checktomcat-out'] = "Tomcat: Kann die Datei 'tomcat-users.xml' NICHT finden ...";
    $TEXT['security-checktomcat-text'] = "Mit diesem User kann man die Administrations-Webanwendung zur Verwaltung des Tomcat erreichen.";
    $TEXT['security-checktomcat-notinstalled'] = "<i>Das Tomcat AddOn ist nicht installiert.</i>";

    // ---------------------------------------------------------------------
    // SECURITY SETUP
    // ---------------------------------------------------------------------

    $TEXT['mysql-security-head'] = "Security Konsole MySQL | XAMPP Verzeichnis Schutz";
    $TEXT['mysql-rootsetup-head'] = "MYSQL SEKTION: \"ROOT\" PASSWORT";
    $TEXT['mysql-rootsetup-text1'] = "";
    $TEXT['mysql-rootsetup-notrunning'] = "Der MySQL Server ist nicht gestartet oder wird von einer Firewall geblockt! Bitte zuerst dieses Problem �berpr�fen ...";
    $TEXT['mysql-rootsetup-passwdnotok'] = "Das neuen Passwort war mit der Wiederholung des neuen Passworts nicht identisch! Bitte geben Sie das neue Passwort sowie dessen Wiederholung erneut ein!";
    $TEXT['mysql-rootsetup-passwdnull'] = "Null-Passw�rter ('leer') werden nicht akzeptiert!";
    $TEXT['mysql-rootsetup-passwdsuccess'] = "ERFOLG: Das Passwort f�r den administrativen Benutzer 'root' wurde gesetzt oder aktualisiert! Die Initialisierung des neuen Passwortes erfolgt aber erst nach einem NEUSTART VON MYSQL !!!! Die Daten mit dem neuen Passwort wurde zur Sicherheit in folgende Datei archiviert:";
    $TEXT['mysql-rootsetup-passwdnosuccess'] = "FEHLER: ROOT Passwort ist vermutlich falsch. MySQL lehnte das Login mit dem aktuellen root-Passwort ab.";
    $TEXT['mysql-rootsetup-passwdold'] = "Akuelles Passwort:";
    $TEXT['mysql-rootsetup-passwd'] = "Neues Passwort:";
    $TEXT['mysql-rootsetup-passwdrepeat'] = "Wiederhole neues Passwort:";
    $TEXT['mysql-rootsetup-passwdchange'] = "Passwort �ndern";
    $TEXT['mysql-rootsetup-phpmyadmin'] = "phpMyAdmin Authentifikation:";
    $TEXT['mysql-pmasetup'] = "Setze ein zuf�lliges Passwort f�r den phpMyAdmin User 'pma':";
    $TEXT['mysql-pmasetup-yes'] = "Ja";
    $TEXT['mysql-pmasetup-no'] = "Nein";
    $TEXT['mysql-passwort-infile'] = "Passwort in Klartext in Datei speichern?";
    $TEXT['mysql-passwort-risk'] = "Sicherheitsrisiko!";

    $TEXT['xampp-setup-head'] = "XAMPP VERZEICHNIS SCHUTZ (.htaccess)";
    $TEXT['xampp-setup-user'] = "Benutzer (User):";
    $TEXT['xampp-setup-passwd'] = "Passwort:";
    $TEXT['xampp-setup-start'] = "XAMPP Verzeichnis sichern";
    $TEXT['xampp-setup-notok'] = "<br><br>FEHLER: Der String f�r den Benutzer sowie f�r das Passwort muss mindestens 3 und darf h�chstens 15 Zeichen haben, und darf KEINE Sonderzeichen wie <��� (usw.) als auch Leerzeichen enthalten.<br><br>";
    $TEXT['xampp-setup-ok'] = "<br><br>Das root Passwort wurde erfolgreich ge�ndert. Bitte starten Sie den MySQL Server neu, damit diese �nderung wirksam wird!<br><br>";
    $TEXT['xampp-config-ok'] = "<br><br>ERFOLG: Das XAMPP Verzeichnis ist nach nun gesch�tzt. Die Daten wurden in folgenden Dateien archiviert:<br>";
    $TEXT['xampp-config-notok'] = "<br><br>FEHLER: Das System konnte NICHT mit Hilfe der \".htaccess\" und der \"htpasswd.exe\" den Verzeichnisschutz aktivieren bzw. aktualisieren. Unter Umst�nden ist PHP im \"Safe Modus\".   <br><br>";

    // ---------------------------------------------------------------------
    // START
    // ---------------------------------------------------------------------

    $TEXT['start-head'] = "Willkommen zu XAMPP f�r Windows";

    $TEXT['start-subhead'] = "Herzlichen Gl�ckwunsch:<br>XAMPP ist erfolgreich auf diesem Rechner installiert!";

    $TEXT['start-text1'] = "Nun kann es losgehen. :) Als erstes bitte einmal auf der linken Seite auf �Status� klicken. Damit bekommt man einen �berblick was alles schon funktioniert. Ein paar Funktionen werden ausgeschaltet sein. Das ist Absicht so. Es sind Funktionen, die nicht �berall funktionieren oder evtl. Probleme bereiten k�nnten.";

    $TEXT['start-text2'] = "";

    $TEXT['start-text3'] = "";

    $TEXT['start-text4'] = "F�r die OpenSSL Unterst�tzung benutzt bitte das Testzertifikat mit der URL <a href='https://127.0.0.1' target='_top'>https://127.0.0.1</a> bzw. <a href='https://localhost' target='_top'>https://localhost</a>";

    $TEXT['start-text5'] = "Und ganz wichtig! Einen gro�en Dank f�r die Mitarbeit und Mithilfe an Nemesis, KriS, Boppy, Pc-Dummy und allen anderen Freunden von XAMPP!";

    $TEXT['start-text6'] = "Viel Spa�, Kay Vogelgesang + Kai 'Oswald' Seidler + Carsten Wiedmann";

    // ---------------------------------------------------------------------
    // MANUALS
    // ---------------------------------------------------------------------

    $TEXT['manuals-head'] = "Online-Dokumentation";

    $TEXT['manuals-text1'] = "XAMPP verbindet viele unterschiedliche Pakete in einem Paket. Hier ist eine Auswahl der Standard- und Referenz-Dokumentationen zu den wichtigsten Paketen von XAMPP.";


    $TEXT['manuals-list1'] = "
    <ul>
    <li><a href=\"http://httpd.apache.org/docs/2.2/de/\">Apache 2 Dokumentation (in Deutsch)</a>
    <li><a href=\"http://dev.mysql.com/doc/refman/5.1/en/\">MySQL Dokumentation (in Englisch)</a>
    <li><a href=\"http://www.php.net/manual/de/\">PHP Referenz-Dokumentation (in Deutsch)</a>
    <li><a href=\"http://perldoc.perl.org/\">Perl Dokumentation (in Englisch)</a>
    <li><a href=\"http://wiki.filezilla-project.org/Documentation\">FileZilla FTP Server (in Englisch)</a>
    <li><a href=\"http://wiki.pmail.com/index.php?title=Mercury:Contents\">Mercury Mail Transport Agent (in Englisch)</a>
    </ul>";

    $TEXT['manuals-text2'] = "Und hier noch eine kleine Auswahl an deutschsprachigen Anleitungen und die zentrale Dokumentations-Seite von Apache Friends:";

    $TEXT['manuals-list2'] = "
    <ul>
    <li><a href=\"http://www.apachefriends.org/de/faq-xampp.html\">Apache Friends Dokumentation</a>
    <li><a href=\"http://www.schattenbaum.net/php/\">PHP f�r Dich</a> (incl. MySQL-Einf�hrung) von Claudia Schaffarik
    <li><a href=\"http://de.selfhtml.org/\">SELFHTML</a> von Stefan M�nz
    <li><a href=\"http://www.stephan-muller.com/cgi/\">CGI Einf�hrung</a> von Stephan Muller
    </ul>";

    $TEXT['manuals-text3'] = "Viel Spa� und Erfolg beim Lesen! :)";

    // ---------------------------------------------------------------------
    // COMPONENTS
    // ---------------------------------------------------------------------

    $TEXT['components-head'] = "XAMPP-Komponenten";

    $TEXT['components-text1'] = "XAMPP verbindet viele unterschiedliche Pakete in einem Paket. Hier ist eine �bersicht aller enthaltenen Pakete.";

    $TEXT['components-text2'] = "Vielen Dank an die unz�hligen Autoren dieser Programme.";

    $TEXT['components-text3'] = "Im Verzeichnis <a href='/licenses/'><b>\\xampp\licenses</b></a> befinden sich die einzelnen Lizenz-Texte dieser Pakete und benutzer Libraries.";

    // ---------------------------------------------------------------------
    // CD COLLECTION DEMO
    // ---------------------------------------------------------------------

    $TEXT['cds-head']="CD-Verwaltung (Beispiel f�r PHP+MySQL+PDF Class)";
    $TEXT['cds-head-fpdf']="CD-Verwaltung (Beispiel f�r PHP+MySQL+FPDF)";

    $TEXT['cds-text1'] = "Eine sehr einfach CD-Verwaltung. Da man Eint�ge nicht mehr verbessern kann, wenn man sich mal vertippt hat, empfiehlt sich phpMyAdmin (unten links in der Navigation).";

    $TEXT['cds-text2'] = "<b>Neu seit 0.9.6:</b> Ausgabe der eingestellten CDs als <a href='$_SERVER[PHP_SELF]?action=getpdf'>PDF-Dokument</a>.";

    $TEXT['cds-error'] = "Kann die Datenbank nicht erreichen!<br>L�uft MySQL oder wurde das Passwort ge�ndert?";
    $TEXT['cds-head1'] = "Meine CDs";
    $TEXT['cds-attrib1'] = "Interpret";
    $TEXT['cds-attrib2'] = "Titel";
    $TEXT['cds-attrib3'] = "Jahr";
    $TEXT['cds-attrib4'] = "Aktion";
    $TEXT['cds-sure'] = "Wirklich sicher?";
    $TEXT['cds-head2'] = "CD hinzuf�gen";
    $TEXT['cds-button1'] = "CD L�SCHEN";
    $TEXT['cds-button2'] = "CD HINZUF�GEN";

    // ---------------------------------------------------------------------
    // BIORHYTHM DEMO
    // ---------------------------------------------------------------------

    $TEXT['bio-head'] = "Biorhythm (mit PHP+GD)";
    $TEXT['bio-head'] = "Biorhythmus (Beispiel f�r PHP+GD)";

    $TEXT['bio-by'] = "von";
    $TEXT['bio-ask'] = "Bitte gib dein Geburtsdatum ein";
    $TEXT['bio-ok'] = "OK";
    $TEXT['bio-error1'] = "Das Datum";
    $TEXT['bio-error2'] = "ist ung�ltig";

    $TEXT['bio-birthday'] = "Geburtstag";
    $TEXT['bio-today'] = "Heute";
    $TEXT['bio-intellectual'] = "Intelligenz";
    $TEXT['bio-emotional'] = "Emotion";
    $TEXT['bio-physical'] = "K�rper";

    // ---------------------------------------------------------------------
    // INSTANT ART DEMO
    // ---------------------------------------------------------------------

    $TEXT['iart-head'] = "Instant Art (Beispiel f�r PHP+GD+FreeType)";
    $TEXT['iart-text1'] = "Font �AnkeCalligraph� von <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
    $TEXT['iart-ok'] = "OK";

    // ---------------------------------------------------------------------
    // FLASH ART DEMO
    // ---------------------------------------------------------------------

    // $TEXT['flash-head'] = "Flash Art (Beispiel f�r PHP+MING)";
    // $TEXT['flash-text1'] = "Das MING Projekt f�r Windows wurde leider nicht weiterverfolgt und ist deshalb unvollst�ndig.<br>Vgl. bitte <a class=blue target=extern href=\"http://ming.sourceforge.net/install.html/\">Ming - an SWF output library and PHP module</a>";
    // $TEXT['flash-ok'] = "OK";


    // ---------------------------------------------------------------------
    // FLASH ART DEMO
    // ---------------------------------------------------------------------

    $TEXT['flash-head'] = "Flash Art (Beispiel f�r PHP+MING)";
    $TEXT['flash-text2'] = "Font �AnkeCalligraph� von <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
    $TEXT['flash-ok'] = "OK";
    $TEXT['flash-text1'] = "Das MING Projekt f�r Windows wurde leider nicht weiterverfolgt und ist deshalb unvollst�ndig.<br>Vgl. bitte <a class=blue target=extern href=\"http://www.opaque.net/wiki/index.php?Ming\">Ming - an SWF output library and PHP module</a>";

    // ---------------------------------------------------------------------
    // PHONE BOOK DEMO
    // ---------------------------------------------------------------------

    $TEXT['phonebook-head'] = "Telefonbuch (Beispiel f�r PHP+SQLite)";

    $TEXT['phonebook-text1'] = "Ein sehr einfaches Telefonbuch. Allerdings mit einer sehr aktuellen Technik:<br>SQLite, einer SQL-Datenbank ohne extra Server.";

    $TEXT['phonebook-error'] = "Kann die Datenbank nicht �ffnen!";
    $TEXT['phonebook-head1'] = "Meine Telefonnummern";
    $TEXT['phonebook-attrib1'] = "Nachname";
    $TEXT['phonebook-attrib2'] = "Vorname";
    $TEXT['phonebook-attrib3'] = "Telefonnummer";
    $TEXT['phonebook-attrib4'] = "Aktion";
    $TEXT['phonebook-sure'] = "Wirklich sicher?";
    $TEXT['phonebook-head2'] = "Eintrag hinzuf�gen";
    $TEXT['phonebook-button1'] = "L�SCHEN";
    $TEXT['phonebook-button2'] = "HINZUF�GEN";

    // ---------------------------------------------------------------------
    // ABOUT
    // ---------------------------------------------------------------------

    $TEXT['about-head'] = "�ber XAMPP";

    $TEXT['about-subhead1'] = "Konzept und Umsetzung";

    $TEXT['about-subhead2'] = "Design";

    $TEXT['about-subhead3'] = "Mitwirkung";

    $TEXT['about-subhead4'] = "Ansprechpartner";

    // ---------------------------------------------------------------------
    // MERCURY
    // ---------------------------------------------------------------------

    $TEXT['mail-head'] = "Mailing mit Mercury Mail SMTP und POP3 Server";
    $TEXT['mail-hinweise'] = "Einige wichtige Hinweise zur Nutzung von Mercury findet ihr hier!";
    $TEXT['mail-adress'] = "Adresse des Absenders:";
    $TEXT['mail-adressat'] = "Adresse des Adressats:";
    $TEXT['mail-cc'] = "CC:";
    $TEXT['mail-subject'] = "Betreff:";
    $TEXT['mail-message'] = "Nachricht:";
    $TEXT['mail-sendnow'] = "Die Nachricht wird nun versendet ...";
    $TEXT['mail-sendok'] = "Die Nachricht wurde erfolgreich versandt!";
    $TEXT['mail-sendnotok'] = "Fehler! Die Nachricht konnte nicht versendet werden!";
    $TEXT['mail-help1'] = "Hinweise f�r die Nutzung von Mercury:<br><br>";
    $TEXT['mail-help2'] = "<ul>
    <li>Mercury braucht beim Start eine Aussenbindung (DF� oder DSL);</li>
    <li>Beim start setzt Mercury seinen Domain Name Service (DNS) automatisch auf den Nameserver des Providers;</li>
    <li>Benutzer von Gateway-Servern sollten hingegen einen Domain Name Server via TCP/IP gesetzt haben (z.B. von T-Online mit der IP 194.25.2.129);</li>
    <li>Die Config-Datei von Mercury lautet MERCURY.INI;</li>
    <li>Lokal versandte E-Mails werden u.U. von manchen Providern abgelehnt (vorallem von T-Online und AOL). Der Grund: Diese Provider �berpr�fen den Mail Header bez�glich einer RELAY Option, um SPAM zu vermeiden;</li>
    <li>lokal zum Testen eine E-Mail an die User postmaster@localhost und admin@localhost senden und den Eingang in den Verzeichnissen \\xampp\\MercuryMail\\MAIL\\Admin kontrollieren;</li>
    <li>ein Test Benutzer hei�t \"newuser\" (newuser@localhost) mit dem Passwort = wampp;</li>
    <li>SPAM und andere Schweinereien sind mit Mercury total verboten!;</li>
    </ul>";
    $TEXT['mail-url'] = "<a href=\"http://www.pmail.com/overviews/ovw_mercury.htm\" target=\"_top\">http://www.pmail.com/overviews/ovw_mercury.htm</a>";
    // ---------------------------------------------------------------------
    // FileZilla FTP
    // ---------------------------------------------------------------------

    $TEXT['filezilla-head'] = "FileZilla FTP Server";
    $TEXT['filezilla-install'] = "Der Apache ist <U>kein</U> FTP Server ... aber FileZilla FTP ist einer. Bitte beachtet die folgenden Hinweise.";
    $TEXT['filezilla-install2'] = "Einfach die Datei \"filezilla_setup.bat\" im Hauptverzeichnis des xampp starten, um den FTP Server einzurichten. Unter Windows NT, 2000 und XP Professional Betrienssystemen wird der Nutzer nun automatisch aufgefordert, FileZilla als Dienst zu installieren, damit der Server starten kann.";
    $TEXT['filezilla-install3'] = "Nun k�nnt ihr \"FileZilla FTP\" konfigurieren. Nutzt dazu das FileZilla Interface namens \"FileZilla Server Interface.exe\" im FileZilla-Verzeichnis. Nat�rlich k�nnt ihr euch an der Beispielkonfiguration orientieren. Zwei Nutzer wurde in dem Beispiel angelegt:<br><br>
    A: Ein Standardnutzer namens \"newuser\", Kennwort \"wampp\". Das Heimatverzeichnis ist xampp\htdocs.<br>
    B: Ein Anonymous User namens \"anonymous\", kein Kennwort. Das Heimatverzeichnis ist xampp\anonymous. Kann via Browser mit <a href=\"ftp://127.0.0.1\" target=\"_new\">ftp://127.0.0.1</a> angesprochen werden.<br><br>Der FileZilla ist hier erst einmal nur �ber die Loopback Adresse 127.0.0.1 gebunden, ihr k�nnt den zu nutzenden IP Addressbereich aber noch �ber das FileZilla Interface �ndern.";
    $TEXT['filezilla-install4'] = "Den FTP Server stoppen mit \"FileZillaFTP_stop.bat\". Wer den Server als Dienst starten m�chte, sollte die Exekute-Datei mal mit Doppelklick auf \"FileZillaServer.exe\" starten. Dieser fragt dann nach den ganzen Startoptionen.";
    $TEXT['filezilla-url'] = "<br><br><a href=\"http://filezilla.sourceforge.net\" target=\"_top\">http://filezilla.sourceforge.net</a>";

    // ---------------------------------------------------------------------
    // PEAR
    // ---------------------------------------------------------------------

    $TEXT['pear-head'] = "Excel Export mit PEAR (PHP)";
    $TEXT['pear-text'] = "Ein kurzes <a class=blue target=extern href=\"http://www.contentmanager.de/magazin/artikel_310-print_excel_export_mit_pear.html\">Manual</A> machte freundlicher Weise Bj�rn Schotte von <a class=blue target=extern href=\"http://www.thinkphp.de/\">ThinkPHP</A>";
    $TEXT['pear-cell'] = "Der Inhalt einer Excel Zelle";

    // ---------------------------------------------------------------------
    // JPGRAPH
    // ---------------------------------------------------------------------

    $TEXT['jpgraph-head'] = "JpGraph - Grafik Bibliotheken f�r PHP";
    $TEXT['jpgraph-url'] = "<br><br><a href=\"http://www.aditus.nu/jpgraph/\" target=\"_top\">http://www.aditus.nu/jpgraph/</a>";

    // ---------------------------------------------------------------------
    // ADODB
    // ---------------------------------------------------------------------

    $TEXT['ADOdb-head'] = "ADOdb - Der andere Datenbank-Zugriff (PHP)";
    $TEXT['ADOdb-text'] = "ADOdb steht f�r Active Data Objects Data Base und unterst�tzt MySQL, PostgreSQL, Interbase, Firebird, Informix, Oracle, MS SQL 7, Foxpro, Access, ADO, Sybase, FrontBase, DB2, SAP DB, SQLite sowie ODBC. Die Sybase, Informix, FrontBase und PostgreSQL Treiber sind Gemeinschaftsbeitr�ge. Ihr findet es hier unter \\xampp\\php\\PEAR\\adodb.";
    $TEXT['ADOdb-example'] = "Das Beispiel:";
    $TEXT['ADOdb-dbserver'] = "Datenbankserver (MySQL, Oracle ..?)";
    $TEXT['ADOdb-host'] = "Host des DB-Servers (Name oder IP)";
    $TEXT['ADOdb-user'] = "Name des zugriffsberechtigten Nutzers";
    $TEXT['ADOdb-password'] = "Passwort des zugriffsberechtigten Nutzers";
    $TEXT['ADOdb-database'] = "Datenbank auf dem Datenbankserver";
    $TEXT['ADOdb-table'] = "Tabelle dieser Datenbank";
    $TEXT['ADOdb-nottable'] = "<p><b>Tabelle nicht gefunden!</b>";
    $TEXT['ADOdb-notdbserver'] = "<p><b>Der Treiber f�r diesen Datenbankserver existiert nicht oder es handelt es ich um ein ODBC, ADO oder OLEDB Treiber!</b>";

    // ---------------------------------------------------------------------
    // INFO
    // ---------------------------------------------------------------------

    $TEXT['info-package'] = "Packet";
    $TEXT['info-pages'] = "Seiten";
    $TEXT['info-extension'] = "Endungen";
    $TEXT['info-module'] = "Apache Modul";
    $TEXT['info-description'] = "Beschreibung";
    $TEXT['info-signature'] = "Signatur";
    $TEXT['info-docdir'] = "Dokumentverzeichnis";
    $TEXT['info-port'] = "Standard Port";
    $TEXT['info-service'] = "Dienste";
    $TEXT['info-examples'] = "Beispiele";
    $TEXT['info-conf'] = "Konfigurationsdateien";
    $TEXT['info-requires'] = "Braucht";
    $TEXT['info-alternative'] = "Alternativ";
    $TEXT['info-tomcatwarn'] = "Warnung! Tomcat ist nicht auf Port 8080 gestartet.";
    $TEXT['info-tomcatok'] = "OK! Der Tomcat ist auf Port 8080 erfolgreich gestartet.";
    $TEXT['info-tryjava'] = "Das Java Beispiel (JSP) �ber Apache MOD_JK.";
    $TEXT['info-nococoon'] = "Warnung! Tomcat ist nicht auf Port 8080 gestartet. So kann ich nicht \"Cocoon\" installieren!";
    $TEXT['info-okcocoon'] = "Ok! Der Tomcat ist hochgefahren. Die Installation kann ein paar Minuten dauern. Zum installieren von \"Cocoon\" klicke nun hier ...";

    // ---------------------------------------------------------------------
    // PHP Switch
    // ---------------------------------------------------------------------

    $TEXT['switch-head'] = "PHP Switch 1.0 win32 f�r XAMPP";
    $TEXT['switch-phpversion'] = "<i><b>Aktuell in diesem XAMPP ist ";
    $TEXT['switch-whatis'] = "<b>Was macht eigentlich der PHP Switch?</b><br>Der ApacheFriends PHP Switch f�r den XAMPP wechselt zwischen der PHP Version 4 zu der Version 5 UND zur�ck. Damit kannst du deine Skripte mit PHP 4 oder PHP 5 testen.<p>";
    $TEXT['switch-find'] = "<b>Wo ist der PHP Switch?</b><br>PHP Switch f�r den XAMPP ist eine PHP Datei im XAMPP install Ordner mit dem Namen \"php-switch.php\" ausf�hrt. Ausgef�hrt wird der Wechsel mit dem Batchfile ";
    $TEXT['switch-care'] = "<b>Was muss ich beachten?</b><br>PHP Switch weigert sich den Wechsel vorzunehmen, wenn a) der Apache noch l�uft und b) \".phpversion\" Datei im install Ordner fehlt oder fehlerhaft ist. In der \".phpversion\" steht die (Haupt) Nummer der gerade benutzen PHP Version. Also zu Beginn \"shutdown\" Apache und erst dann die  \"php-switch.bat\" ausf�hren.<p>";
    $TEXT['switch-where4'] = "<b>Wo sind danach meine (alten) Konfigurationsdateien?</b><br><br>F�r PHP 4:<br>";
    $TEXT['switch-where5'] = "<br><br>F�r PHP 5:<br>";
    $TEXT['switch-make1'] = "<b>Werden denn �nderungen �bernommen?</b><br><br>Ja! F�r PHP4 oder PHP5 jeweils in der<br>";
    $TEXT['switch-make2'] = "<br><br> .. gesichert bei PHP4 ...<br>";
    $TEXT['switch-make3'] = "<br><br> .. gesichert bei PHP5 ...<br>";
    $TEXT['switch-make4'] = "<br><br>Und auch wieder bei einem \"switch\" zur�ckgef�hrt!!<p>";
    $TEXT['switch-not'] = "<b>Ich bin so zufrieden und m�chte keinen \"Switch\" !!!</b><br>Super! Dann vergi� das ganze  hier ... ;-)<br>";

    // ---------------------------------------------------------------------
    // Cocoon
    // ---------------------------------------------------------------------

    $TEXT['go-cocoon'] = "Cocoon nun �ber http://localhost/cocoon/ aufrufen!";
    $TEXT['path-cocoon'] = "Der Verzeichnispfad zu Cocoon lautet: ...\\xampp\\tomcat\\webapps\\cocoon";

    // ---------------------------------------------------------------------
    // Guest
    // ---------------------------------------------------------------------

    $TEXT['guest1-name'] = "Current Guest in dieser Release: <i>FCKeditor</i>";
    $TEXT['guest1-text1'] = "Ein netter HMTL ONLINE Editor mit viel JavaScript. Optimiert f�r den IE, funktioniert �brigens nicht mit dem Mozilla FireFox.";
    $TEXT['guest1-text2'] = "FCKeditor Homepage: <a href=\"http://www.fckeditor.net\" target=\"_new\">www.fckeditor.net</a>. �brigens: Der Font Arial funktioniert nicht, aber vielleicht wei� hier jemand weiter?";
    $TEXT['guest1-text3'] = "<a href=\"guest-FCKeditor/fckedit-dynpage.php\" target=\"_new\">Zur dynamischen Seite bearbeitet mit FCKeditor.</A>";

    // ---------------------------------------------------------------------
    // NAVI SPECIALS SECTION
    // ---------------------------------------------------------------------

    $TEXT['navi-specials'] = "Specials";

    // ---------------------------------------------------------------------
    // PS AND PARADOX EXAMPLE
    // ---------------------------------------------------------------------

    $TEXT['navi-ps'] = "PHP PostScript";
    $TEXT['ps-head'] = "PostScript Modul Beispiel";
    $TEXT['ps-text1'] = "PostScript Modul �php_ps� von <a class=blue target=extern href=\"mailto:steinm@php.net\">Uwe Steinmann</a>";
    $TEXT['ps-text2'] = "Tipp: Zum konvertieren von PS-Dateien zu PDF-Dateien unter win32 kann <a href=\"http://www.shbox.de/\" target=\"_new\">FreePDF</a> mit <a href=\"http://www.ghostscript.com/awki/\" target=\"_new\">GhostScript</a> benutzt werden.";

    $TEXT['navi-paradox'] = "PHP Paradox";
    $TEXT['paradox-head'] = "Paradox Modul Beispiel";
    $TEXT['paradox-text1'] = "Paradox Modul �php_paradox� von <a class=blue target=extern href=\"mailto:steinm@php.net\">Uwe Steinmann</a>";
    $TEXT['paradox-text2'] = "<h2>Lesen und Schreiben einer Paradax Datenbank</h2>";
    $TEXT['paradox-text3'] = "Weitere Beispiele gibt es im Verzeichnis ";
    $TEXT['paradox-text4'] = "Weiterf�hrende Informationen zu Paradox Datenbanken in <a href=\"http://de.wikipedia.org/wiki/Paradox_%28Datenbank%29\" target=\"_new\">WikiPedia</a>.";
?>
