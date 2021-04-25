<?php

//função para data e hora
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,'pt_BR', 'pt_BR.utf-8','portuguese');

//pastas (contantes)

define('MODEL_PATH' , realpath(dirname(__FILE__) . '/../models'));


//carregar arquivo do BD

require_once(realpath(dirname(__FILE__) . '/database.php'));