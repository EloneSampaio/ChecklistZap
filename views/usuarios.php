<?php

$user=new Dados();
$s=$user->Users();

$d=new ArrayIterator($s);



?>
<?php
$delete=new Dao();

if(isset($_GET['action'])):
$acao=$_GET['action'];
    
if($acao=="apagar"):
$id=$_GET['id'];
$delete->Apagar_user($id);


endif;
endif;   




?>





<div class="col-md-9">       
<hr>
      
	   
          
			  
              
       <div class="panel panel-default">

<div class="panel-heading">
          <div class="panel-title">
          <a href="?page=add_user.php&action=novo" alt="Novo Usuario"><i class="glyphicon glyphicon-new-window pull-right"></i></a>
            <h4 style="text-align: center">Usuarios Cadastrados</h4>
          </div>
        </div>
        <div class="panel-body">
<table class="table  table-condensed table-hover table-striped table-bordered">
    
    <caption></caption>
    
    <thead>
        <tr>
 
    <th>Nome</th>
    <th>Senha</th>
    <th>Nivel</th>
    <th></th>

    
        </tr>
        
        
    </thead>
    <tbody>
        
        
        <?php
               while($d->valid()): 
        ?>
        <tr>
            
            <td><?php echo  $d->current()->Nome; ?></td>
            <td><?php echo  $d->current()->Senha; ?></td>
            <td><?php echo  $d->current()->Nivel; ?></td>
            
            <td><a href="?page=altera_user.php&action=altera&id=<?php echo  $d->current()->Id; ?>">
                    <i class="glyphicon glyphicon-pencil"></i>
                    
                </a>
                <a href="?page=usuarios.php&action=apagar&id=<?php echo  $d->current()->Id; ?>" onclick="return confirm('Deseja Deletar');">
                    <i class="glyphicon glyphicon-trash"></i>
                    
                </a>
                
                
            </td>
         
         </tr>
        
          <?php 
          $d->next();
      endwhile; 
      ?>
        
        
    </tbody>
    
</table>

            
           

        </div>


</div>
       </div>