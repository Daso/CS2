<?php
    // ---------------------------------------------------------------------
    // GLOBAL
    // ---------------------------------------------------------------------

    $TEXT['global-xampp'] = "XAMPP para Windows";
    $TEXT['global-showcode'] = "Seleccionar el c�digo fuente";
    $TEXT['global-sourcecode'] = "C�digo fuente";

    // ---------------------------------------------------------------------
    // NAVIGATION
    // ---------------------------------------------------------------------

    $TEXT['navi-xampp'] = "XAMPP";
    $TEXT['navi-welcome'] = "Bienvenido";
    $TEXT['navi-status'] = "Estado";
    $TEXT['navi-security'] = "Chequeo de seguridad";
    $TEXT['navi-doc'] = "Documentaci�n";
    $TEXT['navi-components'] = "Componentes";
    $TEXT['navi-about'] = "Acerca de XAMPP";

    $TEXT['navi-demos'] = "Demos";
    $TEXT['navi-cdcol'] = "Administraci�n de CD";
    $TEXT['navi-bio'] = "Bioritmo";
    $TEXT['navi-guest'] = "Libro de invitados";
    $TEXT['navi-perlenv'] = "MiniPerl";
    $TEXT['navi-iart'] = "Instant Art";
    $TEXT['navi-iart2'] = "Flash Art";
    $TEXT['navi-phonebook'] = "Agenda de telefonos";
    $TEXT['navi-perlasp'] = "Perl:ASP";
    $TEXT['navi-pear'] = "Excel_Writer";
    $TEXT['navi-adodb'] = "ADOdb";
    $TEXT['navi-perl'] = "Perl";
    $TEXT['navi-python'] = "Python";
    $TEXT['navi-jsp'] = "Java";
    $TEXT['navi-phpswitch'] = "Conmutador PHP";

    $TEXT['navi-tools'] = "Herramientas";
    $TEXT['navi-phpmyadmin'] = "phpMyAdmin";
    $TEXT['navi-webalizer'] = "Webalizer";
    $TEXT['navi-mercury'] = "Mercury Mail";
    $TEXT['navi-filezilla'] = "FileZilla FTP";
    $TEXT['navi-jpgraph'] = "JpGraph";

    $TEXT['navi-specialguest'] = "Current Guest";
    $TEXT['navi-guest1'] = "FCKeditor";

    $TEXT['navi-languages'] = "Lenguajes";
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

    $TEXT['status-head'] = "Estado-XAMPP";
    $TEXT['status-text1'] = "En esta vista se puede ver que componentes de XAMPP ya han sido iniciadas y funcionan. Si no se ha cambiado nada en la configuraci�n de XAMPP, debieran estar activados MySQL, PHP, Perl, CGI y SSI.";

    $TEXT['status-text2'] = "Este chequeo s�lo funciona de forma fiable, si no se ha cambiado nada en la configuraci�n de Apache. Seg�n que modificaciones pueden falsear el resultado. Con SSL (https://localhost) NO funcionan los chequeos de estado!";

    $TEXT['status-mysql'] = "MySQL-Base de datos";
    $TEXT['status-ssl'] = "HTTPS (SSL)";
    $TEXT['status-php'] = "PHP";
    $TEXT['status-perl'] = "Perl con mod_perl";
    $TEXT['status-cgi'] = "Common Gateway Interface (CGI)";
    $TEXT['status-ssi'] = "Server Side Includes (SSI)";
    $TEXT['status-python'] = "Python con mod_python";
    $TEXT['status-smtp'] = "SMTP Server";
    $TEXT['status-ftp'] = "FTP Server";
    $TEXT['status-tomcat'] = "Tomcat Server";
    $TEXT['status-named'] = "Domain Name Server (DNS)";
    $TEXT['status-mmcache'] = "Ampliaci�n PHP �Turck MMCache�";
    $TEXT['status-mmcache-url'] = "http://www.apachefriends.org/faq-wampp.html#mmcache";
    $TEXT['status-oci8'] = "Ampliaci�n PHP �OCI8/Oracle�";
    $TEXT['status-oci8-url'] = "http://www.apachefriends.org/faq-lampp.html#oci8";

    $TEXT['status-lookfaq'] = "ver FAQ";
    $TEXT['status-ok'] = "ACTIVADO";
    $TEXT['status-nok'] = "DESACTIVADO";

    $TEXT['status-tab1'] = "Componente";
    $TEXT['status-tab2'] = "Estado";
    $TEXT['status-tab3'] = "Consejo";

    // ---------------------------------------------------------------------
    // SECURITY
    // ---------------------------------------------------------------------

    $TEXT['security-head'] = "XAMPP-Seguridad";
    $TEXT['security-text1'] = "Por medio de este resumen puede verse que puntos de la instalaci�n a�n son inseguros y tendr�an que ser controlados.(Siga leyendo debajo de la tabla.)";
    $TEXT['security-text2'] = "Los puntos marcados en verde estan seguros; los puntos en rojo son definitivamente inseguros y en los amarillos no se pudo comprobar la seguridad (por ejemplo porque el programa a comprobar no estaba en marcha).<p>Para solucionar estos agujeros en la seguridad llame simplemente al siguiente comando:<p>=> <a href=\"/security/xamppsecurity.php\"><b>http://localhost/security/xamppsecurity.php</b></a> <= &nbsp;&nbsp;[allowed only for localhost]<p>De esta manera se inicia un programa interactivo, que cerrar� todos estos agujeros de seguridad.";

    $TEXT['security-text3'] = "<b>Please consider this:
    With more XAMPP security some examples will NOT execute error free. If you use PHP in \"safe mode\" for example some functions of this security frontend will not working anymore. Often even more security means less functionality at the same time.</b>";
    $TEXT['security-text4'] = "The XAMPP default ports:";

    $TEXT['security-ok'] = "SEGURO";
    $TEXT['security-nok'] = "INSEGURO";
    $TEXT['security-noidea'] = "DESCONOCIDO";

    $TEXT['security-tab1'] = "Concerniente a";
    $TEXT['security-tab2'] = "Estado";

    $TEXT['security-checkapache-nok'] = "Estas paginas XAMPP se visualizan a trav�s de la red";
    $TEXT['security-checkapache-ok'] = "Estas paginas XAMPP NO se visualizan a trav�s de la red";
    $TEXT['security-checkapache-text'] = "Todo lo que puedes ver aqu� (estas paginas, este texto), puede verlas potencialmente cualquier otro, que puede conectar con tu ordenador por la red. Si por ejemplo conectas con este ordenador Internet, entonces tendr�a acceso a estas paginas cualquiera en Internet, que conociera tu direcci�n IP o la adivinara.";

    $TEXT['security-checkmysqlport-nok'] = "Acceso a MySQL  a trav�s de la red";
    $TEXT['security-checkmysqlport-ok'] = "NO se tiene acceso a MySQL a trav�s de la red";
    $TEXT['security-checkmysqlport-text'] = "Se puede acceder potencialmente a la base de datos MySQL a trav�s de la red. A pesar de que desde la instalaci�n est�ndar de XAMPP NO es posible acceder  a la base de datos desde el exterior, debieras desconectar el acceso a MySQL desde la red para conseguir una seguridad absoluta.";

    $TEXT['security-checkpmamysqluser-nok'] = "El usuario phpMyAdmin pma no tiene clave de acceso.";
    $TEXT['security-checkpmamysqluser-ok'] = "El usuario phpMyAdmin pma tiene una clave de acceso";
    $TEXT['security-checkpmamysqluser-text'] = "phpMyAdmin almacena sus propios ajustes en la base de datos MySQL. phpMyAdmin utiliza para esto al usuario MySQL pma. Para que nadie m�s que phpMyAdmin pueda acceder a la base de datos con este nombre de usuario, debiera establecer una clave de acceso para este usuario.";

    $TEXT['security-checkmysql-nok'] = "MySQL-root NO tiene clave de acceso";
    $TEXT['security-checkmysql-ok'] = "MySQL-root tiene clave de acceso";
    $TEXT['security-checkmysql-out'] = "A MySQL server is not running  or is blocked by a firewall!";
    $TEXT['security-checkmysql-text'] = "Al MySQL-root a�n NO se le ha asignado clave de acceso. Cada usuario del ordenador podr� as� usar de forma indiscriminada la base de datos MySQL. Al MySQL-root se le debiera asignar de todas formas una clave de acceso.";

    $TEXT['security-checkftppassword-nok'] = "La clave de acceso del FTP sigue siendo'lampp'";
    $TEXT['security-checkftppassword-ok'] = "Se ha cambiado la clave de acceso del FTP";
    $TEXT['security-checkftppassword-out'] = "A FTP server is not running  or is blocked by a firewall!";
    $TEXT['security-checkftppassword-text'] = "Si activas ProFTPD en XAMPP , podr�s subir ficheros a tu servidor web con el nombre de usuario 'nobody' y la clave 'lampp' de forma est�ndar. Potencialmente podr�a hacerlo cualquiera y por eso se debiera cambiar la clave de acceso.";

    $TEXT['security-pop-nok'] = "The test user (newuser) for Mercury Mail server (POP3) have an old password (wampp)";
    $TEXT['security-pop-ok'] = "The test user \"newuser\" for the POP3 server (Mercury Mail?) does not exists anymore or have a new password";
    $TEXT['security-pop-out'] = "A POP3 server like Mercury Mail is not running or is blocked by a firewall!";
    $TEXT['security-pop-notload'] = "<i>The necessary IMAP extension for this secure test is not loading (php.ini)!</i><br>";
    $TEXT['security-pop-text'] = "Please check and perhaps edit all users and passwords in the the Mercury Mail server configuration!";

    $TEXT['security-phpmyadmin-nok'] = "PhpMyAdmin is free accessible by network";
    $TEXT['security-phpmyadmin-ok'] = "PhpMyAdmin password login is enabled.";
    $TEXT['security-phpmyadmin-out'] = "PhpMyAdmin: Could not find the 'config.inc.php' ...";
    $TEXT['security-phpmyadmin-text'] = "PhpMyAdmin is accessible by network without password. The configuration 'httpd' or 'cookie' in the \"config.inc.php\" can help.";

    $TEXT['security-checkphp-nok'] = "PHP is NOT running in \"safe mode\"";
    $TEXT['security-checkphp-ok'] = "PHP is running in \"safe mode\"";
    $TEXT['security-checkphp-out'] = "Unable to control the setting of PHP!";
    $TEXT['security-checkphp-text'] = "If do you want to offer PHP executions for outside persons, please think about a \"safe mode\" configuration. But for standalone developer we recommend NOT the \"safe mode\" configuration because some important functions will not working then. <a href=\"http://www.php.net/features.safe-mode\" target=\"_new\"><font size=1>More Info</font></a>";

    // ---------------------------------------------------------------------
    // SECURITY SETUP
    // ---------------------------------------------------------------------

    $TEXT['mysql-security-head'] = "Security console MySQL & XAMPP directory protection";
    $TEXT['mysql-rootsetup-head'] = "MYSQL SECTION: \"ROOT\" PASSWORD";
    $TEXT['mysql-rootsetup-text1'] = "";
    $TEXT['mysql-rootsetup-notrunning'] = "The MySQL server is not running or is blocked by a firewall! Please check this problem first ...";
    $TEXT['mysql-rootsetup-passwdnotok'] = "The new password is identical with the repeat password. Please enter both passwords for new!";
    $TEXT['mysql-rootsetup-passwdnull'] = "Zero passwords ('') will not accepted!";
    $TEXT['mysql-rootsetup-passwdsuccess'] = "SUCCESS: The password for the SuperUser 'root' was set or updated!
    But note: The initialization of the new password for \"root\" needs a RESTART OF MYSQL !!!! The data with the new password was safed in the following file:";
    $TEXT['mysql-rootsetup-passwdnosuccess'] = "ERROR: The root password is perhaps wrong. MySQL decline the login with these current root password.";
    $TEXT['mysql-rootsetup-passwdold'] = "Current passwort:";
    $TEXT['mysql-rootsetup-passwd'] = "New password:";
    $TEXT['mysql-rootsetup-passwdrepeat'] = "Repeat the new password:";
    $TEXT['mysql-rootsetup-passwdchange'] = "Password changing";
    $TEXT['mysql-rootsetup-phpmyadmin'] = "PhpMyAdmin authentification:";
    $TEXT['mysql-passwort-infile'] = "Safe plain password in text file?";
    $TEXT['mysql-passwort-risk'] = "Security risk!";

    $TEXT['xampp-setup-head'] = "XAMPP DIRECTORY PROTECTION (.htaccess)";
    $TEXT['xampp-setup-user'] = "User:";
    $TEXT['xampp-setup-passwd'] = "Password:";
    $TEXT['xampp-setup-start'] = "Make safe the XAMPP directory";
    $TEXT['xampp-setup-notok'] = "<br><br>ERROR: The string for the user name and password must have at least three  characters and not more then 15 characters. Special characters like <��� (usw.) and empty characters are not allowed!<br><br>";
    $TEXT['xampp-setup-ok'] = "<br><br>The root password was successfully changed. Please restart MYSQL for loading these changes!<br><br>";
    $TEXT['xampp-config-ok'] = "<br><br>SUCCESS: The XAMPP directory is protected now! All personal data was safed in the following file:<br>";
    $TEXT['xampp-config-notok'] = "<br><br>ERROR: Your system could NOT activate the directory protection with the \".htaccess\" and the \"htpasswd.exe\". Perhaps PHP is in the \"Safe Mode\". <br><br>";


    // ---------------------------------------------------------------------
    // INICIO
    // ---------------------------------------------------------------------

    $TEXT['start-head'] = "Bienvenido a XAMPP para Windows";

    $TEXT['start-subhead'] = "Felicidades:<br>XAMPP se instal� con exito en su ordenador!";

    $TEXT['start-text-newest'] = "";

    $TEXT['start-text1'] = "Ahora se puede empezar a trabajar. :) Primero por favor pulse encima de �Estado� en la parte izquierda. De esta manera tendr� una visi�n de que es lo que funciona ya. Algunas funciones estar�n desactivadas. Es intencionado. Son funciones, que no funcionan en todas partes o eventualmente podr�an ocasionar problemas.";

    $TEXT['start-text2'] = "Atenci�n: XAMPP fue modificado a partir de la versi�n 1.4.x a una administraci�n de paquete �nico. Existen los siguientes paquetes/Addons: <ul><li>XAMPP paquete b�sico</li><li>XAMPP Perl addon</li><li>XAMPP Tomcat addon</li><li>XAMPP Cocoon addon</li><li>XAMPP Python addon (developer version)</li></ul>Y en un futuro: <ul><li>XAMPP Utility addon (Accesorio pero a�n inactivo)</li><li>XAMPP Server addon (otros servidores a�n inactivos)</li><li>XAMPP Other addon (otras cosas �tiles a�n inactivas)</li></ul>";

    $TEXT['start-text3'] = "Por favor \"instalad\" los paquetes adicionales, que a�n necesiteis, simplemente a continuaci�n. Despues de subirlos con �xito, por favor siempre accionar  \"setup_xampp.bat\" , para inicializar nuevamente XAMPP. A bueno, las versiones Instalador de los Addons individuales funcionan s�lo si el paquete b�sico XAMPP tambien fue montado a partir de una versi�n instalador.";

    $TEXT['start-text4'] = "Para el soporte OpenSSL utilice por favor el certificado de chequeo con la URL <a href='https://127.0.0.1' target='_top'>https://127.0.0.1</a> � <a href='https://localhost' target='_top'>https://localhost</a>";

    $TEXT['start-text5'] = "Y muy importante! Un gran agradecimiento a la colaboraci�n y ayuda de Nemesis, KriS, Boppy, Pc-Dummy y a todos los amigos de XAMPP!";

    $TEXT['start-text6'] = "Os deseamos mucha diversi�n, Kay Vogelgesang + Kai 'Oswald' Seidler + Carsten Wiedmann";

    // ---------------------------------------------------------------------
    // MANUALS
    // ---------------------------------------------------------------------

    $TEXT['manuals-head'] = "Documentaci�n Online";

    $TEXT['manuals-text1'] = "XAMPP combina muchos paquetes diferentes en un s�lo paquete. Aqu� hay una selecci�n de la documentaci�n est�ndar y de referencia de los paquetes m�s importantes de XAMPP.";


    $TEXT['manuals-list1'] = "
    <ul>
    <li><a href=\"http://httpd.apache.org/docs/2.2/en/\">Apache 2 documentation (en Ingl�s)</a>
    <li><a href=\"http://dev.mysql.com/doc/refman/5.1/en/index.html\">MySQL documentation (en Ingl�s)</a>
    <li><a href=\"http://www.php.net/manual/en/\">PHP documentation (en Ingl�s)</a>
    <li><a href=\"http://perldoc.perl.org/\">Perl documentation (en Ingl�s)</a>
    <li><a href=\"http://wiki.filezilla-project.org/Documentation\">FileZilla FTP Server (en Ingl�s)</a>
    <li><a href=\"http://wiki.pmail.com/index.php?title=Mercury:Contents\">Mercury Mail Transport Agent (en Ingl�s)</a>
    </ul>";

    $TEXT['manuals-text2'] = "Y aqu� una peque�a selecci�n de las instrucciones y de las p�ginas centrales de documentaci�n de Apache Friends:";

    $TEXT['manuals-list2'] = "
    <ul>
    <li><a href=\"http://www.apachefriends.org/en/faq-xampp.html\">Documentaci�n Apache Friends</a>
    <li><a href=\"http://www.freewebmasterhelp.com/tutorials/php/\">PHP para t�</a> by David Gowans
    <li><a href=\"http://www.davesite.com/webstation/html/\">HTML - An Interactive Tutorial For Beginners</a> by Dave Kristula
    <li><a href=\"http://www.comp.leeds.ac.uk/Perl/start.html\">Introducci�n a CGI</a> by Nik Silver
    </ul>";

    $TEXT['manuals-text3'] = "Mucha diversi�n y exito con la lectura! :)";

    // ---------------------------------------------------------------------
    // COMPONENTS
    // ---------------------------------------------------------------------

    $TEXT['components-head'] = "Componentes XAMPP";

    $TEXT['components-text1'] = "XAMPP combina muchos paquetes en uno s�lo.Aqu� tiene un res�men de los paquetes que contiene.";

    $TEXT['components-text2'] = "Muchas gracias a los innumerables autores de estos programas.";

    $TEXT['components-text3'] = "En la carpeta <a href='/licenses/'><b>\\xampp\licenses</b></a> se encuentran los textos de licencia de estos paquetes.";

    // ---------------------------------------------------------------------
    // CD COLLECTION DEMO
    // ---------------------------------------------------------------------

    $TEXT['cds-head'] = "Administraci�n del CD (Ejemplo de una clase PHP+MySQL+PDF Class)";
    $TEXT['cds-head-fpdf'] = "Administraci�n del CD (Ejemplo de una clase PHP+MySQL+FPDF)";

    $TEXT['cds-text1'] = "Una administraci�n de CD muy sencilla. Ya que no se pueden corregir entradas, cuando te equivocas, se aconseja phpMyAdmin (abajo a la izquierda en la navegaci�n).";

    $TEXT['cds-text2'] = "<b>Nuevo desde 0.9.6:</b> Salida de los CDs elegidos c�mo <a href='$_SERVER[PHP_SELF]?action=getpdf'>Documento PDF</a>.";

    $TEXT['cds-error'] = "No puede encontrar la base de datos!<br>�Funciona MySQL o se cambi� la clave de acceso?";
    $TEXT['cds-head1'] = "Mis CDs";
    $TEXT['cds-attrib1'] = "Int�rprete";
    $TEXT['cds-attrib2'] = "T�tulo";
    $TEXT['cds-attrib3'] = "A�o";
    $TEXT['cds-attrib4'] = "Acci�n";
    $TEXT['cds-sure'] = "�Seguro?";
    $TEXT['cds-head2'] = "a�adir CD";
    $TEXT['cds-button1'] = "borrar CD";
    $TEXT['cds-button2'] = "A�ADIR CD";

    // ---------------------------------------------------------------------
    // BIORHYTHM DEMO
    // ---------------------------------------------------------------------

    $TEXT['bio-head'] = "Bioritmo (con PHP+GD)";
    $TEXT['bio-head'] = "Bioritmo (Ejemplo de  PHP+GD)";

    $TEXT['bio-by'] = "de";
    $TEXT['bio-ask'] = "Por favor introduce tu fecha de nacimiento.";
    $TEXT['bio-ok'] = "OK";
    $TEXT['bio-error1'] = "La fecha";
    $TEXT['bio-error2'] = "no es v�lida";

    $TEXT['bio-birthday'] = "Fecha de nacimiento";
    $TEXT['bio-today'] = "Hoy";
    $TEXT['bio-intellectual'] = "Inteligencia";
    $TEXT['bio-emotional'] = "Emoci�n";
    $TEXT['bio-physical'] = "Cuerpo";

    // ---------------------------------------------------------------------
    // INSTANT ART DEMO
    // ---------------------------------------------------------------------

    $TEXT['iart-head'] = "Instant Art (Ejemplo de PHP+GD+FreeType)";
    $TEXT['iart-text1'] = "Fuente �AnkeCalligraph� de <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
    $TEXT['iart-ok'] = "OK";

    // ---------------------------------------------------------------------
    // FLASH ART DEMO
    // ---------------------------------------------------------------------

    $TEXT['flash-head'] = "Flash Art (Ejemplo de PHP+MING)";
    $TEXT['flash-text1'] = "Lamentablemente el proyecto MING para Windows no se sigui� desarrollando y por esto est� incompleto<br>Compare por favor<a class=blue target=extern href=\"http://www.opaque.net/wiki/index.php?Ming\">Ming - and SWF output library and PHP module</a>";
    $TEXT['flash-ok'] = "OK";

    // ---------------------------------------------------------------------
    // PHONE BOOK DEMO
    // ---------------------------------------------------------------------

    $TEXT['phonebook-head'] = "Agenda de tel�fonos (Ejemplo de PHP+SQLite)";

    $TEXT['phonebook-text1'] = "Una agenda de tel�fonos muy sencilla. Sin embargo con una tecnolog�a muy actual:<br>SQLite, una base de datos SQL sin Servidor adicional.";

    $TEXT['phonebook-error'] = "NO se puede abrir la base de datos!";
    $TEXT['phonebook-head1'] = "Mis n�meros de tel�fono";
    $TEXT['phonebook-attrib1'] = "Apellido";
    $TEXT['phonebook-attrib2'] = "Nombre";
    $TEXT['phonebook-attrib3'] = "N� de tel�fono";
    $TEXT['phonebook-attrib4'] = "Acci�n";
    $TEXT['phonebook-sure'] = "�Seguro?";
    $TEXT['phonebook-head2'] = "A�adir entrada";
    $TEXT['phonebook-button1'] = "BORRAR";
    $TEXT['phonebook-button2'] = "A�ADIR";

    // ---------------------------------------------------------------------
    // ABOUT
    // ---------------------------------------------------------------------

    $TEXT['about-head'] = "Acerca de XAMPP";

    $TEXT['about-subhead1'] = "Idea y desarrollo";

    $TEXT['about-subhead2'] = "Dise�o";

    $TEXT['about-subhead3'] = "Colaboraciones";

    $TEXT['about-subhead4'] = "Personas de contacto";

    // ---------------------------------------------------------------------
    // MERCURY
    // ---------------------------------------------------------------------

    $TEXT['mail-head'] = "Mailing con Mercury Mail SMTP y POP3 Server";
    $TEXT['mail-hinweise'] = "Encontrar� aqu� algunas indicaciones importantes de utilizaci�n de Mercury!";
    $TEXT['mail-adress'] = "Direcci�n del remitente:";
    $TEXT['mail-adressat'] = "Direcci�n de env�o:";
    $TEXT['mail-cc'] = "CC:";
    $TEXT['mail-subject'] = "Asunto:";
    $TEXT['mail-message'] = "Mensaje:";
    $TEXT['mail-sendnow'] = "El mensaje ser� enviado ahora ...";
    $TEXT['mail-sendok'] = "El mensaje se envi� con exito!";
    $TEXT['mail-sendnotok'] = "Error! No se pudo enviar el mensaje!";
    $TEXT['mail-help1'] = "Indicaciones de uso de Mercury:<br><br>";
    $TEXT['mail-help2'] = "<ul>
    <li>Mercury precisa en el inicio una conexi�n externa (Conexi�n remota o DSL);</li>
    <li>Durante el inicio Mercury fija su Domain Name Service (DNS) autom�ticamente al nombre de servidor del proveedor;</li>
    <li>Usuarios de servidores Gateway debieran haber fijado una DNS a trav�s de TCP/IP;</li>
    <li>El archivo Config de Mercury es MERCURY.INI;</li>
    <li>E-Mails enviados localmente pueden ser devueltos por algunos proveedores (p.e. T-Online o AOL). El motivo: Estos proveedores revisan el Mail Header buscando una RELAY Option, para evitar SPAM;</li>
    <li>Para verificar un E-Mail, env�elo a postmaster@localhost y admin@localhost para controlar la llegada en las carpetas \\xampp\\MercuryMail\\MAIL\\Admin;</li>
    <li>Un usuario de prueba es \"newuser\" (newuser@localhost) con la clave = wampp;</li>
    <li>SPAM y otras guarradas est�n totalmente prohibidas con Mercury!;</li>
    </ul>";
    $TEXT['mail-url'] = "<a href=\"http://www.pmail.com/overviews/ovw_mercury.htm\" target=\"_top\">http://www.pmail.com/overviews/ovw_mercury.htm</a>";
    // ---------------------------------------------------------------------
    // FileZilla FTP
    // ---------------------------------------------------------------------

    $TEXT['filezilla-head'] = "FileZilla FTP Server";
    $TEXT['filezilla-install'] = "Apache  <U>NO</U>es un servidor FTP ... pero S� FileZilla FTP. Por favor tenga en cuenta las siguientes indicaciones.";
    $TEXT['filezilla-install2'] = "Sencillamente ejecutar el fichero \"filezilla_setup.bat\" en el directorio principal de xampp, para instalar el servidor de FTP. Con Windows NT, 2000 y XP Professional se insta al usuario autom�ticamente, a instalar FileZilla c�mo servicio, para iniciar el servidor.";
    $TEXT['filezilla-install3'] = "Ahora podeis configurar \"FileZilla FTP\" . Utilizad para ello el interfaz FileZilla de nombre \"FileZilla Server Interface.exe\" en la carpeta FileZilla. Naturalmente os podeis basar en la configuraci�n de ejemplo. Se han definido 2 usuarios:<br><br>
    A: Un usuario est�ndar de nombre \"newuser\", Clave \"wampp\". El directorio origen es xampp\htdocs.<br>
    B: Un usuario an�nimo de nombre \"anonymous\", sin clave. El directorio origen es xampp\anonymous. Puede conectar con el explorador a <a href=\"ftp://127.0.0.1\" target=\"_new\">ftp://127.0.0.1</a>.<br><br>FileZilla est� enlazado por medio de la direcci�n Loopback 127.0.0.1 , podeis cambiar el rango de IPs utilizables por medio del interfaz de FileZilla.";
    $TEXT['filezilla-install4'] = "Parar el servidor FTP con \"FileZillaFTP_stop.bat\". Quien quiera iniciar el servidor c�mo un servicio, tendr�a que ejecutar con doble click el fichero \"FileZillaServer.exe\". Este pregunta entonces por todas las opciones de inicio.";
    $TEXT['filezilla-url'] = "<br><br><a href=\"http://filezilla.sourceforge.net\" target=\"_top\">http://filezilla.sourceforge.net</a>";

    // ---------------------------------------------------------------------
    // PEAR
    // ---------------------------------------------------------------------

    $TEXT['pear-head'] = "Exportaci�n de Excel con PEAR (PHP)";
    $TEXT['pear-text'] = "Un breve <a class=blue target=extern href=\"http://www.contentmanager.de/magazin/artikel_310-print_excel_export_mit_pear.html\">manual</A> fue hecho amablemente por Bj�rn Schotte de <a class=blue target=extern href=\"http://www.thinkphp.de/\">ThinkPHP</A>";
    $TEXT['pear-cell'] = "El contenido de una celda de Excel.";

    // ---------------------------------------------------------------------
    // JPGRAPH
    // ---------------------------------------------------------------------

    $TEXT['jpgraph-head'] = "JpGraph - bibliotecas graficas para PHP";
    $TEXT['jpgraph-url'] = "<br><br><a href=\"http://www.aditus.nu/jpgraph/\" target=\"_top\">http://www.aditus.nu/jpgraph/</a>";

    // ---------------------------------------------------------------------
    // ADODB
    // ---------------------------------------------------------------------

    $TEXT['ADOdb-head'] = "ADOdb - El otro acceso a bases de datos (PHP)";
    $TEXT['ADOdb-text'] = "ADOdb significa Active Data Objects Data Base y soporta MySQL, PostgreSQL, Interbase, Firebird, Informix, Oracle, MS SQL 7, Foxpro, Access, ADO, Sybase, FrontBase, DB2, SAP DB, SQLite as� c�mo ODBC. Drivers para Sybase, Informix, FrontBase y PostgreSQL son contribuciones de comunidades. Podeis encontrarlas en \\xampp\\php\\PEAR\\adodb.";
    $TEXT['ADOdb-example'] = "El ejemplo";
    $TEXT['ADOdb-dbserver'] = "Servidor de base de datos (MySQL, Oracle ..?)";
    $TEXT['ADOdb-host'] = "Host de base de datos  (Nombre o IP)";
    $TEXT['ADOdb-user'] = "Nombre del usuario autorizado";
    $TEXT['ADOdb-password'] = "Clave del usuario autorizado";
    $TEXT['ADOdb-database'] = "Base de datos en el servidor de base de datos";
    $TEXT['ADOdb-table'] = "Tabla de la base de datos";
    $TEXT['ADOdb-nottable'] = "<p><b>�No se encontr� la tabla!</b>";
    $TEXT['ADOdb-notdbserver'] = "<p><b>El driver para el servidor de base de datos NO existe o se trata de un driver ODBC, ADO o OLEDB!</b>";

    // ---------------------------------------------------------------------
    // INFO
    // ---------------------------------------------------------------------

    $TEXT['info-package'] = "Paquete";
    $TEXT['info-pages'] = "Paginas";
    $TEXT['info-extension'] = "Extensiones";
    $TEXT['info-module'] = "M�dulo Apache";
    $TEXT['info-description'] = "Descripci�n";
    $TEXT['info-signature'] = "Firma";
    $TEXT['info-docdir'] = "Directorio de documentos";
    $TEXT['info-port'] = "Puerto est�ndar";
    $TEXT['info-service'] = "Servicios";
    $TEXT['info-examples'] = "Ejemplos";
    $TEXT['info-conf'] = "Ficheros de configuraci�n";
    $TEXT['info-requires'] = "Requiere";
    $TEXT['info-alternative'] = "Alternativamente";
    $TEXT['info-tomcatwarn'] = "Aviso! Tomcat no se ha inciado en el puerto 8080.";
    $TEXT['info-tomcatok'] = "OK! Tomcat se inici� con �xito en el puerto 8080.";
    $TEXT['info-tryjava'] = "El ejemplo de Java (JSP) en Apache MOD_JK.";
    $TEXT['info-nococoon'] = "Aviso! Tomcat no se ha inciado en el puerto 8080. As� no puedo instalar \"Cocoon\" !";
    $TEXT['info-okcocoon'] = "Ok! Tomcat se ha cargado. La instalaci�n puede durar unos minutos. Para instalar \"Cocoon\" haga click aqu� ...";

    // ---------------------------------------------------------------------
    // PHP Switch
    // ---------------------------------------------------------------------

    $TEXT['switch-head'] = "PHP Switch 1.0 win32 para XAMPP";
    $TEXT['switch-phpversion'] = "<i><b>Actual en este XAMPP es";
    $TEXT['switch-whatis'] = "<b>�Qu� hace exactamente el conmutador PHP?</b><br>El conmutador PHP de ApacheFriends para XAMPP cambia de la versi�n 4 de PHP a la versi�n 5 y viceversa. As� puedes probar tus scripts en PHP 4 y PHP 5.<p>";
    $TEXT['switch-find'] = "<b>�D�nde est� el conmutador PHP?</b><br>El conmutador PHP para XAMPP es un fichero PHP en la carpeta de instalaci�n de XAMPP de nombre \"php-switch.php\". El cambio se realiza con el fichero batch. ";
    $TEXT['switch-care'] = "<b>�Qu� he de tener en cuenta?</b><br>PHP El conmutador se niega a realizar el cambio, cuando a) a�n est� ejecut�ndose Apache b) El fichero \".phpversion\" en la carpeta de instalaci�n falta o est� da�ado. En \".phpversion\" pone el n�mero de la versi�n PHP utilizada. Primero ejecutar \"shutdown\" Apache y s�lo despues iniciar \"php-switch.bat\".<p>";
    $TEXT['switch-where4'] = "<b>�D�nde estan despues mis (antiguos) ficheros de configuraci�n?</b><br><br>F�r PHP 4:<br>";
    $TEXT['switch-where5'] = "<br><br>Para PHP 5:<br>";
    $TEXT['switch-make1'] = "<b>�Se guardan las modificaciones?</b><br><br>S�! Para PHP4 o PHP5 respectivamente<br>";
    $TEXT['switch-make2'] = "<br><br> .. guardado en PHP4 ...<br>";
    $TEXT['switch-make3'] = "<br><br> .. guardado en PHP5 ...<br>";
    $TEXT['switch-make4'] = "<br><br>��Y vuelto atr�s con un \"switch\"!!<p>";
    $TEXT['switch-not'] = "<b>Estoy tan satisfecho y no quiero un \"Switch\" !!!</b><br>Fant�stico! Entonces olv�date de todo esto ... ;-)<br>";

    // ---------------------------------------------------------------------
    // Cocoon
    // ---------------------------------------------------------------------

    $TEXT['go-cocoon'] = "Cocoon ahora en http://localhost/cocoon/ aufrufen!";
    $TEXT['path-cocoon'] = "La ruta de or�gen de Cocoon es: ...\\xampp\\tomcat\\webapps\\cocoon";

    // ---------------------------------------------------------------------
    // Guest
    // ---------------------------------------------------------------------

    $TEXT['guest1-name'] = "Current Guest en esta Release es: <i>FCKeditor</i>";
    $TEXT['guest1-text1'] = "Un simpatico editor HMTL ONLINE con mucho JavaScript. Optimizado para IE, por cierto no funciona con Mozilla FireFox.";
    $TEXT['guest1-text2'] = "FCKeditor Homepage: <a href=\"http://www.fckeditor.net\" target=\"_new\">www.fckeditor.net</a>. Por cierto: La fuente Arial NO funciona, pero quiz�s alguien sepa solucionarlo?";
    $TEXT['guest1-text3'] = "<a href=\"guest-FCKeditor/fckedit-dynpage.php\" target=\"_new\">A la p�gina din�mica realizada con FCKeditor.</A>";

    // ---------------------------------------------------------------------
    // NAVI SPECIALS SECTION
    // ---------------------------------------------------------------------

    $TEXT['navi-specials'] = "Specials";

    // ---------------------------------------------------------------------
    // PS AND PARADOX EXAMPLE
    // ---------------------------------------------------------------------

    $TEXT['navi-ps'] = "PHP PostScript";
    $TEXT['ps-head'] = "PostScript Module Example";
    $TEXT['ps-text1'] = "PostScript Module �php_ps� by <a class=blue target=extern href=\"mailto:steinm@php.net\">Uwe Steinmann</a>";
    $TEXT['ps-text2'] = "Tip: To convert PS files to PDF files on win32, you can use <a href=\"http://www.shbox.de/\" target=\"_new\">FreePDF</a> with <a href=\"http://www.ghostscript.com/awki/\" target=\"_new\">GhostScript</a>.";

    $TEXT['navi-paradox'] = "PHP Paradox";
    $TEXT['paradox-head'] = "Paradox Module Example";
    $TEXT['paradox-text1'] = "Paradox Module �php_paradox� by <a class=blue target=extern href=\"mailto:steinm@php.net\">Uwe Steinmann</a>";
    $TEXT['paradox-text2'] = "<h2>Reading and writing a paradox database</h2>";
    $TEXT['paradox-text3'] = "More examples you can find in the directory ";
    $TEXT['paradox-text4'] = "Further information to Paradox databases in <a href=\"http://en.wikipedia.org/wiki/Paradox\" target=\"_new\">WikiPedia</a>.";
?>
