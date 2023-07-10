<?php
#Arquivos diretórios raízes
$PastaInterna="projetoROTAS/";

define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios Específicos
define('DIRIMG',DIRPAGE."public/img/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRJS',DIRPAGE."public/js/");
define('DIRDESIGN',DIRPAGE."public/design/");
define('DIRAUDIO',DIRPAGE."public/audio/");
define('DIRFONTES',DIRPAGE."public/fontes/");
define('DIRVIDEO',DIRPAGE."public/video/");
define('DIRADMIN',DIRPAGE."public/admin/");

#Acesso ao banco de dados
define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"");