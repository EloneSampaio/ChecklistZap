
<?php
session_start();
require 'Autoload.php';
spl_autoload_register('class_model');

$login=new Dados();
$usuario=new Dados();


if(isset($_POST['botao'])){

$Nome=  htmlentities($_POST['nome']);
$Senha=  htmlentities($_POST['senha']);
$h=md5($Senha);



$y=$login->Login($Nome,$h);

foreach ($y as $valor):
    $nivel=$valor->Nivel;
    $usuario=$valor->Nome;
    $senha=$valor->Senha;
endforeach;

if($y){
    
    if($nivel=="Admin"){
    $_SESSION['admin']=$usuario;
    $_SESSION['pass']=$senha;
    header("Location:admin.php");
    
    }
 else {
     
    $_SESSION['usuario']=$usuario;
    $_SESSION['senha']=$senha;
    header("Location:user.php");

   
    
 }
 
    
   

    
    }
    else{
    
   echo "<div class='alert alert-danger'> 
<button type='button' class='close' data-dismiss='alert'&times;></button>
<strong class='pull-right'>Dados Invalidos! Volta a Insirir os Dados</strong>
</div>
";  

     
            
    }
    
    
    
    
    
    }
    
    
    

?>













<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Checklist Zap</title>
        <meta name="zap" content="checkzap" />
        <meta name="zap" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="views/css/bootstrap.css" rel="stylesheet">
        <link href="views/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="views/css/style.css" rel="stylesheet">
        <script type='text/javascript' src="views/js/bootstrap.js"></script>
       
        
        
        <style type="text/css">
    
 
    
</style>
</head>

<body>
<div class="container">
    <div class="row"> 
    <div id="sidebar">
       
        <div class="jumbotron">
            
    <div class="well">

        <form class="form form-horizontal" method="POST">
        <fieldset>
            <span  class="h1">Login</span>
            <div class="control-group"> 
                <input type="text" name="nome" placeholder="Nome" class="form-control" required=""/>
                <input type="password" name="senha" placeholder="Senha" class="form-control" required=""/>
            </div>
           <div class="control-group">
              <label></label>
              <div class="controls">
                  <button type="submit" class="btn btn-primary" name="botao" id="botao">
                    <label>Login</label> <i class="glyphicon glyphicon-saved"></i> 
                </button>
              </div>
            </div>   
        </fieldset>
        
        
        
        
        
    </form>
    
    </div>
    </div>
    </div>
    </div>
</div>
    </body>