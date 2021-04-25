<?php

//acessando um arquivo fora da pasta
require_once(dirname(__FILE__,2) . '/src/config/config.php');
require_once(dirname(__FILE__,2) . '/src/models/User.php');


$user = new user(['name '=>'hugo' , 'email' => 'hugao@gamil.com',]);
//print_r ($user);

echo User::getSelect(['name'=> 'hugo', 'email' => 'hugao@gmail.com']);

