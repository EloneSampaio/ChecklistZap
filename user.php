<?php

session_start();
if(!(isset($_SESSION['usuario'])==TRUE) and (!isset($_SESSION['senha'])==TRUE)){
    
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header("Location:index.php");
}
else{
$logado=$_SESSION['usuario'];
}
?>


<?php
require 'Autoload.php';
spl_autoload_register('class_model');

error_reporting(0);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$pesquisa=new Dados();
$user=new Dados();


$consulta=  htmlentities($_POST["pesquisar"]);
$listar=$pesquisa->listNome($consulta);

?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Checklist Zap</title>
        <meta name="zap" content="checkzap" />
        <meta name="zap" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="views/css/bootstrap.css" rel="stylesheet">
        <link href="views/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="views/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="views/fonts/zap.jpg"/>
        <script type='text/javascript' src="views/js/bootstrap.js"></script>
       
        <script src="views/js/jquery.js"></script>
       
        
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->










        <!-- CSS code from Bootply.com editor -->
        
   


<script>
$(document).ready(function(){

 $("#ver").hide();
$("#bt").click(function(){

 
 $("#ver").show();
 

 });

});
</script>

          
        
        
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body>
        
        
        <!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="#">Painel de Administraçao</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"></i>Olá| <?php echo $logado ?>
                <span class="caret">
            
            </span>
          
          </a>
        <li><a href="views/logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
              
            
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->
<!-- /FORM -->
<form  method="POST"  class="pull-right">
<div>
    <input type="search" placeholder="Pesquisar" name="pesquisar" />
    <button type="submit" id="bt"><i class="glyphicon glyphicon-search"></i></button>
</div>
</form>
<!-- Main -->
<div class="container">
  
  <!-- upper section -->
  <div class="row">
	<div class="col-md-3">
      <!-- left -->
      <a href="user.php"><img src="views/fonts/zap.jpg " class="img-thumbnail" ></a> 
      <hr>
      
      
   
      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="?page=utilizador.php"><i class="glyphicon glyphicon-plus"></i> Nova Checklist</a></li>
        <li><a href="?page=lista.php"><i class="glyphicon glyphicon-list-alt"></i> Ver Checklist</a></li>
        <li><a href="?page=alterar.php"><i class="glyphicon glyphicon-briefcase"></i> Alterar checklist</a></li>
        <li><a href="?page=alterar1.php" style="display: none;"><i class="glyphicon glyphicon-briefcase"></i></a></li>
        <li><a href="?page=altera_user.php" style="display: none;"><i class="glyphicon glyphicon-briefcase"></i></a></li>
        <li><a href="?page=add_user.php" style="display: none;"><i class="glyphicon glyphicon-briefcase"></i></a></li>
        <li><a href="#"><i class="glyphicon glyphicon-time"></i> Avançados</a></li>
        
      </ul>
      </div><!-- /span-3 -->
      
      
      
      
      <div id="ver" style="display: none;">   
<div class="col-md-9">
      	
      <!-- column 2 -->	
      
     
       <hr>
      
	   
          
			  
              
       <div class="panel panel-default" >

<div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-list-alt pull-right"></i>
            <h4 style="text-align: center">Lista de Dispositivos</h4>
          </div>
        </div>
        <div class="panel-body">
<table class="table  table-condensed table-hover table-striped table-bordered">
    
    <caption></caption>
    
    <thead>
        <tr>
    <th></th>
    <th>Nome</th>
    <th>Empresa</th>
    <th>Contacto</th>
    
    <th></th>

    
        </tr>
        
        
    </thead>
    <tbody>
        <?php
        foreach ($listar as $valor): 
        ?>
        <tr>
            <td><?php echo  $valor['Id']; ?></td>
            <td><?php echo  $valor['Nome']; ?></td>
            <td><?php echo  $valor['Empresa']; ?></td>
            <td><?php echo  $valor['Contacto']; ?></td>
                        
            <td><a href="views/relatorio.php?id=<?php echo  $valor['Id']; ?>"> ver</a></td>
        </tr>
        
          <?php endforeach; ?>
        
        
    </tbody>
    
</table>

        </div>



</div>
          </div>
      </div>
      
      
      
      
      
      
        
	   <?php
					
				$link= @$_GET['page'];
				switch($link):
					case 'utilizador.php':
						require_once('./views/form.php');
					break;
					case 'lista.php':
						require_once('./views/lista.php');
					break;
					
					case 'pesquisa.php':
						require_once('./views/pesquisa.php');
					break;
					case 'deletar.php':
						require_once('./views/deletar.php');
					break;
					case 'alterar.php':
						require_once('./views/alterar.php');
					break;
                                        case 'alterar1.php':
						require_once('./views/alterar1.php');
					break;
					
					case 'usuarios.php':
						require_once('./views/usuarios.php');
					break;
					
                                        case 'altera_user.php':
						require_once('./views/altera_user.php');
					break;
                                        case 'add_user.php':
						require_once('./views/add_user.php');
					break;
                                    
                                        default:
					  require_once('index.php');
					break;
				
				endswitch;
				?>
			  
         
     
     
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  
  <!-- lower section -->
  
    
    
      
     

<!-- /Main -->











        
        <!-- JavaScript jQuery code from Bootply.com editor -->
        

        
    </body>
</html>