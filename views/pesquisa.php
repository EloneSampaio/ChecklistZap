<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../Autoload.php';
spl_autoload_register('class_model');

$pesquisa=new Dados();



$consulta=  htmlentities($_POST['pesquisa']);

$lista=$pesquisa->listNome($consulta);

?>





