<?php //Translation for the Windows version of XAMPP by Marcio <mpg@mpg.com.br>
    // ---------------------------------------------------------------------
    // GLOBAL
    // ---------------------------------------------------------------------

    $TEXT['global-xampp'] = "XAMPP para Windows";
    $TEXT['global-showcode'] = "Obtenha o c�digo-fonte aqui";
    $TEXT['global-sourcecode'] = "C�digo-fonte";

    // ---------------------------------------------------------------------
    // NAVIGATION
    // ---------------------------------------------------------------------

    $TEXT['navi-xampp'] = "XAMPP";
    $TEXT['navi-welcome'] = "Bem Vindo";
    $TEXT['navi-status'] = "Status";
    $TEXT['navi-security'] = "Seguran�a";
    $TEXT['navi-doc'] = "Documenta��o";
    $TEXT['navi-components'] = "Componentes";
    $TEXT['navi-about'] = "Sobre o XAMPP";

    $TEXT['navi-demos'] = "Demos";
    $TEXT['navi-cdcol'] = "Cole��o de CD";
    $TEXT['navi-bio'] = "Bior�timo";
    $TEXT['navi-guest'] = "Livro de Visitas";
    $TEXT['navi-perlenv'] = "MiniPerl";
    $TEXT['navi-iart'] = "Arte Instant�nea";
    $TEXT['navi-iart2'] = "Arte Flash";
    $TEXT['navi-phonebook'] = "Agenda de Telefones";
    $TEXT['navi-perlasp'] = "Perl:ASP";
    $TEXT['navi-pear'] = "Excel_Writer";
    $TEXT['navi-adodb'] = "ADOdb";
    $TEXT['navi-perl'] = "Perl";
    $TEXT['navi-python'] = "Python";
    $TEXT['navi-jsp'] = "Java";
    $TEXT['navi-phpswitch'] = "Trocar PHP";

    $TEXT['navi-tools'] = "Ferramentas";
    $TEXT['navi-phpmyadmin'] = "phpMyAdmin";
    $TEXT['navi-webalizer'] = "Webalizer";
    $TEXT['navi-mercury'] = "Mercury Mail";
    $TEXT['navi-filezilla'] = "FileZilla FTP";
    $TEXT['navi-jpgraph'] = "JpGraph";

    $TEXT['navi-specialguest'] = "Visitante Atual";
    $TEXT['navi-guest1'] = "FCKeditor";

    $TEXT['navi-languages'] = "Idiomas";
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

    $TEXT['status-head'] = "XAMPP Status";
    $TEXT['status-text1'] = "Esta p�gina lhe oferece uma visualiza��o de todas as informa��es sobre o que est� rodando e funcionando como tamb�m o que n�o est�.";
    $TEXT['status-text2'] = "Algumas vezes as altera��es feitas nos arquivos de configura��o poder�o causar um status negativo. Com SSL (https://localhost) todos os relat�rios n�o funcionar�o!";

    $TEXT['status-mysql'] = "Banco de dados MySQL";
    $TEXT['status-ssl'] = "HTTPS (SSL)";
    $TEXT['status-php'] = "PHP";
    $TEXT['status-perl'] = "Perl com mod_perl";
    $TEXT['status-cgi'] = "Common Gateway Interface (CGI)";
    $TEXT['status-ssi'] = "Server Side Includes (SSI)";
    $TEXT['status-python'] = "Python com mod_python";
    $TEXT['status-mmcache'] = "extens�o PHP �Turck MMCache�";
    $TEXT['status-mmcache-url'] = "http://www.apachefriends.org/faq-wampp-en.html#mmcache";
    $TEXT['status-smtp'] = "Servi�o SMTP";
    $TEXT['status-ftp'] = "Servi�o FTP";
    $TEXT['status-tomcat'] = "Servi�o Tomcat";
    $TEXT['status-named'] = "Domain Name Service (DNS)";
    $TEXT['status-oci8'] = "extens�o PHP �OCI8/Oracle�";
    $TEXT['status-oci8-url'] = "http://www.apachefriends.org/faq-lampp-en.html#oci8";

    $TEXT['status-lookfaq'] = "ver FAQ";
    $TEXT['status-ok'] = "ATIVADO";
    $TEXT['status-nok'] = "DESATIVADO";

    $TEXT['status-tab1'] = "Componente";
    $TEXT['status-tab2'] = "Status";
    $TEXT['status-tab3'] = "Sugest�o";

    // ---------------------------------------------------------------------
    // SECURITY
    // ---------------------------------------------------------------------

    $TEXT['security-head'] = "SEGURAN�A XAMPP";
    $TEXT['security-text1'] = "Esta p�gina lhe d� uma vis�o geral r�pida sobre o status da seguran�a de sua instala��o de XAMPP. (Por favor, continue lendo ap�s a tabela.)";
    $TEXT['security-text2'] = "
    Os pontos marcados em verde s�o seguros; os pontos marcados em vermelho s�o definitivamente inseguros e os pontos marcados em amarelo n�o foram poss�veis de serem verificados (Por exemplo: O sofware que deseja verificar n�o est� funcionando).<p>Para simplesmente reparar problemas para o mysql, o phpmyadmin e o diret�rio do xampp use</b><p>=> <a href=\"/security/xamppsecurity.php\"><b>http://localhost/security/xamppsecurity.php</b></a> <= &nbsp;&nbsp;[permitido somente para localhost (servidor local)]<br>&nbsp;<br>&nbsp;<br>
    Algumas notas inportantes:<ul>
    <li>Todos estes testes s�o feitos UNICAMENTE no \"localhost\" (servidor local) (127.0.0.1).</li>
    <li><i><b>Para o FileZilla FTP e Mercury Mail, voc� necessita corrigir todos os problemas de seguran�a por voc� mesmo! Desculpe. </b></i></li>
    <li>Se seu computador n�o estiver online ou protegido por um firewall, seus servidores estar�o SEGUROS contra ataques externos.</li>
    <li>Se os servidores n�o estiverem rodando, estes servidores estar�o SEGUROS!</li></ul>";
    $TEXT['security-text3'] = "<b>Por favor, considere:
    Com uma seguran�a maior do XAMPP alguns exemplos n�o ir�o executar sem uma mensagem de erro. Caso use o PHP em \"safe mode\" (modo seguro) por exemplo, algumas fun��es deste sistema da seguran�a n�o funcionar�o mais. Frequentemente mais seguran�a significa menos funcionalidade ao mesmo tempo.</b>";
    $TEXT['security-text4'] = "As portas padr�o do XAMPP:";

    $TEXT['security-ok'] = "SEGURO";
    $TEXT['security-nok'] = "INSEGURO";
    $TEXT['security-noidea'] = "DESCONHECIDO";

    $TEXT['security-tab1'] = "Assunto";
    $TEXT['security-tab2'] = "Status";

    $TEXT['security-checkapache-nok'] = "Estas p�ginas do XAMPP est�o acess�veis a qualquer pessoa na rede";
    $TEXT['security-checkapache-ok'] = "Estas p�ginas do XAMPP n�o est�o acess�veis por qualquer pessoa na rede";
    $TEXT['security-checkapache-text'] = "Qualquer p�gina de demostra��o do XAMPP que voc� estiver visualizando est� acess�vel por qualquer pessoa da rede. Qualquer um que conhe�a o endere�o de IP poder� v�-las.";

    $TEXT['security-checkmysqlport-nok'] = "O MySQL est� aces�vel na rede";
    $TEXT['security-checkmysqlport-ok'] = "O MySQL n�o est� aces�vel na rede";
    $TEXT['security-checkmysqlport-text'] = "Este � um potencial ou ao menos uma falha te�rica de seguran�a. E se voc� for louco sobre a seguran�a voc� deve desativar a interface de rede do MySQL.";

    $TEXT['security-checkpmamysqluser-nok'] = "O usu�rio principal do phpMyAdmin n�o possue uma senha";
    $TEXT['security-checkpmamysqluser-ok'] = "O usu�rio principal do phpMyAdmin possui uma senha";
    $TEXT['security-checkpmamysqluser-text'] = "phpMyAdmin armazena suas informa��es em um banco de dados MySQL extra. Para acessar as informa��es do phpMyAdmin utilize-se do usu�rio especial pma. Este usu�rio n�o possui na instala��o padr�o uma senha definida e por raz�es de seguran�a � necess�rio que voc� defina uma senha para ele.";

    $TEXT['security-checkmysql-nok'] = "O usu�rio administrador do MySQL N�O possui uma senha";
    $TEXT['security-checkmysql-ok'] = "O usu�rio administrador do MySQL possui uma senha";
    $TEXT['security-checkmysql-out'] = "A MySQL server is not running  or is blocked by a firewall!";
    $TEXT['security-checkmysql-text'] = "Qualquer usu�rio local poder� acessar o banco de dados MySQL com privil�gios de Administrador. Voc� deve definir uma senha.";

    $TEXT['security-pop-nok'] = "O usu�rio teste (newuser) para o servidor POP3 Mercury Mail possui uma senha antiga (wampp)";
    $TEXT['security-pop-ok'] = "O usu�rio teste \"newuser\" para o servidor POP3 Mercury Mail n�o mais existe ou possui uma senha nova";
    $TEXT['security-pop-out'] = "Um servidor POP3 (como o Mercury Mail) n�o est� rodando ou est� sendo bloqueado pelo firewall!";
    $TEXT['security-pop-notload'] = "<i>A extens�o IMAP necess�ria para o teste de seguran�a n�o foi habilitada (php.ini)!</i><br>";
    $TEXT['security-pop-text'] = "Por favor, verifique e caso seje necess�rio edite todos os usu�rios e senhas no arquivo de configura��o do servidor Mercury Mail!";

    $TEXT['security-checkftppassword-nok'] = "A senha do servidor de FTP FileZilla permanece ainda como 'wampp'";
    $TEXT['security-checkftppassword-ok'] = "A senha do servidor de FTP FileZilla foi alterada";
    $TEXT['security-checkftppassword-out'] = "O servidor FTP n�o est� rodando ou est� sendo bloqueado pelo firewall!";
    $TEXT['security-checkftppassword-text'] = "O servidor de FTP FileZilla foi iniciado, o usu�rio padr�o 'newuser' com senha 'wampp' pode enviar arquivos que poder�o alterar seu servidor XAMPP. Caso voc� ative o servidor FileZilla FTP voc� dever� definir uma nova senha para o usu�rio 'newuser'.";

    $TEXT['security-phpmyadmin-nok'] = "O PhpMyAdmin pode ser acessado pela rede";
    $TEXT['security-phpmyadmin-ok'] = "A senha do PhpMyAdmin est� ativada.";
    $TEXT['security-phpmyadmin-out'] = "N�o foi poss�vel encontrar o arquivo 'config.inc.php' do PhpMyAdmin";
    $TEXT['security-phpmyadmin-text'] = "O PhpMyAdmin pode ser acessado pela rede sem senha. A configura��o 'httpd' ou 'cookie' no arquivo \"config.inc.php\" poder� ajud�-lo a resolver o problema.";

    $TEXT['security-checkphp-nok'] = "O PHP N�O est� rodando no modo seguro (\"safe mode\")";
    $TEXT['security-checkphp-ok'] = "O PHP est� rodando no modo seguro (\"safe mode\")";
    $TEXT['security-checkphp-out'] = "Imposs�vel controlar as configura��es do PHP!";
    $TEXT['security-checkphp-text'] = "Caso deseje oferecer a execu��o de arquivo PHP para outras pessoas, por favor, pense em utilizar a configura��o de modo de segura�a (\"safe mode\"). Caso s� voc� tenha acesso ao PHP e o utilizar� para desenvolvimento de aplicativos recomendamos N�O ativar a configura��o de modo seguro (\"safe mode\") porque algumas fun��es importantes n�o funcionar�o com ela. <A HREF=\"http://www.php.net/features.safe-mode\" target=\"_new\"><font size=1>Mais informa��es</font></A>";


    // ---------------------------------------------------------------------
    // SECURITY SETUP
    // ---------------------------------------------------------------------

    $TEXT['mysql-security-head'] = "Console de Seguran�a MySQL & Prote��o de Diret�rios do XAMPP";
    $TEXT['mysql-rootsetup-head'] = "SE��O MYSQL: SENHA \"ROOT\"";
    $TEXT['mysql-rootsetup-text1'] = "";
    $TEXT['mysql-rootsetup-notrunning'] = "O servidor MySQL n�o est� ativo ou foi bloqueado por um firewall! Por favor, verifique isto primeiramente ...";
    $TEXT['mysql-rootsetup-passwdnotok'] = "A nova senha � identica a senha de repeti��o. Por favor, entre com a nova senha novamente!";
    $TEXT['mysql-rootsetup-passwdnull'] = "Senhas em branco ('') n�o s�o aceitas!";
    $TEXT['mysql-rootsetup-passwdsuccess'] = "SUCESSO: A senha para o Super Usu�rio 'root' foi definida e atualizada!
    Nota: A defini��o de uma nova senha para o Super Usu�rio \"root\" necessita que voc� REINICIE O MYSQL !!!! As informa��es da nova senha foram gravadas no seguinte arquivo:";
    $TEXT['mysql-rootsetup-passwdnosuccess'] = "ERRO: A senha root possivelmente est� incorreta. MySQL recusa em entrar com a senha atual de root.";
    $TEXT['mysql-rootsetup-passwdold'] = "Senha atual:";
    $TEXT['mysql-rootsetup-passwd'] = "Nova senha:";
    $TEXT['mysql-rootsetup-passwdrepeat'] = "Repetir nova senha:";
    $TEXT['mysql-rootsetup-passwdchange'] = "Alterar Senha";
    $TEXT['mysql-rootsetup-phpmyadmin'] = "Atentica��o PhpMyAdmin:";

    $TEXT['xampp-setup-head'] = "Prote��o de Diret�rios do XAMPP (.htaccess)";
    $TEXT['xampp-setup-user'] = "Usu�rio:";
    $TEXT['xampp-setup-passwd'] = "Senha:";
    $TEXT['xampp-setup-start'] = "Tornar seguro o diret�rio XAMPP";
    $TEXT['xampp-setup-notok'] = "<br><br>ERRO: A string para o nome de usu�rio e a senha devem ter pelo menos tr�s (3) characteres e n�o mais que quinze (15) caracteres. Caracteres especiais tal como <��� (usw.) e caracteres em branco n�o s�o permitidos!<br><br>";
    $TEXT['xampp-setup-ok'] = "<br><br>A senha de root foi alterada. Por favor, reinicie o MYSQL para que estas alter��es tenha efeito!<br><br>";
    $TEXT['xampp-config-ok'] = "<br><br>SUCESSO: O diret�rio XAMPP est� agora protegido! Todas as informa��es pessoais foram gravadas no arquivo:<br>";
    $TEXT['xampp-config-notok'] = "<br><br>ERRO: Seu sistema N�O pode ativar o sistema de prote��o de diret�rio com \".htaccess\" e o arquivo \"htpasswd.exe\". Talvez o PHP esteja em modo seguro (\"Safe Mode\"). <br><br>";

    // ---------------------------------------------------------------------
    // START
    // ---------------------------------------------------------------------

    $TEXT['start-head'] = "Bem vindo ao XAMPP para Windows";

    $TEXT['start-subhead'] = "Congratula��es:<br>Voc� instalou corretamente o XAMPP em seu sistema!";

    $TEXT['start-text1'] = "Voc� pode agora iniciar a utiliza��o do Apache e outros aplicativos. Primeiramente tente verificar o �Status�  no menu lateral para ter certeza que tudo est� funcionando corretamente.";

    $TEXT['start-text2'] = "";

    $TEXT['start-text3'] = "";

    $TEXT['start-text4'] = "Para suporte em OpenSSL por favor utilize o certificado teste em <a href='https://127.0.0.1' target='_top'>https://127.0.0.1</a> ou <a href='https://localhost' target='_top'>https://localhost</a>";

    $TEXT['start-text5'] = "E muito importante! Especial agradecimento pela ajuda e suporte dada por Nemesis, KriS, Boppy, Pc-Dummy e todos os outros amigos do XAMPP!";

    $TEXT['start-text6'] = "Boa sorte, Kay Vogelgesang + Kai 'Oswald' Seidler + Carsten Wiedmann";

    // ---------------------------------------------------------------------
    // MANUALS
    // ---------------------------------------------------------------------

    $TEXT['manuals-head'] = "Documenta��o Online";

    $TEXT['manuals-text1'] = "XAMPP combina muitos diferentes softwares em um s� pacote. Voc� encontrar� a lista padr�o e documenta��o de refer�ncia dos mais importantes pacotes nos links:";


    $TEXT['manuals-list1'] = "
    <ul>
    <li><a href=\"http://httpd.apache.org/docs/2.2/en/\">Documenta��o do Apache 2</a>
    <li><a href=\"http://dev.mysql.com/doc/refman/5.1/en/\">Documenta��o do MySQL</a>
    <li><a href=\"http://www.php.net/manual/en/\">PHP <b>Manual de Refer�ncia</b></a>
    <li><a href=\"http://perldoc.perl.org/\">Documenta��o do Perl</a>
    <li><a href=\"http://wiki.filezilla-project.org/Documentation\">FileZilla FTP Server</a>
    <li><a href=\"http://wiki.pmail.com/index.php?title=Mercury:Contents\">Mercury Mail Transport Agent</a>
    </ul>";

    $TEXT['manuals-text2'] = "Como tamb�m uma pequena lista de tutoriais e documenta��o do Apache Friends:";

    $TEXT['manuals-list2'] = "
    <ul>
    <li><a href=\"http://www.apachefriends.org/en/faq-xampp.html\">Documenta��o Apache Friends</a>
    <li><a href=\"http://www.freewebmasterhelp.com/tutorials/php/\">Tutorial PHP</a> por David Gowans
    <li><a href=\"http://www.davesite.com/webstation/html/\">HTML - Tutorial Interativo para Iniciantes</a> por Dave Kristula
    <li><a href=\"http://www.comp.leeds.ac.uk/Perl/start.html\">Tutorial Perl</a> por Nik Silver
    </ul>";

    $TEXT['manuals-text3'] = "Boa sorte e divirta-se! :)";

    // ---------------------------------------------------------------------
    // COMPONENTS
    // ---------------------------------------------------------------------

    $TEXT['components-head'] = "Componentes do XAMPP";

    $TEXT['components-text1'] = "O XAMPP combina diferentes softwares em um s� pacotes. Aqui est� as informa��es dos pacotes utilizados.";

    $TEXT['components-text2'] = "Agradecemos aos desenvolvedores destes programas.";

    $TEXT['components-text3'] = "No diret�rio <a href='/licenses/'><b>\\xampp\licenses</b></a> voc� ir� encontrar todas as licen�as destes programas.";

    // ---------------------------------------------------------------------
    // CD COLLECTION DEMO
    // ---------------------------------------------------------------------

    $TEXT['cds-head'] = "Cole��o de CD (Exemplo com PHP MySQL e Classe PDF)";
    $TEXT['cds-head-fpdf'] = "Cole��o de CD (Exemplo com PHP MySQL e FPDF)";

    $TEXT['cds-text1'] = "Um programa muito simples para colet�nea de CD's.";

    $TEXT['cds-text2'] = "Lista de CD's como um <a href='$_SERVER[PHP_SELF]?action=getpdf'>Arquivo PDF</a>.";

    $TEXT['cds-error'] = "N�o foi poss�vel conectar ao banco de dados!<br>O servidor MySQL est� rodando ou voc� alterou a senha?";
    $TEXT['cds-head1'] = "Meus CD's";
    $TEXT['cds-attrib1'] = "Artista";
    $TEXT['cds-attrib2'] = "T�tulo";
    $TEXT['cds-attrib3'] = "Ano";
    $TEXT['cds-attrib4'] = "Comando";
    $TEXT['cds-sure'] = "Certeza?";
    $TEXT['cds-head2'] = "Adicionar um CD";
    $TEXT['cds-button1'] = "APAGAR CD";
    $TEXT['cds-button2'] = "ADICIONAR CD";

    // ---------------------------------------------------------------------
    // BIORHYTHM DEMO
    // ---------------------------------------------------------------------

    $TEXT['bio-head'] = "Bior�timo (Exemplo com PHP e GD)";

    $TEXT['bio-by'] = "por";
    $TEXT['bio-ask'] = "Por favor, entre com a data de seu anivers�rio";
    $TEXT['bio-ok'] = "OK";
    $TEXT['bio-error1'] = "Data";
    $TEXT['bio-error2'] = "� invalido(a)";

    $TEXT['bio-birthday'] = "Anivers�rio";
    $TEXT['bio-today'] = "Hoje";
    $TEXT['bio-intellectual'] = "Intelectual";
    $TEXT['bio-emotional'] = "Emocional";
    $TEXT['bio-physical'] = "F�sico";

    // ---------------------------------------------------------------------
    // INSTANT ART DEMO
    // ---------------------------------------------------------------------

    $TEXT['iart-head'] = "Arte Instant�nea (Exemplo com PHP GD e FreeType)";
    $TEXT['iart-text1'] = "Fonte �AnkeCalligraph� por <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
    $TEXT['iart-ok'] = "OK";

    // ---------------------------------------------------------------------
    // FLASH ART DEMO
    // ---------------------------------------------------------------------

    $TEXT['flash-head'] = "Arte Flash (Exemplo com PHP e MING)";
    $TEXT['flash-text1'] = "O Projeto MING para win32 n�o existe mais e n�o est� completo.<br>Por favor, leia isso: <a class=blue target=extern href=\"http://www.opaque.net/wiki/index.php?Ming\">Ming - uma biblioteca de sa�da SWF e M�dulo PHP</a>";
    $TEXT['flash-ok'] = "OK";

    // ---------------------------------------------------------------------
    // PHONE BOOK DEMO
    // ---------------------------------------------------------------------

    $TEXT['phonebook-head'] = "Agenda de Telefones (Exemplo com PHP e SQLite)";

    $TEXT['phonebook-text1'] = "Um script simples para Agenda de Telefones. Implementado com um tecnologia moderna e atual: SQLite, o banco de dados SQL sem servidor.";

    $TEXT['phonebook-error'] = "N�o foi poss�vel abrir o banco de dados!";
    $TEXT['phonebook-head1'] = "Meus telefones";
    $TEXT['phonebook-attrib1'] = "Sobrenome";
    $TEXT['phonebook-attrib2'] = "Nome";
    $TEXT['phonebook-attrib3'] = "Telefone";
    $TEXT['phonebook-attrib4'] = "Comando";
    $TEXT['phonebook-sure'] = "Certeza?";
    $TEXT['phonebook-head2'] = "Adicionar dados";
    $TEXT['phonebook-button1'] = "APAGAR";
    $TEXT['phonebook-button2'] = "ADICIONAR";

    // ---------------------------------------------------------------------
    // ABOUT
    // ---------------------------------------------------------------------

    $TEXT['about-head'] = "Sobre o XAMPP";

    $TEXT['about-subhead1'] = "Id�ias e Realiza��es";

    $TEXT['about-subhead2'] = "Design";

    $TEXT['about-subhead3'] = "Colabora��o";

    $TEXT['about-subhead4'] = "Contatos pessoais";

    // ---------------------------------------------------------------------
    // MERCURY
    // ---------------------------------------------------------------------

    $TEXT['mail-head'] = "Mala-direta com o servidor SMTP e POP3 Mercury Mail";
    $TEXT['mail-hinweise'] = "Algumas notas importantes para utilizar o Mercury!";
    $TEXT['mail-adress'] = "Remetente:";
    $TEXT['mail-adressat'] = "Destinat�rio:";
    $TEXT['mail-cc'] = "CC:";
    $TEXT['mail-subject'] = "Assunto:";
    $TEXT['mail-message'] = "Mensagem:";
    $TEXT['mail-sendnow'] = "Esta mensagem ser agora enviada ...";
    $TEXT['mail-sendok'] = "Esta mensagem foi enviada com sucesso!";
    $TEXT['mail-sendnotok'] = "Erro! A mensagem nor pode ser enviada!";
    $TEXT['mail-help1'] = "Notes da utiliza��o do Mercury:<br><br>";
    $TEXT['mail-help2'] = "<ul>
    <li>O servidor Mercury necessita uma conex�o externa na inicializa��o;</li>
    <li>Ao iniciar, o Mercury define o Domain Name Service (DNS) automaticamente como sendo o nome do servidor de seu provedor;</li>
    <li>Para todos os usu�rios de gateway: Por favor, configure seu DNS via TCP/IP (ex. via InterNic com um n�mero de IP 198.41.0.4);</li>
    <li>O arquivo de configura��o do Mercury � denominado MERCURY.INI;</li>
    <li>Por favor, envie uma mensagem para postmaster@localhost ou admin@localhost para testar e verifique o resultado nas pastas: \\xampp\\MercuryMail\\MAIL\\Admin;</li>
    <li>Exixte um usu�rio teste denominado \"newuser\" (newuser@localhost) e com a Senha = wampp;</li>
    <li>Spam e outras obcenidades s�o totalmente proibidas com o Mercury!;</li>
    </ul>";
    $TEXT['mail-url'] = "<a href=\"http://www.pmail.com/overviews/ovw_mercury.htm\" target=\"_top\">http://www.pmail.com/overviews/ovw_mercury.htm</a>";
    // ---------------------------------------------------------------------
    // FileZilla FTP
    // ---------------------------------------------------------------------

    $TEXT['filezilla-head'] = "Servidor FTP FileZilla";
    $TEXT['filezilla-install'] = "O Apache <U>n�o</U> � um servidor de FTP ... mas o FTP FileZilla �. Por favor, considere as seguintes refer�ncias.";
    $TEXT['filezilla-install2'] = "No diret�rio principal do xampp, rodar o arquivo de lote \"filezilla_setup.bat\" para configurar. Aten��o: Para o Windows NT, 2000 e XP Profissional, o FileZilla necessita ser instalado como um servi�o.";
    $TEXT['filezilla-install3'] = "Configure o servidor de FTP \"FileZilla\". Utilize-se da interface do FileZilla para configur�-lo, que poder ser acessada pelo arquivo \"FileZilla Server Interface.exe\". Existem dois usu�rios neste exemplo:<br><br>
    A: O usu�rio padr�o \"newuser\" com senha \"wampp\". O diret�rio principal dele � xampp\htdocs.<br>
    B: Um usu�rio an�nimo \"anonymous\" sem senha definida. O diret�rio principal dele � xampp\anonymous.<br><br>
    A interface padr�o � no endere�o de loopback com IP 127.0.0.1.";
    $TEXT['filezilla-install4'] = "O servidor FTP ser� finaliza com o arquivo lote \"FileZillaFTP_stop.bat\". Para o servidor FTP FileZilla sendo utilizado como um servi�o do Windows, por favor se utilize diretamente do arquivo \"FileZillaServer.exe\". Com ele voc� pode configurar todas as op��es de inicializa��o.";
    $TEXT['filezilla-url'] = "<br><br><a href=\"http://filezilla.sourceforge.net\" target=\"_top\">http://filezilla.sourceforge.net</a>";

    // ---------------------------------------------------------------------
    // PEAR
    // ---------------------------------------------------------------------

    $TEXT['pear-head'] = "Exportando para o Excel com PEAR (PHP)";
    $TEXT['pear-text'] = "Um <a class=blue target=extern href=\"http://www.contentmanager.de/magazin/artikel_310-print_excel_export_mit_pear.html\">Manual</A> simples feito por Bj�rn Schotte do <a class=blue target=extern href=\"http://www.thinkphp.de/\">ThinkPHP</A> (Somente em Alem�o)";
    $TEXT['pear-cell'] = "O valor da c�lula";

    // ---------------------------------------------------------------------
    // JPGRAPH
    // ---------------------------------------------------------------------

    $TEXT['jpgraph-head'] = "JpGraph - Biblioteca Gr�fica para PHP";
    $TEXT['jpgraph-url'] = "<br><br><a href=\"http://www.aditus.nu/jpgraph/\" target=\"_top\">http://www.aditus.nu/jpgraph/</a>";

    // ---------------------------------------------------------------------
    // ADODB
    // ---------------------------------------------------------------------

    $TEXT['ADOdb-head'] = "ADOdb - Another DB access (PHP)";
    $TEXT['ADOdb-text'] = "
    ADOdb proporciona uma padroniza��o dos comandos para acesso a banco de dados. Suporta atualmente MySQL, PostgreSQL, Interbase, Firebird, Informix, Oracle, MS SQL 7, Foxpro, Access, ADO, Sybase, FrontBase, DB2, SAP DB, SQLite e ODBC gen�rico. Os drivers para Sybase, Informix, FrontBase e PostgreSQL s�o contribui��es da comunidade.  Voc� o encontra em \\xampp\\php\\PEAR\\adodb.";
    $TEXT['ADOdb-example'] = "Exemplo:";
    $TEXT['ADOdb-dbserver'] = "Tipo de Banco de dados (MySQL, Oracle ..?)";
    $TEXT['ADOdb-host'] = "Servidor do Banco de Dados (Nome ou IP)";
    $TEXT['ADOdb-user'] = "Usu�rio ";
    $TEXT['ADOdb-password'] = "Senha";
    $TEXT['ADOdb-database'] = "Atual banco de dados neste servidor";
    $TEXT['ADOdb-table'] = "Selecionar tabela do banco de dados";
    $TEXT['ADOdb-nottable'] = "<p><b>Tabela n�o encontrada!</b>";
    $TEXT['ADOdb-notdbserver'] = "<p><b>O driver para este tipo de servidor n�o existe ou talves seja um driver ODBC, ADO ou OLEDB!</b>";


    // ---------------------------------------------------------------------
    // INFO
    // ---------------------------------------------------------------------

    $TEXT['info-package'] = "Pacote";
    $TEXT['info-pages'] = "P�ginas";
    $TEXT['info-extension'] = "Extens�es";
    $TEXT['info-module'] = "M�dulo Apache";
    $TEXT['info-description'] = "Descri��o";
    $TEXT['info-signature'] = "Assinatura";
    $TEXT['info-docdir'] = "Raiz dos Documentos";
    $TEXT['info-port'] = "Porta padr�o";
    $TEXT['info-service'] = "Servi�os";
    $TEXT['info-examples'] = "Examplos";
    $TEXT['info-conf'] = "Arquivos de Configura��o";
    $TEXT['info-requires'] = "Requer";
    $TEXT['info-alternative'] = "Alternativo(a)";
    $TEXT['info-tomcatwarn'] = "ATEN��O! O Tomcat foi iniciado na porta 8080.";
    $TEXT['info-tomcatok'] = "OK! Tomcat foi iniciado corretamente na porta 8080.";
    $TEXT['info-tryjava'] = "Exemplo java (JSP) com o Apache MOD_JK.";
    $TEXT['info-nococoon'] = "ATEN��O! Tomcat n�o pode iniciar na porta 8080. N�o � poss�vel instalar o \"Cocoon\" sem o servidor Tomcat!";
    $TEXT['info-okcocoon'] = "Ok! O servidor Tomcat est� rodando normalmente. A instala��o funcionar� em alguns minutos! Para instalar agora o \"Cocoon\" clique aqui ...";

    // ---------------------------------------------------------------------
    // PHP Switch
    // ---------------------------------------------------------------------

    $TEXT['switch-head'] = "PHP Switch 1.0 win32 para XAMPP";
    $TEXT['switch-phpversion'] = "<i><b>Atualmente ESTE XAMPP est� rodando em ";
    $TEXT['switch-whatis'] = "<b>O que faz o PHP switch?</b><br>O PHP Switch do apachefriends para XAMPP permite a troca do PHP vers�o 4 para a vers�o 5 E (!) vice-versa. Voc� pode testar seus scripts em PHP 4 ou PHP 5.<p>";
    $TEXT['switch-find'] = "<b>Onde est� o PHP Switch?</b><br>O PHP Switch para XAMPP ir� executar um arquivo PHP (no diret�rio de instala��o do XAMPP) com o nome \"php-switch.php\". Voc� tamb�m poder� utilizar este arquivo de lote para executar: ";
    $TEXT['switch-care'] = "<b>Est� com dificuldades?</b><br>O PHP Switch n�o altera sua vers�o do PHP, quando a) O HTTPD Apache est� rodando e/ou b) o arquivo \".phpversion\" no diret�rio de instala��o est� vazio ou tem um defeito. No arquivo \".phpversion\" foi escrito a atual vers�o do PHP utilizada pelo XAMPP tal como \"4\" ou \"5\". \"Desligue\" o servidor HTTPD Apache e ent�o EXECUTE o arquivo \"php-switch.bat\".<p>";
    $TEXT['switch-where4'] = "<b>Depois disso onde est�o meus arquivos de configura��o antigos?</b><br><br>Para o PHP 4:<br>";
    $TEXT['switch-where5'] = "<br><br>Para o PHP 5:<br>";
    $TEXT['switch-make1'] = "<b>Quais s�o as altera��es feitas no meus arquivos de configura��o?</b><br><br>Eles est�o para o PHP4 ou PHP5 em<br>";
    $TEXT['switch-make2'] = "<br><br> .. copia de seguran�a para o PHP4 ...<br>";
    $TEXT['switch-make3'] = "<br><br> .. copia de seguran�a para o PHP5 ...<br>";
    $TEXT['switch-make4'] = "<br><br>E estes arquivos retornar�o com o PHP switch!!<p>";
    $TEXT['switch-not'] = "<b>Meu PHP est� perfeito e N�O UTILIZAREI o \"switch\" !!!</b><br>Super! Ent�o esque�a tudo isso ... ;-)<br>";

    // ---------------------------------------------------------------------
    // Cocoon
    // ---------------------------------------------------------------------

    $TEXT['go-cocoon'] = "Cocoon em http://localhost/cocoon/";
    $TEXT['path-cocoon'] = "E a pasta atual no seu disco �: ...\\xampp\\tomcat\\webapps\\cocoon";

    // ---------------------------------------------------------------------
    // Guest
    // ---------------------------------------------------------------------

    $TEXT['guest1-name'] = "Convidados atuais nesta release: <i>FCKeditor</i>";
    $TEXT['guest1-text1'] = "Um editor HMTL ONLINE com mais que s� JavaScript. Otimizado para o IE. Mas n�o funciona com o Mozilla FireFox.";
    $TEXT['guest1-text2'] = "Site do FCKeditor: <a href=\"http://www.fckeditor.net\" target=\"_new\">www.fckeditor.net</a>. Notas: A fonte Arial font N�O funciona aqui, mas n�o se sabe o porque!";
    $TEXT['guest1-text3'] = "<a href=\"guest-FCKeditor/fckedit-dynpage.php\" target=\"_new\">Um exemplo escrito com o FCKeditor.</A>";

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
