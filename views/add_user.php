

<?php
$add=new Dao();

if(isset($_POST['novo'])):

$Nome=  htmlentities($_POST['nome']);
$Senha=  htmlentities($_POST['senha']);
$Nivel=  htmlentities($_POST['nivel']);
$hash=  bycript::hash($Senha);

$add->setNom($Nome);
$add->setSenha(md5($Senha));
$add->setNive($Nivel);
$y=$add->Novo_User();

if($y):
        echo "<div class='alert alert-success'> 
<button type='button' class='close' data-dismiss='alert'&times;></button>
<strong class='pull-right'>Dados Cadastrados com Sucesso</strong>
</div>
";  
        else:
    print "Ouve um Erro ao Alterar os Dados";

     
            
        endif;
endif;


?>



<div class="col-md-9">
<div class="panel panel-default">
     <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4 style="text-align: center">Novo Usuario</h4>
            
          </div>
    <hr>
    <form class="form form-horizontal" method="POST">
    
   
        <div class="control-group">
        <label>Nome</label>
        <div class="controls">
            <input type="text" name="nome" class="form-control" required="" placeholder="Nome"/>
        </div>
         </div>
    <div class="control-group">
         <div class="controls">
        <label>Senha</label>
        <input type="senha" name="senha" class="form-control" required="" placeholder="Senha"/>
       </div>
    </div>
      <div class="control-group">
         <div class="controls">
        <label>Nivel</label>
        <select class="form-control" name="nivel">
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>
       </div>
          <hr>
    </div>
    
    <div class="control-group">
    <div class="controls">
        <button type="submit" name="novo" class="btn btn-primary">
            <label>Guardar</label><i class="glyphicon glyphicon-saved"></i>
        </button>
    </div>
    </div>
    
    </form>
        </div>
    
    
    
</div>