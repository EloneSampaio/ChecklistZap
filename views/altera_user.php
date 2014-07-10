<?php
$altera=new Dados();
$alterar=new Dao();
    

$id=$_GET['id'];
$f=$altera->Users_Id($id);

?>

<?php
if(isset($_POST['altera'])):

$Nome=  htmlentities($_POST['nome']);
$Senha=  htmlentities($_POST['senha']);
$Nivel=  htmlentities($_POST['nivel']);
$alterar->setNom($Nome);
$alterar->setSenha(md5($Senha));
$alterar->setNive($Nivel);
$y=$alterar->Altera_user($id);

if($y):
        echo "<div class='alert alert-success'> 
<button type='button' class='close' data-dismiss='alert'&times;></button>
<strong class='pull-right'>Dados Alterados com Sucesso</strong>
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
            <h4 style="text-align: center">Alterar Dados</h4>
            
          </div>
    <hr>
    <form class="form form-horizontal" method="POST">
    <?php
    foreach ($f as $valor):
    
    ?>
   
   
        <div class="control-group">
        <label>Nome</label>
        <div class="controls">
            <input type="text" name="nome" class="form-control" value="<?php echo $valor['Nome']?>"/>
        </div>
         </div>
    <div class="control-group">
         <div class="controls">
        <label>Senha</label>
        <input type="senha" name="senha" class="form-control" value="<?php echo $valor['Senha']?>"/>
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
        <button type="submit" name="altera" class="btn btn-primary">
            <label>Alterar</label><i class="glyphicon glyphicon-saved"></i>
        </button>
    </div>
    </div>
    
    </form>
    <?php
   
    endforeach;
    ?>
    </div>
    
    
    
</div>