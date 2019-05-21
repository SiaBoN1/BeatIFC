<?php

define('HOME', 'https://localhost/');

// Definições gerais

date_default_timezone_set('America/Sao_Paulo');

define('DB_HOST', '192.243.100.159');   //unio.ifcsombrio.tk
define('DB_USER', 'admin_hodges');
define('DB_PASSWORD', 'hodges');
define('DB_NAME', 'admin_hodges');

define('MAILUSER', 'usuario');
define('MAILPASS', 'senha');
define('MAILPORT', 'portaSMTP');
define('MAILHOST', 'hostname');

// Auto Load

function __autoload($Class) {
    
    $cDir = ['Conn'];
    $iDir = null;
    
    foreach($cDir as $dirName){
        
        if(!$iDir && file_exists(__DIR__ . "/{$dirName}/{$Class}.class.php") && !is_dir(__DIR__ . "\\{$dirName}\\{$Class}.class.php")){

            include_once(__DIR__ . "/{$dirName}/{$Class}.class.php");
            $iDir = true;
            
        }
        
    }

        
    if(!$iDir){
        
        trigger_error("Não foi possivel incluir {$Class}.class.php", E_USER_ERROR);
        die;
        
    }
    
}

define('WS_ACCEPT',"accept");
define('WS_INFOR',"infor");
define('WS_ALERT',"alert");
define('WS_ERROR',"error");

//--> WSErro :: Exibe Erros Lançados

function WSError($ErrMsg, $ErrNo, $ErrDie = null) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}</p>";
    
    if($ErrDie){
        die;
    }
}

//--> PHPError :: Personaliza Erros do PHP

function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
   
    echo "<b>Erro na Linha: {$ErrLine} :: </b> {$ErrMsg}<br />";
    echo "<small>{$ErrFile}</small>";
    echo "</p>";
    
    if($ErrNo == E_USER_ERROR){
        
        die;
        
    }
    
}

set_error_handler('PHPErro');